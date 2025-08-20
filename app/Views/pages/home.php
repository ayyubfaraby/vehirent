<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <div class="home-teks">
    <p>Permudah rencana Perjalan
        Anda dengan vehirent </p>
    </div>

    <div style="display: flex; gap: 20px; margin-top: 20px; justify-content: center;">
        <div style="border: 1px solid #0c47e9; padding: 15px; border-radius: 10px; width: 250px;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(0, 123, 255, 0.5);">
            <img src="<?= base_url($mobilList[0]['gambar']) ?>" alt="Mobil 1" style="width:100%; border-radius: 8px;">
            <h2><?= $mobilList[0]['nama'] ?></h2>
            <p><?= $mobilList[0]['deskripsi'] ?></p>
            <p><strong>Rp <?= $mobilList[0]['harga'] ?> / hari</strong></p>
            <a href="<?= base_url('mobil/detail/1') ?>">Cek Detail</a>
        </div>

        <div style="border: 1px solid #000000ff; padding: 15px; border-radius: 10px; width: 250px;">
            <img src="<?= base_url($mobilList[1]['gambar']) ?>" alt="Mobil 1" style="width:100%; border-radius: 8px;">
            <h2><?= $mobilList[1]['nama'] ?></h2>
            <p><?= $mobilList[1]['deskripsi'] ?></p>
            <p><strong>Rp <?= $mobilList[1]['harga'] ?> / hari</strong></p>
            <a href="<?= base_url('mobil/detail/2') ?>">Cek Detail</a>
        </div>
    </div>

<?= $this->endSection() ?>
