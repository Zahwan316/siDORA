<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Cek_Darah;
use CodeIgniter\HTTP\ResponseInterface;

class CekDarah extends BaseController
{
    public function index()
    {
         // Load model
        $cekDarahModel = new Cek_Darah();
        $cekdarah = $cekDarahModel->select('petugas.username,pendonor.*,cek_darah.*')
        ->join('petugas', 'cek_darah.id_petugas = petugas.id_petugas')
        ->join('pendonor', 'cek_darah.id_pendonor = pendonor.id_pendonor')
        ->findAll   ();
        $data['cekdarah'] = $cekdarah; 

        return view("admin/cek_darah",$data);
    }

    public function detail($id){
        $data['id_pendonor'] = $id;

        return view("admin/cek_darah_detail",$data);
    }

    public function store(){
        // Load model
        $cekDarahModel = new Cek_Darah();

        // Validasi input
        $validation = $this->validate([
            'id_petugas' => 'required|integer',
            'id_pendonor' => 'required|integer',
            'gol_darah' => 'required|alpha|max_length[3]',
            'rhesus' => 'required|max_length[3]',
            'waktu' => 'required'
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari input
        $data = [
            'id_petugas' => $this->request->getPost('id_petugas'),
            'id_pendonor' => $this->request->getPost('id_pendonor'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'rhesus' => $this->request->getPost('rhesus'),
            'waktu' => $this->request->getPost('waktu')
        ];

        // Simpan data ke database
        if ($cekDarahModel->insert($data)) {
            return redirect()->to(base_url('petugas/data_pendonor/'.$this->request->getPost('id_pendonor')))->with('success', 'Data cek darah berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data cek darah.');
        }
    }
}
