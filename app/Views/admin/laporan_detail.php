<?= $this->extend("layout/main") ?>

<?= $this->section("content") ?>
<div class="container mt-5">
    <div class='mb-3 text-center'>
        <a href='<?= base_url("petugas/laporan_pendonor/export/".$donor['id_donor']) ?>'>
            <button class='btn btn-primary'>Export Laporan</button>
        </a>
    </div>
    <div class="row">
        <!--  -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tanggal Donor</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <form action='<?= base_url("petugas/laporan_pendonor/edit/".$donor['id_donor']) ?>' method='post'>
                                <label>Tanggal</label>
                                <?php if($donor['status_layak_donor'] === 'LAYAK'): ?>
                                    <input type='date' class='form-control mb-2' name='tanggal' value='<?= esc($donor['tanggal']); ?>'/>
                                    <button type='submit' class='btn btn-primary'>Simpan</button>
                                <?php else: ?>
                                    <input type='date' class='form-control mb-2' disabled name='tanggal' value='<?= esc($donor['tanggal']); ?>'/>
                                    <button type='submit' class='btn btn-primary' disabled>Simpan</button>
                                <?php endif ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Detail Pendonor -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Detail Pendonor</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>ID Pendonor:</strong> <?= esc($donor['id_pendonor']); ?></li>
                        <li class="list-group-item"><strong>NIK:</strong> <?= esc($donor['NIK']); ?></li>
                        <li class="list-group-item"><strong>Nama:</strong> <?= esc($donor['nama']); ?></li>
                        <li class="list-group-item"><strong>Alamat:</strong> <?= esc($donor['alamat']); ?></li>
                        <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?= $donor['jenis_kelamin'] == 1 ? 'Laki-laki' : 'Perempuan'; ?></li>
                        <li class="list-group-item"><strong>Tempat Lahir:</strong> <?= esc($donor['tempat_lahir']); ?></li>
                        <li class="list-group-item"><strong>Tanggal Lahir:</strong> <?= esc($donor['tanggal_lahir']); ?></li>
                        <li class="list-group-item"><strong>No. Telpon:</strong> <?= esc($donor['no_telpon']); ?></li>
                        <li class="list-group-item"><strong>Gol. Darah:</strong> <?= esc($donor['gol_darah']); ?></li>
                        <li class="list-group-item"><strong>Rhesus:</strong> <?= esc($donor['rhesus']); ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= esc($donor['email']); ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Detail Kuisioner -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Detail Kuisioner</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($donor)) : ?>
                        <?php if (isset($donor['ic'])) : ?>
                            <p><strong>IC:</strong> <?= esc($donor['ic']); ?></p>
                        <?php endif ?>
                        <p><strong>Pertanyaan:</strong> <?= esc($donor['pertanyaan']); ?></p>
                        <p><strong>Jawaban:</strong> <?= esc($donor['jawaban']); ?></p>
                    <?php else : ?>
                        <p class="text-center">Belum ada kuisioner yang diisi.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Detail Cek Darah -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Detail Cek Darah</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($donor)) : ?>
                        <p><strong>ID Cek Darah:</strong> <?= esc($donor['id_cek']); ?></p>
                        <p><strong>Petugas:</strong> <?= esc($donor['username']); ?></p>
                        <p><strong>Golongan darah:</strong> <?= esc($donor['gol_darah']); ?></p>
                        <p><strong>Rhesus:</strong> <?= esc($donor['rhesus']); ?></p>
                        <p><strong>Waktu:</strong> <?= esc($donor['waktu']); ?></p>
                    <?php else : ?>
                        <p class="text-center">Belum ada cek darah yang diisi.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Assesment -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Assesment</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($donor)) : ?>
                        <p><strong>Nama Petugas :</strong> <?= esc($donor['nama']); ?></p>
                        <p><strong>Suhu :</strong> <?= esc($donor['suhu']); ?></p>
                        <p><strong>Hb :</strong> <?= esc($donor['hb']); ?></p>
                        <p><strong>Td :</strong> <?= esc($donor['td']); ?></p>
                        <p><strong>Tanggal Assesment :</strong> <?= esc($donor['tanggal_assesment']); ?></p>
                        <p><strong>Riwayat Penyakit:</strong> <?= esc($donor['riwayat_penyakit']); ?></p>
                        <p><strong>Status Layak Donor:</strong>
                            <span class='text-white p-1 rounded <?= strtolower($donor['status_layak_donor']) === "layak" ? "bg-success" : "bg-danger" ?>'>
                                <?= esc($donor['status_layak_donor']); ?>
                            </span>
                        </p>
                    <?php else : ?>
                        <p class="text-center">Belum ada assesment yang diisi.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (session()->getFlashdata('success')): ?>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: '<?= session()->getFlashdata('success') ?>',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: '<?= session()->getFlashdata('error') ?>',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>
<?= $this->endSection() ?>
