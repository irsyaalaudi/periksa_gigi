<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Riwayat Pemeriksaan</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Dokter</th>
                <th>Diagnosa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2025-04-15</td>
                <td>Drg. Ani</td>
                <td>Karang Gigi</td>
                <td><a href="#" class="btn btn-info btn-sm">Lihat Detail</a></td>
            </tr>
            <tr>
                <td>2025-04-20</td>
                <td>Drg. Budi</td>
                <td>Behel Gigi</td>
                <td><a href="#" class="btn btn-info btn-sm">Lihat Detail</a></td>
            </tr>
        </tbody>
    </table>
    
<?= $this->endSection() ?>