<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Default Title') ?></title>
</head>
<body>
    <?= $this->include('components/navbar') ?>
    
    <!-- Bagian isi halaman -->
    <?= $this->renderSection('content') ?>
    
    <?= $this->include('components/footer') ?>
</body>
</html>
