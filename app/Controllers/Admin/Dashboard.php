<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Pendonor;
use App\Models\Donor;
use App\Models\Kuisoner;
use App\Models\Cek_Darah;

class Dashboard extends BaseController
{
    public function index()
    {
        $pendonorModel = new Pendonor();
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

        $data['jumlahdonor'] = $jumlahYangSudahDiDonor;
        $data['kantungdarah'] = $kantungdarah;
        $data['stok'] = $stok;

        

        return view("admin/dashboard",$data);
    }
}
