<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    
<h1>Welcome <?= session()->get('username') ?></h1>

<div class="container mt-5">


    <h3>Manajemen Dokter Gigi</h3>
    <a href="#" class="btn btn-primary mb-3">Tambah Dokter</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Drg. Ani</td>
                <td>Gigi Umum</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Drg. Budi</td>
                <td>Ortodonti</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>

    <?= $this->endSection() ?>
