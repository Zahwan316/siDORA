<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Pendonor;
use App\Models\Kuisoner;
use App\Models\Cek_Darah;
use CodeIgniter\HTTP\ResponseInterface;

class DataPendonor extends BaseController
{
    public function index()
    {   
         // Load model yang diperlukan (misalnya, model Pendonor dan Kuisioner)
        $pendonorModel = new Pendonor();
        $kuisionerModel = new Kuisoner();
        

        // Mengambil data pendonor yang sudah mengisi kuisioner
        $data['pendonorDenganKuisioner'] = $pendonorModel->select('pendonor.*, kuisioner.id_kuisioner')
            ->join('kuisioner', 'kuisioner.id_pendonor = pendonor.id_pendonor')
            ->findAll();

        // Load view dengan data pendonor yang sudah mengisi kuisioner
        return view("admin/data_pendonor", $data);
    }

    public function detail($id){
        // Load model yang diperlukan (misalnya, model Kuisioner)
        $kuisionerModel = new Kuisoner();
        $pendonorModel = new Pendonor();
        $cekdarahModel = new Cek_Darah();

        // Ambil data kuisioner berdasarkan id_pendonor
        $kuisioner = $kuisionerModel->where('id_pendonor', $id)->first();
        $data['kuisoner'] = $kuisioner;

        // Ambil data pendonor berdasarkan id
        $pendonor = $pendonorModel->find($id);
        $data['pendonor'] = $pendonor;

        $cekdarah = $cekdarahModel->where("id_pendonor",$id)->first();
        $data['cekdarah'] = $cekdarah;

        if ($kuisioner && $pendonor) {
            // Jika data ditemukan, berarti user sudah mengisi kuisioner
            return view("admin/data_pendonor_detail",$data);
        } 
        
        /* else {
            // Jika tidak ditemukan, arahkan user untuk mengisi kuisioner
            return redirect()->to(base_url('pendonor/isi_kuisioner/'.$idPendonor))
                            ->with('info', 'Silakan isi kuisioner.');
        } */

    }

    public function delete($id)
    {
        $kuisionerModel = new Kuisoner();
    
        // Cek apakah kuisioner dengan id_pendonor tersebut ada
        $kuisioner = $kuisionerModel->where('id_pendonor', $id)->first();
        if (!$kuisioner) {
            return redirect()->back()->with('error', 'Data kuisioner tidak ditemukan.');
        }
    
        // Hapus kuisioner berdasarkan id_pendonor
        $kuisionerModel->where('id_pendonor', $id)->delete();
    
        // Redirect dengan pesan sukses
        return redirect()->to(base_url("petugas/data_pendonor"))->with('success', 'Data kuisioner berhasil dihapus.');
    }
    
    
}
