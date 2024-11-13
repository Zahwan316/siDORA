<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Donor;
use Dompdf\Dompdf;
use Dompdf\Options;

class Laporan extends BaseController
{
    public function index()
    {
        $DonorModel = new Donor();
        $donor = $DonorModel->select('donor.*, assesment.*, petugas.username,pendonor.*')
        ->join('assesment', 'donor.id_assesmen = assesment.id_assesment')
        ->join('petugas', 'assesment.id_petugas = petugas.id_petugas')
        ->join('pendonor', 'assesment.id_pendonor = pendonor.id_pendonor')
        ->findAll();
        $data['donor'] = $donor;
        return view("admin/laporan",$data);
    }

    public function detail($id){
        $DonorModel = new Donor();

        $donor = $DonorModel->select('donor.*, assesment.*, petugas.username,pendonor.*,cek_darah.*,kuisioner.*')
        ->join('assesment', 'donor.id_assesmen = assesment.id_assesment')
        ->join('petugas', 'assesment.id_petugas = petugas.id_petugas')
        ->join('pendonor', 'assesment.id_pendonor = pendonor.id_pendonor')
        ->join('kuisioner', 'assesment.id_pendonor = kuisioner.id_pendonor')
        ->join('cek_darah', 'assesment.id_cek_darah = cek_darah.id_cek')
        ->where("id_donor",$id)->first();

        $data['donor'] = $donor;

        //var_dump($data);
        return view("admin/laporan_detail",$data);
    }

    public function edit($id){
        $DonorModel = new Donor();

        $DonorModel->update($id,[
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        return redirect()->back()->with('success',"Data berhasil diedit");
    }

   

    public function exportDonorToPDF($id)
    {
        $DonorModel = new Donor();

        $donor = $DonorModel->select('donor.*, assesment.*, petugas.username,pendonor.*,cek_darah.*,kuisioner.*')
        ->join('assesment', 'donor.id_assesmen = assesment.id_assesment')
        ->join('petugas', 'assesment.id_petugas = petugas.id_petugas')
        ->join('pendonor', 'assesment.id_pendonor = pendonor.id_pendonor')
        ->join('kuisioner', 'assesment.id_pendonor = kuisioner.id_pendonor')
        ->join('cek_darah', 'assesment.id_cek_darah = cek_darah.id_cek')
        ->where("id_donor",$id)->first();

        // Pastikan data donor ditemukan
        if (!$donor) {
            return redirect()->back()->with('error', 'Data donor tidak ditemukan.');
        }

        // Inisialisasi Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        // Load tampilan yang diubah menjadi PDF
        $html = view('admin/donor_pdf_template', ['donor' => $donor]);
        $dompdf->loadHtml($html);

        // Set ukuran kertas dan orientasi (misalnya A4 dan potrait)
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML menjadi PDF
        $dompdf->render();

        // Unduh file PDF
        $dompdf->stream("Detail_Donor_$id.pdf", ["Attachment" => 1]);
    }

}
