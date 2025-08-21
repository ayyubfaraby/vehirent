<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <p style="text-align: center">Setiap perjalanan adalah cerita. Apapun tujuan Anda, biarkan kami menjadi bagiannya. Dengan armada terbaik dan pelayanan profesional, kami siap mengantar Anda menuju kebebasan di setiap kilometer. Rencanakan petualangan Anda bersama kami!</p>
    <?php if (session()->get('role') === 'admin'): ?>
    <div style="text-align:center; margin-top:20px;">
        <a href="<?= base_url('about/edit') ?>">Edit About</a>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>
