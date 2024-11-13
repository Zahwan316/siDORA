<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siDORA | Cek Darah Detail</title>
</head>
<body>
    <?= $this->extend("layout/main") ?>

    <?php 
        $session = session();
    ?>

    <?= $this->section("content") ?>
    <div class="container mt-5">
        <div class='mb-3'>
            <a href='<?= base_url("petugas/data_pendonor/".$id_pendonor) ?>'>
                <button class='btn btn-primary'>Pendonor detail</button>
            </a>
            
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Form Cek Darah</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url("petugas/cek_darah") ?>" method="post">
                    <!-- ID Petugas -->
                    <div class="mb-3 ">
                        
                        <input type="hidden" class="form-control" id="id_petugas" name="id_petugas" value='<?= $session->get('user_id') ?>' required>
                    </div>

                    <!-- ID Pendonor -->
                    <div class="mb-3 ">
                        
                        <input type="hidden" class="form-control" id="id_petugas" name="id_pendonor" value='<?= $id_pendonor ?>' required>
                    </div>

                    <!-- Golongan Darah -->
                    <div class="mb-3">
                        <label for="gol_darah" class="form-label">Golongan Darah</label>
                        <!-- <input type="text" class="form-control" id="gol_darah" name="gol_darah" maxlength="3" required> -->
                        <select class="form-control" id="status_layak_donor" name="gol_darah" required>
                            <option value="A" >A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>

                    <!-- Rhesus -->
                    <div class="mb-3">
                        <label for="rhesus" class="form-label">Rhesus</label>
                        <input type="text" class="form-control" id="rhesus" name="rhesus" maxlength="3" required>
                    </div>

                    <!-- Waktu -->
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
</body>
</html>