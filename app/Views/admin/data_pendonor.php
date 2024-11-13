   <?= $this->extend("layout/main") ?>

    <?= $this->section("content") ?>
    
    <div class="container mt-5">
    <h2 class="mb-4">Data Pendonor</h2>
    
    <!-- Table for desktop -->
    <div class="d-none d-md-block">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id Pendonor</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Gol. Darah</th>
                    <th>Rhesus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pendonorDenganKuisioner as $data): ?>
                    <tr>
                        <td><?= esc($data['id_pendonor']) ?></td>
                        <td><?= esc($data['nama']) ?></td>
                        <td><?= esc($data['alamat']) ?></td>
                        <td><?= $data['jenis_kelamin'] == 1 ? "Laki-laki" : "Perempuan" ?></td>
                        <td><?= esc($data['tempat_lahir']) ?></td>
                        <td><?= esc($data['tanggal_lahir']) ?></td>
                        <td><?= esc($data['gol_darah']) ?></td>
                        <td><?= esc($data['rhesus']) ?></td>
                        <td>
                            <a href='<?= base_url("petugas/data_pendonor/" . $data['id_pendonor']) ?>'>
                                <button class='btn btn-primary'>Detail</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Card list for mobile -->
    <div class="d-block d-md-none">
        <?php foreach($pendonorDenganKuisioner as $data): ?>
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    <strong>Id Pendonor: <?= esc($data['id_pendonor']) ?></strong>
                </div>
                <div class="card-body">
                    <p><strong>Nama:</strong> <?= esc($data['nama']) ?></p>
                    <p><strong>Alamat:</strong> <?= esc($data['alamat']) ?></p>
                    <p><strong>Jenis Kelamin:</strong> <?= $data['jenis_kelamin'] == 1 ? "Laki-laki" : "Perempuan" ?></p>
                    <p><strong>Tempat Lahir:</strong> <?= esc($data['tempat_lahir']) ?></p>
                    <p><strong>Tanggal Lahir:</strong> <?= esc($data['tanggal_lahir']) ?></p>
                    <p><strong>Gol. Darah:</strong> <?= esc($data['gol_darah']) ?></p>
                    <p><strong>Rhesus:</strong> <?= esc($data['rhesus']) ?></p>
                    <a href='<?= base_url("petugas/data_pendonor/" . $data['id_pendonor']) ?>' class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    
 <?= $this->endSection() ?>
