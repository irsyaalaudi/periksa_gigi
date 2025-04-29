<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <h1>Eror 403</h1>
    <p>Anda tidak memiliki izin untuk mengakses halaman ini.</p>
    <a href="<?= base_url('home') ?>">Kembali ke Home</a>

<?= $this->endSection() ?>