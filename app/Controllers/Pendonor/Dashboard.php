<?php

namespace App\Controllers\Pendonor;

use App\Controllers\BaseController;
use App\Models\Kuisoner;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Assesment;
use App\Models\Pendonor;
use App\Models\Donor;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $pendonorId = $session->get("user_id");
        $assesmentModel = new Assesment();
         // Query untuk menghitung jumlah donor darah yang layak
         $jumlahDonor = $assesmentModel
                ->select('COUNT(*) as total')
                ->join('donor', 'assesment.id_assesment = donor.id_assesmen') // Menggabungkan tabel assesment dan donor
                ->where('assesment.status_layak_donor', 'LAYAK') // Filter status "LAYAK"
                ->where('assesment.id_pendonor', $pendonorId) // Filter berdasarkan ID pendonor
                ->first(); // Mengambil hasil pertama

        $data =[
            "syarat" => [
                "Usia minimal 17 tahun dan maksimal 65 tahun",
                "Berat badan minimal 45 kg",
                "Tekanan darah normal, yaitu antara 100/70 hingga 120/80 mmHg ",
                "Kadar hemoglobin tidak kurang dari 12,5g/dL dan tidak lebih dari 20g/dL ",
                "Suhu tubuh berkisar antara 36,6–37,5 derajat Celcius",
                "Denyut nadi berkisar antara 50–100 kali per menit",
                "Sehat jasmani dan rohani ",
                "Bersedia mendonorkan darah secara sukarela, dibuktikan dengan mengisi formulir persetujuan"
            ],
            "jumlahdonor" => $jumlahDonor
        ];

       

        return view("pendonor/dashboard",$data);
    }

    public function kuisoner(){
        return view("pendonor/kuisoner");
    }

    public function store_kuisoner($id){
        // Instansiasi model
        $kuisionerModel = new Kuisoner();

        // Ambil data dari request
        $pertanyaan = $this->request->getPost('pertanyaan');
        $jawaban = $this->request->getPost('jawaban');
        $idRegistrasi = $this->request->getPost('id_registrasi'); 
        $idPendonor = $this->request->getPost('id_pendonor'); 
        $ic = $this->request->getPost('ic'); 

        if ($pertanyaan && $jawaban && count($pertanyaan) === count($jawaban)) {
            // Gabungkan semua pertanyaan menjadi satu string
            $combinedPertanyaan = implode(", ", $pertanyaan);

            // Gabungkan semua jawaban menjadi satu string
            $combinedJawaban = implode(", ", $jawaban);

            // Data untuk dimasukkan ke database
            $dataToInsert = [
                'id_registrasi' => $idRegistrasi,
                'id_pendonor' => $id,
                'IC' => $ic,
                'pertanyaan' => $combinedPertanyaan, // Gabungan semua pertanyaan
                'jawaban' => $combinedJawaban, // Gabungan semua jawaban
            ];

            // Simpan data ke database
            $kuisionerModel->insert($dataToInsert);

            return redirect()->to(base_url("pendonor/dashboard"))->with('success', 'Data kuisioner berhasil disimpan, terima kasih sudah mengisi kuisoner ini');
        }

        return redirect()->back()->with('error', 'Terjadi kesalahan dalam pengisian data');
    }
}
