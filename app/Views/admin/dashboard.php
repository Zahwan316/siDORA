<?= $this->extend("layout/main") ?>

<?= $this->section("content") ?>

<div class="container mt-5">
    <h4 class='mb-4'>Selamat datang di dashboard admin siDORA(Sistem Donor Darah)</h4>
    <div class="row">
        <!-- Kolom untuk jumlah orang yang sudah di donor -->
        <div class='col-12 col-md-6 mb-4'>
            <div class='card h-100'>             
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h3 class='mb-2'>Jumlah orang yang sudah di donor</h3>
                    <img src='<?= base_url("img/user1.svg") ?>' class='img-fluid mb-3' style='max-width:160px; height:auto;' />
                    <p class='fs-4' style='font-size:1.5rem'><b><?= $jumlahdonor->total ?></b> Orang</p>
                </div>
            </div>
        </div>

        <!-- Kolom untuk jumlah kantung darah -->
        <div class='col-12 col-md-6 mb-4'>
            <div class='card h-100'>       
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h3 class='mb-2'>Jumlah Kantung Darah</h3>
                    <img src='https://www.svgrepo.com/show/263085/blood-transfusion-surgery.svg' class='img-fluid mb-3' style='max-width:160px; height:auto;' />
                    <p class='fs-4' style='font-size:1.5rem'><b><?= $kantungdarah->total ?></b> Kantung</p>
                </div>
            </div>
        </div>

        <!-- Kolom untuk jumlah pendonoran darah berdasarkan golongan darah -->
        <div class='col-12 mb-4'>
            <div class='card h-100'>
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h3 class='mb-5'>Jumlah pendonoran darah</h3>
                    <div class='d-flex justify-content-center align-items-center flex-wrap' style='gap:4em'>
                        <?php 
                            $golonganDarah = ['A', 'B', 'O', 'AB'];
                            foreach ($golonganDarah as $golongan) {
                                $jumlah = 0;
                                foreach ($stok as $item) {
                                    if ($item->gol_darah == $golongan) {
                                        $jumlah = $item->jumlah;
                                        break;
                                    }
                                }
                        ?>
                        <div class='d-flex justify-content-center align-items-center flex-column'>
                            <img src='<?= base_url("img/{$golongan}.png") ?>' class='mb-4' style='width:120px; height:160px'/>
                            <p class='fs-3'><b><?= $jumlah ?></b> kantung darah</p>
                        </div>
                        <?php } ?>
                    </div>
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
