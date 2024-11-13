<?php

namespace App\Controllers\Pendonor;

use App\Models\Pendonor;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class Profile extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->Pendonor = new Pendonor();
        $this->session = session();
    }

    public function edit($id){
        $Pendonor = new Pendonor();
       
        $idPendonor = $id;

        if (!$idPendonor) {
            return redirect()->to(base_url("login"))->with('error', 'Harap login terlebih dahulu');
        }

        $data['pendonor'] = $Pendonor->where('id_pendonor',$id)->first();
       

        if (!$data['pendonor']) {
            return redirect()->to(base_url("pendonor/dashboard"))->with('error', 'Data pendonor tidak ditemukan');
        }
        //var_dump($data['pendonor']);
        return view("pendonor/profile/edit",$data); 
    }

    public function store($id){
        // Ambil data dari formulir
        $data = [
            'NIK' => $this->request->getPost('NIK'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'rhesus' => $this->request->getPost('rhesus'),
            'user' => $this->request->getPost('user'),
            'email' => $this->request->getPost('email')
        ];

        // Cek jika ada password yang diinput
        $password = $this->request->getPost('password');
        if ($password) {
            // Jika password diisi, hash password dan masukkan ke data
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Update data pendonor
        $this->Pendonor->update($id, $data);

        return redirect()->to(base_url('pendonor/edit_profile/'.$id))->with('success',"Profile berhasil diedit");
    }
}
