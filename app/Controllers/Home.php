<?php

namespace App\Controllers;

use App\Models\Donor;

class Home extends BaseController
{
    public function index(): string
    {
        $donorModel = new Donor();

        $jumlahYangSudahDiDonor = $donorModel->select('COUNT(*) as total')
                    ->join('assesment', 'assesment.id_assesment = donor.id_assesmen')
                    ->where('assesment.status_layak_donor', 'LAYAK')
                    ->get()
                    ->getRow();

        $kantungdarah = $donorModel->select('COUNT(*) as total') // Menggunakan COUNT untuk menghitung total
                    ->join('assesment', 'donor.id_assesmen = assesment.id_assesment') // Join dengan tabel assesment
                    ->join('cek_darah', 'cek_darah.id_cek = assesment.id_cek_darah') // Join dengan tabel cek_darah
                    ->where('assesment.status_layak_donor', 'LAYAK') // Kondisi untuk status yang "LAYAK"
                    ->get()
                    ->getRow();

        $stok = $donorModel->select('cek_darah.gol_darah, COUNT(*) as jumlah')
                            ->join('assesment', 'donor.id_assesmen = assesment.id_assesment')
                            ->join('cek_darah', 'cek_darah.id_cek = assesment.id_cek_darah')
                            ->where('assesment.status_layak_donor', 'LAYAK')
                            ->groupBy('cek_darah.gol_darah')
                            ->get()
                            ->getResult();

        $data = [
            "nama" => "hello world",
            "menu" => ["Home","Tentang","Syarat","Testimoni"],
            "manfaat" => [
                "Meningkatkan Kesehatan Jantung" => "Dengan mendonorkan darah secara rutin, Anda membantu mengurangi jumlah besi dalam darah, yang dapat mengurangi risiko terkena penyakit jantung dan stroke.",
                "Meningkatkan Produksi Sel Darah Baru" => "Donor darah merangsang tubuh untuk memproduksi sel darah baru yang sehat, menjaga tubuh Anda tetap segar dan bugar.",
                "Deteksi Kesehatan Dini" => "Setiap kali Anda mendonorkan darah, Anda mendapatkan pemeriksaan kesehatan gratis yang dapat membantu mendeteksi masalah kesehatan secara dini, seperti kadar kolesterol tinggi atau penyakit lainnya.",
                // "Menyumbang untuk Menyelamatkan Nyawa" => "Setiap tetes darah yang Anda sumbangkan dapat menyelamatkan tiga nyawa. Anda dapat membuat perbedaan yang besar dengan mendonorkan darah.",
                // "Rasa Kepuasan yang Mendalam" => "Donor darah memberikan rasa kepuasan yang luar biasa karena Anda tahu bahwa apa yang Anda lakukan dapat menyelamatkan nyawa orang lain dan memberikan harapan bagi mereka yang membutuhkan.",
                // "Meningkatkan Kesehatan Mental" => "Mendonor darah tidak hanya bermanfaat bagi tubuh, tetapi juga dapat meningkatkan kesehatan mental Anda. Memberikan darah untuk orang lain memberi perasaan bahagia dan memberi dampak positif pada emosi Anda.",
            ],
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

            "jumlahdonor" => $jumlahYangSudahDiDonor,
            'kantungdarah' => $kantungdarah,
            'stok' => $stok,
        ];
        return view('home',$data);
    }
}
