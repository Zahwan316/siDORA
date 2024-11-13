<?= $this->extend("layout/main") ?>

<?= $this->section("content") ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Assesment</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url("petugas/assesment") ?>" method="post">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id_cek_darah" value="<?= $cekdarah['id_cek'] ?>" name="id_cek_darah" required>
                    </div>
                    <div class="mb-3">                 
                        <input type="hidden" class="form-control" id="id_pendonor" name="id_pendonor" value="<?= $pendonor['id_pendonor'] ?>" required>
                    </div>
                    <div class="mb-3">         
                        <input type="hidden" class="form-control" id="id_petugas" name="id_petugas" value="<?= session()->get("user_id") ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="suhu" class="form-label">Suhu</label>
                        <input type="number" step="0.1" class="form-control" id="suhu" name="suhu" required>
                    </div>
                    <div class="mb-3">
                        <label for="hb" class="form-label">HB</label>
                        <input type="number" class="form-control" id="hb" name="hb" required>
                    </div>
                    <div class="mb-3">
                        <label for="td" class="form-label">TD</label>
                        <input type="number" class="form-control" id="td" name="td" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_assesment" class="form-label">Tanggal Assesment</label>
                        <input type="date" class="form-control" id="tanggal_assesment" name="tanggal_assesment" required>
                    </div>
                    <div class="mb-3">
                        <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                        <input type="number" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_layak_donor" class="form-label">Status Layak Donor</label>
                        <!-- <input type="text" class="form-control" id="status_layak_donor" name="status_layak_donor" required> -->
                        <select class="form-control" id="status_layak_donor" name="status_layak_donor" required>
                            <option value="LAYAK" >Layak</option>
                            <option value="TIDAK LAYAK">Tidak Layak</option>
                        </select>
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary mb-5">Submit</button>
                </form>

                <a href='<?= base_url("petugas/data_pendonor/delete/".$pendonor['id_pendonor']) ?>'>
                    <button class="btn btn-danger mr-4">Tolak Pendonor</button>
                </a>
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
