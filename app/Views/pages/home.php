<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <div class="home-teks">
        <p>Permudah rencana Perjalanan Anda dengan vehirent</p>
    </div>

    <div style="display: flex; gap: 20px; margin-top: 20px; justify-content: center;">
        <?php foreach ($mobilList as $mobil): ?>
            <div style="border: 1px solid #0c47e9; padding: 20px; border-radius: 12px; 
                        width: 250px; box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);">
                <img src="<?= base_url($mobil['gambar']) ?>" alt="<?= $mobil['nama'] ?>" 
                     style="width:100%; border-radius: 8px;">
                
                <h2><?= $mobil['nama'] ?></h2>
                <p><?= $mobil['deskripsi'] ?></p>
                <p><strong>Rp <?= number_format($mobil['harga'], 0, ',', '.') ?> / hari</strong></p>
                
                <a href="<?= base_url('mobil/detail/' . $mobil['id']) ?>">Cek Detail</a>

                <?php if (session()->get('role') === 'admin'): ?>
                    <br>
                    <a href="<?= base_url('mobil/edit/' . $mobil['id']) ?>">Edit</a> | 
                    <a href="<?= base_url('mobil/delete/' . $mobil['id']) ?>" 
                       onclick="return confirm('Yakin mau hapus?')">Delete</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Tombol Logout, hanya muncul kalau login -->
    <?php if (session()->get('logged_in')): ?>
        <div style="text-align: center; margin-top: 30px;">
            <form action="<?= base_url('logout') ?>" method="post">
                <?= csrf_field() ?>
                <button type="submit" 
                    style="background: #6a6880ff; color: white; border: none; padding: 10px 20px; 
                    border-radius: 8px; cursor: pointer;">
                    Logout
                </button>
            </form>
        </div>
    <?php endif; ?>

<?= $this->endSection() ?>
