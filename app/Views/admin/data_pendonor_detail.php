    <?= $this->extend("layout/main") ?>

    <?= $this->section("content") ?>
    <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Detail Pendonor</h4>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>ID Pendonor:</strong> <?= esc($pendonor['id_pendonor']); ?>
                </li>
                <li class="list-group-item">
                    <strong>NIK:</strong> <?= esc($pendonor['NIK']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Nama:</strong> <?= esc($pendonor['nama']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Alamat:</strong> <?= esc($pendonor['alamat']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Jenis Kelamin:</strong> <?= $pendonor['jenis_kelamin'] == 1 ? 'Laki-laki' : 'Perempuan'; ?>
                </li>
                <li class="list-group-item">
                    <strong>Tempat Lahir:</strong> <?= esc($pendonor['tempat_lahir']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Tanggal Lahir:</strong> <?= esc($pendonor['tanggal_lahir']); ?>
                </li>
                <li class="list-group-item">
                    <strong>No. Telpon:</strong> <?= esc($pendonor['no_telpon']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Gol. Darah:</strong> <?= esc($pendonor['gol_darah']); ?>
                </li>
                <li class="list-group-item">
                    <strong>Rhesus:</strong> <?= esc($pendonor['rhesus']); ?>
                </li>
                
                <li class="list-group-item">
                    <strong>Email:</strong> <?= esc($pendonor['email']); ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="card shadow mt-4 mb-5">
        <div class="card-header bg-secondary text-white">
            <h4>Detail Kuisioner</h4>
        </div>
        <div class="card-body">
            <?php if (!empty($kuisoner)) : ?>
                
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p><strong>ID Kuisioner:</strong> <?= esc($kuisoner['id_kuisioner']); ?></p>
                                <!-- <p><strong>ID Registrasi:</strong> <?= esc($kuisoner['id_registrasi']); ?></p> -->
                                <?php if(isset($kuisoner['IC'])):?>
                                    <p><strong>IC:</strong> <?= esc($kuisoner['IC']) == 1 ? "Setuju" : "Tidak Setuju"; ?></p>
                                <?php endif ?>
                                <p><strong>Pertanyaan:</strong> <?= esc($kuisoner['pertanyaan']); ?></p>
                                <p><strong>Jawaban:</strong> <?= esc($kuisoner['jawaban']); ?></p>
                            </div>
                        </div>
                    </div>
                
            <?php else : ?>
                <p class="text-center">Belum ada kuisioner yang diisi.</p>
            <?php endif; ?>
        </div>
    </div>

    <a href='<?= base_url("petugas/cek_darah/".$pendonor['id_pendonor'] ) ?>'>
        <button class='btn btn-primary'>Cek Darah</button>
    </a>

    <?php if(empty($cekdarah) || $cekdarah === null):?>
        <a href=''>
            <button class='btn btn-primary' disabled>Assesment</button>
        </a>
    <?php else: ?>
        <a href='<?= base_url('petugas/assesment/'.$pendonor['id_pendonor']) ?>'>
            <button class='btn btn-primary' >Assesments</button>
        </a>
    <?php endif ?>
    <a href='<?= base_url("petugas/data_pendonor/delete/".$pendonor['id_pendonor']) ?>'>
        <button class="btn btn-danger mr-4">Tolak Pendonor</button>
    </a>
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

