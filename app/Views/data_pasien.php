<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3 class="mt-5">Daftar Pasien</h3>
<br/>    
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Email</th>
                <th>No. Telepon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Budi</td>
                <td>Budi21388@gmail.com</td>
                <td>08125323456</td>
            </tr>
            <tr>
                <td>Anton</td>
                <td>antonsaja@gmail.com</td>
                <td>082164290612</td>
            </tr>
        </tbody>
    </table>
<?= $this->endSection() ?>