<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('admin/'); ?>img/logotitlebpn.svg">
    <title>BPN Banjarmasin</title>
    <link rel="stylesheet" href="<?= base_url('admin/'); ?>css/stylelanding.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <section>

        <input type="checkbox" id="check">
        <header>
        <?= $this->session->flashdata('message'); ?>
            </div>
            
            <h2>
                <img src="<?= base_url('admin/'); ?>img/logobpn.svg" width="60px">
                <a href="#" class="logo">BPN</a>
            </h2>
            <div class="navigation">
                <a href="javascript:void(0)">Home</a>
                <a href="<?= base_url('landing/visi'); ?>">Visi & Misi</a>
                <a href="<?= base_url('landing/about'); ?>">About</a>
                <a href="<?= base_url('auth'); ?>">Login</a>
            </div>
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i>
            </label>
        </header>
        <div class="content">
            <div class="info">
                <h2>BPN <br><span>Kota Banjarmasin</span></h2>
                <p style="color:white">Sistem Informasi Pengelolaan Sertifikat Tanah<br> pada Badan Pertanahan Nasional (BPN) Kota Banjarmasin</p>
                <a href="<?= base_url('landing/visi'); ?>" class="info-btn">Visi Misi</a>
            </div>
        </div>
        <div class="media-icons">
            <a href="https://web.facebook.com/KantahKotaBanjarmasin"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/atr_bpn"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/kanwilbpnkalsel/?hl=id"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

</body>

</html>