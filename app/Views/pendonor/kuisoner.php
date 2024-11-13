

    <?= $this->extend("layout/pendonor") ?>

    <?= $this->section("content") ?>
    <div class="container mt-5">

        

        <h2 class="mb-4">Kuisoner</h2>
        <?php 
            $session = session();
        ?>
        <form action="<?= base_url('pendonor/kuisoner/' . $session->get("user_id")) ?>" method="post">
        <div class="mb-3">
                <label for="nik" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nik" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nama" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="NIK">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jawaban[]">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <input type="hidden" name="pertanyaan[]" value="Jenis Kelamin">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Agama</label>
                <input type="text" class="form-control" id="alamat" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Agama">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Tempat Lahir">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Tanggal Lahir">
            </div>
            <div class="mb-3">
                <label for="no_telfon" class="form-label">Berat Badan</label>
                <input type="number" class="form-control" id="no_telfon" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Berat Badan">
            </div>
            <div class="mb-3">
                <label for="gol_darah" class="form-label">Tinggi Badan</label>
                <input type="number" class="form-control" id="gol_darah" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Tinggi Badan">
            </div>
            <div class="mb-3">
                <label for="rhesus" class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control" id="rhesus" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="Alamat Lengkap">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">RT</label>
                <input type="text" class="form-control" id="email" name="jawaban[]" required>
                <input type="hidden" name="pertanyaan[]" value="RT">
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="ic_agreement" name="ic" value="1" required>
                <label class="form-check-label" for="ic_agreement">
                Apakah Anda setuju dengan semua persyaratan?
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Kuisoner</button>
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
