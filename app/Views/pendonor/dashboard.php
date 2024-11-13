
<?= $this->extend("layout/pendonor") ?>

<?php $session = session(); ?>

<?= $this->section("content") ?>
<div class='container-fluid'>
    <div class="mb-4"></div>
    <div class='col-12 col-md-10 mb-3 container-fluid mb-5'>
        <h3 class='fw-bold'>Selamat datang di siDORA (Sistem Donor Darah), pastikan data identitasmu sudah lengkap</h3>
    </div>

    <div class='container-fluid'>
    <div class='row mb-5'>
        <div class='col-12 col-md-6 mb-4'>
            <div class='card h-100'>
                <div class="card-header">
                    <div class="card-title">
                        <p>Syarat untuk donor darah</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <?php foreach($syarat as $item): ?>
                            <li><?= $item ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class='col-12 col-md-6 mb-4'>
            <div class='card h-100'>
                <div class="card-header">
                    <p>Informasi</p>
                </div>
                <div class="card-body">
                    <p>
                        Jadilah pahlawan bagi sesama! Daftarkan diri Anda untuk donor darah sekarang dan selamatkan nyawa. Setiap tetes darah Anda berarti harapan baru bagi mereka yang membutuhkan. Klik tombol di bawah ini untuk bergabung menjadi pendonor!
                    </p>
                    <button class='btn btn-primary' onClick="openNotif()">Daftar donor darah sekarang</button>
                </div>
            </div>
        </div>

        <div class='col-12 mb-4'>
            <div class='card h-100'>
                <div class="card-header">
                    <p>Statistik Pendonoran</p>
                </div>
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h3 class='mb-2'>Jumlah pendonoran darah</h3>
                    <img src='https://www.svgrepo.com/show/263085/blood-transfusion-surgery.svg' style='width:230px; height:230px' class='img-fluid mb-3' />
                    <p class='fs-4' style='font-size:1.5rem'><b><?= $jumlahdonor['total'] ?>x</b> donor</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const openNotif = () => {
            Swal.fire({
                icon:"warning",
                title:"Info",
                text:"Apakah data identitas anda sudah lengkap? jika tidak anda bisa mengedit data identitas di bagian profile",
                showCancelButton:true,
            }).then((result) => {
        if (result.isConfirmed) {
            // Lakukan aksi submit di sini, contoh:
            window.location.href = '<?= base_url("pendonor/kuisoner") ?>';
        }
    });
        }
    </script>
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
