<!DOCTYPE html>
<html>
<head>
    <title>Detail Donor</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { width: 100%; }
        .section { margin-bottom: 20px; }
        h4 { margin-bottom: 10px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
        <p><strong>Petugas yang mengunduh:</strong> <?= esc($donor['username']); ?></p>
        </div>
        <div class="section">
            <h4>Detail Pendonor</h4>
            <p><strong>ID Pendonor:</strong> <?= esc($donor['id_pendonor']); ?></p>
            <p><strong>NIK:</strong> <?= esc($donor['NIK']); ?></p>
            <p><strong>Nama:</strong> <?= esc($donor['nama']); ?></p>
            <p><strong>Alamat:</strong> <?= esc($donor['alamat']); ?></p>
            <p><strong>Jenis Kelamin:</strong> <?= $donor['jenis_kelamin'] == 1 ? 'Laki-laki' : 'Perempuan'; ?></p>
            <p><strong>Tempat Lahir:</strong> <?= esc($donor['tempat_lahir']); ?></p>
            <p><strong>Tanggal Lahir:</strong> <?= esc($donor['tanggal_lahir']); ?></p>
            <p><strong>No. Telpon:</strong> <?= esc($donor['no_telpon']); ?></p>
            <p><strong>Gol. Darah:</strong> <?= esc($donor['gol_darah']); ?></p>
            <p><strong>Rhesus:</strong> <?= esc($donor['rhesus']); ?></p>
            <p><strong>Email:</strong> <?= esc($donor['email']); ?></p>
        </div>

        <div class="section">
            <h4>Detail Kuisioner</h4>
            <p><strong>ID Kuisioner:</strong> <?= esc($donor['id_kuisioner']); ?></p>
            <p><strong>ID Registrasi:</strong> <?= esc($donor['id_registrasi']); ?></p>
            <?php if (isset($donor['ic'])): ?>
                <p><strong>IC:</strong> <?= esc($donor['ic']); ?></p>
            <?php endif; ?>
            <p><strong>Pertanyaan:</strong> <?= esc($donor['pertanyaan']); ?></p>
            <p><strong>Jawaban:</strong> <?= esc($donor['jawaban']); ?></p>
        </div>

        <div class="section">
            <h4>Detail Cek Darah</h4>
            <p><strong>ID Cek Darah:</strong> <?= esc($donor['id_cek']); ?></p>
            <p><strong>Petugas:</strong> <?= esc($donor['username']); ?></p>
            <p><strong>Golongan darah:</strong> <?= esc($donor['gol_darah']); ?></p>
            <p><strong>Rhesus:</strong> <?= esc($donor['rhesus']); ?></p>
            <p><strong>Waktu:</strong> <?= esc($donor['waktu']); ?></p>
        </div>

        <div class="section">
            <h4>Detail Assesment</h4>
            <p><strong>Nama Petugas:</strong> <?= esc($donor['username']); ?></p>
            <p><strong>Suhu:</strong> <?= esc($donor['suhu']); ?></p>
            <p><strong>Hb:</strong> <?= esc($donor['hb']); ?></p>
            <p><strong>Td:</strong> <?= esc($donor['td']); ?></p>
            <p><strong>Tanggal Assesment:</strong> <?= esc($donor['tanggal_assesment']); ?></p>
            <p><strong>Riwayat Penyakit:</strong> <?= esc($donor['riwayat_penyakit']); ?></p>
            <p><strong>Status Layak Donor:</strong> 
                <span class='<?= strtolower($donor['status_layak_donor']) === "layak" ? "bg-success" : "bg-danger" ?>'>
                    <?= esc($donor['status_layak_donor']); ?>
                </span>
            </p>
        </div>
    </div>
</body>
</html>
