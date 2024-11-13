<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Assesment;
use App\Models\Pendonor;
use App\Models\Donor;
use App\Models\Kuisoner;
use App\Models\Cek_Darah;

class AssesmentController extends BaseController
{
    public function index()
    {
        
    }

    public function get($id){
        $PendonorModel = new Pendonor();
        $KuisionerModel = new Kuisoner();
        $CekDarahModel = new Cek_Darah();

        $pendonor = $PendonorModel->find($id);
        $data['pendonor'] = $pendonor;

        $Kuisioner = $KuisionerModel->where("id_pendonor",$id)->first();
        $data['kuisioner'] = $Kuisioner;

        $cekdarah = $CekDarahModel->where("id_pendonor",$id)->first();
        $data['cekdarah'] = $cekdarah;

        return view("admin/assesment",$data);
    }

    public function create(){
         // Load model Assesment dan Donor
        $assesmentModel = new Assesment();
        $donorModel = new Donor();

        // Validasi input
        $validation = $this->validate([
            'id_cek_darah' => 'required|integer',
            'id_pendonor' => 'required|integer',
            'id_petugas' => 'required|integer',
            'suhu' => 'required|decimal',
            'hb' => 'required|numeric',
            'td' => 'required|numeric',
            'tanggal_assesment' => 'required|valid_date',
            'riwayat_penyakit' => 'required|numeric',
            'status_layak_donor' => 'required|string|max_length[255]'
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari input
        $dataAssesment = [
            'id_cek_darah' => $this->request->getPost('id_cek_darah'),
            'id_pendonor' => $this->request->getPost('id_pendonor'),
            'id_petugas' => $this->request->getPost('id_petugas'),
            'suhu' => $this->request->getPost('suhu'),
            'hb' => $this->request->getPost('hb'),
            'td' => $this->request->getPost('td'),
            'tanggal_assesment' => $this->request->getPost('tanggal_assesment'),
            'riwayat_penyakit' => $this->request->getPost('riwayat_penyakit'),
            'status_layak_donor' => $this->request->getPost('status_layak_donor')
        ];

        // Simpan data ke tabel Assesment
        $idAssesment = $assesmentModel->insert($dataAssesment);

        if ($idAssesment) {
            // Data berhasil disimpan, lanjut simpan data ke tabel Donor
            $dataDonor = [
                'id_petugas' => $dataAssesment['id_petugas'],
                'id_assesmen' => $idAssesment,
                'tanggal' => $dataAssesment['tanggal_assesment']
            ];

            $donorModel->insert($dataDonor);

            return redirect()->to(base_url("petugas/laporan_pendonor"))->with('success', 'Data assesment dan donor berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data assesment.');
        }
    }
    
}
