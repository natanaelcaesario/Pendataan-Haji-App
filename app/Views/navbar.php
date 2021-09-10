<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MIW JEPARA</title>
    <!-- MDB icon -->
    <link rel="icon" href="<?= base_url('assets/img/mdb-favicon.ico') ?>" type="image/x-icon">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/mdb.min.css') ?>">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Start your project here-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color bg-dark">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="<?= base_url('home') ?>">PT. Madinah Iman Wisata Jepara</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home') ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/about') ?>">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/home/contact') ?>">Hubungi Kami</a>
                </li>

                <?php if (session()->has('user')) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('jadwal') ?>">Jadwal Manasik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/user') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/berkas') ?>"><i class="fas fa-file-upload"></i>Berkas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/transaksi') ?>"><i class="fa fa-shopping-cart"></i> Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/logout') ?>">Log out</a>
                    </li>


                <?php } ?>
                <?php if (!session()->has('user')) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('user/login') ?>">Daftar/Masuk</a>
                    </li>
                <?php } ?>
            </ul>
            <!-- Links -->


        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->