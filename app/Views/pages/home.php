<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <h2>Rental Mobil</h2>
    <p>Pilih mobil terbaik untuk perjalanan Anda 🚗✨</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Card 1 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Mobil 1" style="width:100%; border-radius: 8px;">
            <h3>Avanza</h3>
            <p>Mobil keluarga nyaman, cocok untuk perjalanan jauh.</p>
            <p><strong>Rp 350.000 / hari</strong></p>
        </div>

        <!-- Card 2 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Mobil 2" style="width:100%; border-radius: 8px;">
            <h3>Innova</h3>
            <p>Mobil premium dengan kapasitas besar dan nyaman.</p>
            <p><strong>Rp 500.000 / hari</strong></p>
        </div>
    </div>

    <!-- Tombol lihat lebih banyak -->
    <div style="margin-top: 30px;">
        <a href="<?= base_url('produkLengkap') ?>" 
           style="display: inline-block; background: #007BFF; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
           Lihat Semua Mobil
        </a>
    </div>
<?= $this->endSection() ?>
