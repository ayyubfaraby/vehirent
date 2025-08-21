<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <h2>Ini CONTACT pages</h2>
    <?php if (session()->get('role') === 'admin'): ?>
    <div style="text-align:center; margin-top:20px;">
        <a href="<?= base_url('about/edit') ?>">Edit Contact</a>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>
