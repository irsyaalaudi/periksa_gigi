<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h3 class="mt-5">Manajemen Jadwal Dokter</h3>
<br/>    
<a href="#" class="btn btn-primary mb-3">Tambah Jadwal</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Dokter</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Drg. Ani</td>
                <td>Senin</td>
                <td>09.00 - 12.00</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Drg. Budi</td>
                <td>Selasa</td>
                <td>13.00 - 16.00</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
<?= $this->endSection() ?>