<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Default Title') ?></title>
    <style>
        body {
        background-color: #151717ff;
        }
        .home-teks {
        color: #ffffff;
        font-size: 85px;
        font-weight: bold;
        white-space: pre-line;
        text-align: center;
        font-family: 'Roboto', sans-serif;
        letter-spacing: -2px;

        }
    </style>
</head>
<body>
    <?= $this->include('components/navbar') ?>
    
    <!-- Bagian isi halaman -->
    <?= $this->renderSection('content') ?>
    
    <?= $this->include('components/footer') ?>
</body>
</html>
