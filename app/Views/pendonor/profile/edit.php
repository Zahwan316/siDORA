
<?= $this->extend("layout/pendonor") ?>

<?= $this->section("content") ?>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Profile</h2>
        <form action="<?= base_url('pendonor/update/' . $pendonor['id_pendonor']); ?>" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="NIK" value="<?= esc($pendonor['NIK']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($pendonor['nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= esc($pendonor['alamat']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="1" <?= $pendonor['jenis_kelamin'] == 1 ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="2" <?= $pendonor['jenis_kelamin'] == 2 ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= esc($pendonor['tempat_lahir']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= esc($pendonor['tanggal_lahir']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_telfon" class="form-label">No. Telpon</label>
                <input type="tel" class="form-control" id="no_telfon" name="no_telpon" value="<?= esc($pendonor['no_telpon']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="gol_darah" class="form-label">Gol. Darah</label>
                <input type="text" class="form-control" id="gol_darah" name="gol_darah" value="<?= esc($pendonor['gol_darah']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="rhesus" class="form-label">Rhesus</label>
                <input type="text" class="form-control" id="rhesus" name="rhesus" value="<?= esc($pendonor['rhesus']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= esc($pendonor['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
