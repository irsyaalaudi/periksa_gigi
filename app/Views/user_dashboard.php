<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <h1>Welcome <?= session()->get('username') ?></h1>

<div class="container mt-5">
    <h3>Daftar Dokter Gigi</h3>
    <br/>
    <div class="row">
        <?php
        // Contoh data dummy dokter
        $dokter = [
            ['nama' => 'Drg. Ani', 'spesialisasi' => 'Gigi Umum', 'foto' => 'ani.png'],
            ['nama' => 'Drg. Budi', 'spesialisasi' => 'Ortodonti', 'foto' => 'budi.png'],
            ['nama' => 'Drg. Clara', 'spesialisasi' => 'Perawatan Gigi', 'foto' => 'clara.png']
        ];
        foreach ($dokter as $d) {
        ?>
            <div class="col-md-4">
                <div class="card mb-3">
                <img src="<?= base_url('images/dokter/' . $d['foto']) ?>" class="card-img-top" alt="Foto <?= $d['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['nama'] ?></h5>
                        <p class="card-text"><?= $d['spesialisasi'] ?></p>
                        <a href="#" class="btn btn-primary">Lihat Jadwal</a>
                        <a href="#" class="btn btn-success">Buat Janji</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<?= $this->endSection() ?>
