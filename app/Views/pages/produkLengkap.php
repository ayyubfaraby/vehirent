<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <h2>Semua Mobil Rental</h2>
    <p>Daftar mobil lengkap tersedia di sini 🚘</p>

    <!-- contoh card lebih banyak -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
                <img src="https://via.placeholder.com/250x150" alt="Mobil <?= $i ?>" style="width:100%; border-radius: 8px;">
                <h3>Mobil <?= $i ?></h3>
                <p>Deskripsi mobil <?= $i ?> untuk disewa.</p>
                <p><strong>Rp <?= 300000 + ($i*50000) ?> / hari</strong></p>
            </div>
        <?php endfor; ?>
    </div>
<?= $this->endSection() ?>
