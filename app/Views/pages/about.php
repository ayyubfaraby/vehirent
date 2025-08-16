<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <h2>Daftar Mobil Lengkap 🚘</h2>
    <p>Pilih mobil terbaik sesuai kebutuhan perjalananmu!</p>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 20px;">

        <!-- Card 1 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Avanza" style="width:100%; border-radius: 8px;">
            <h3>Avanza</h3>
            <p>Mobil keluarga nyaman, cocok untuk perjalanan jauh.</p>
            <p><strong>Rp 350.000 / hari</strong></p>
            <a href="<?= base_url('mobil/detail/1') ?>" 
   style="display:inline-block;margin-top:10px;background:#28a745;color:#fff;padding:8px 15px;border-radius:5px;text-decoration:none;">
   Cek Detail
</a>
        </div>

        <!-- Card 2 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Innova" style="width:100%; border-radius: 8px;">
            <h3>Innova</h3>
            <p>Mobil premium dengan kapasitas besar dan nyaman.</p>
            <p><strong>Rp 500.000 / hari</strong></p>
            <a href="<?= base_url('mobil/detail/2') ?>" 
   style="display:inline-block;margin-top:10px;background:#28a745;color:#fff;padding:8px 15px;border-radius:5px;text-decoration:none;">
   Cek Detail
</a>
        </div>

        <!-- Card 3 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Fortuner" style="width:100%; border-radius: 8px;">
            <h3>Fortuner</h3>
            <p>SUV tangguh untuk segala medan, cocok untuk adventure.</p>
            <p><strong>Rp 750.000 / hari</strong></p>
            <a href="<?= base_url('mobil/detail/3') ?>" 
   style="display:inline-block;margin-top:10px;background:#28a745;color:#fff;padding:8px 15px;border-radius:5px;text-decoration:none;">
   Cek Detail
</a>
        </div>

        <!-- Card 4 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Fortuner" style="width:100%; border-radius: 8px;">
            <h3>Mercedes</h3>
            <p>SUV tangguh untuk segala medan, cocok untuk adventure.</p>
            <p><strong>Rp 1.050.000 / hari</strong></p>
            <a href="<?= base_url('mobil/detail/4') ?>" 
   style="display:inline-block;margin-top:10px;background:#28a745;color:#fff;padding:8px 15px;border-radius:5px;text-decoration:none;">
   Cek Detail
</a>
        </div>

        <!-- Card 5 -->
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="https://via.placeholder.com/250x150" alt="Fortuner" style="width:100%; border-radius: 8px;">
            <h3>agia</h3>
            <p>SUV tangguh untuk segala medan, cocok untuk adventure.</p>
            <p><strong>Rp 350.000 / hari</strong></p>
            <a href="<?= base_url('mobil/detail/5') ?>" 
   style="display:inline-block;margin-top:10px;background:#28a745;color:#fff;padding:8px 15px;border-radius:5px;text-decoration:none;">
   Cek Detail
</a>
        </div>

        <!-- Tambah card lainnya manual sesuai jenis mobil -->
        
    </div>
<?= $this->endSection() ?>
