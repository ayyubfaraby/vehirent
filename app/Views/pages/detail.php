<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <?php if ($mobil): ?>
        <h2><?= $mobil['nama'] ?></h2>
        <img src="<?= $mobil['gambar'] ?>" alt="<?= $mobil['nama'] ?>" style="width:400px; border-radius:10px;">
        <p><?= $mobil['deskripsi'] ?></p>
        <p><strong><?= $mobil['harga'] ?></strong></p>
    <?php else: ?>
        <p>Mobil tidak ditemukan.</p>
    <?php endif; ?>
<?= $this->endSection() ?>
