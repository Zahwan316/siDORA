
    <?= $this->extend("layout/main") ?>

    <?= $this->section("content") ?>
    <div class="container mt-5">
        <h2 class="mb-4">Data Cek Darah</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id Pendonor</th>
                    <th>Nama Petugas</th>
                    <th>Nama Pendonor</th>
                    <th>Golongan Darah</th>
                    <th>Tempat Lahir</th>
                    <th>Rhesus</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($cekdarah as $data):
                ?>
                    <tr>
                        <td>
                            <p>
                                <?= $data['id_cek']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['username']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['nama']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['gol_darah'] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['tempat_lahir']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['rhesus']?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?= $data['waktu']?>
                            </p>
                        </td>
                        
                        <td>
                            <a href='<?= base_url("petugas/cek_darah/".$data['id_pendonor'])  ?>' >
                                <button class='btn btn-primary'>Cek</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?= $this->endSection() ?>
