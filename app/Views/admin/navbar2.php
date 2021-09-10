<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">


                <div class="nav">
                    <hr>
                    <a class="nav-link" href="<?= site_url('admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Menu Utama</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Data Master
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= site_url('admin/tambah') ?>">Data Produk</a>
                            <a class="nav-link" href="<?= site_url('admin/tambahjadwal') ?>">Tambah Data Jadwal Manasik</a>
                            <a class="nav-link" href="<?= site_url('admin/produk') ?>">Lihat Produk Aktif</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="<?= site_url('admin/transaksi') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Rekap Transaksi
                    </a>

                    <a class="nav-link" href="<?= site_url('admin/pengguna') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-exchange-alt"></i></div>
                        Data Berkas Jamaah
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/keberangkatan') ?>">
                        <div class="sb-nav-link-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        Data Jadwal Manasik
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/laporan') ?>">
                        <div class="sb-nav-link-icon"><i class="fa fa-file" aria-hidden="true"></i></div>
                        Laporan
                    </a>
                    <a class="nav-link" href="<?= site_url('admin/grafik') ?>">
                        <div class="sb-nav-link-icon"><i class="fa fa-chart-bar" aria-hidden="true"></i></div>
                        Laporan Grafik
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin MIW Jepara
            </div>
        </nav>
    </div>