<?= $this->extend("layout/main") ?>

<?= $this->section("content") ?>
<div class="container mt-5">
        <h2 class="mb-4">Data Donor</h2>
        <div class="row">
            <?php foreach ($donor as $item): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ID Donor: <?= $item['id_donor'] ?></h5>
                            <p class="card-text"><strong>Nama Petugas:</strong> <?= $item['username'] ?></p>
                            <p class="card-text"><strong>Nama Pendonor:</strong> <?= $item['nama'] ?></p>
                            <p class="card-text"><strong>Status Layak Donor:</strong> <span class='text-white p-1 rounded <?= $item['status_layak_donor'] === "LAYAK" || $item['status_layak_donor'] === "layak" ? "bg-success" : "bg-danger" ?>'><?= $item['status_layak_donor'] ?></span></p>
                            <p class="card-text"><strong>Tanggal:</strong> <?= $item['tanggal'] ?></p>
                            <a href="laporan_pendonor/<?= $item['id_donor'] ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?= $this->endSection() ?>