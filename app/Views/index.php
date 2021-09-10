<?php include 'navbar.php' ?>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="<?= base_url('koper/Landing Page.jpg') ?>" alt="First slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <!-- caption -->
            <h1 class="captionhead">
                <h1>

        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="imaged-block w-100" src="<?= base_url('koper/Landing Page2.jpg') ?>" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="captionhead"></div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="<?= base_url('koper/Landing Page3.jpg') ?>" alt="Third slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="captionhead"></div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>

<section>
    <div class="container" style="margin-top: 50px;">
        <hr>
        <h2 class="text-center font-weight-bolder">Selamat Datang di Official Website Madinah Iman Wisata Jepara</h2>
        <h3 class="text-center">Kami membantu dan melayani Anda melaksanakan Ibadah Umroh dengan Nyaman tanpa repot.</h3>
        <br>
        <p class=" text-center">Berbekal pengalaman dalam memberangkatkan ribu-an jamaah, kami siap “melayani dengan setulus hati dan
            memberikan yang terbaik” kepada para calon jamaah untuk berangkat ke Tanah Suci.
            Mulai dari pengurusan paspor dan suntik meningitis sampai dengan keberangkatan dan kepulangan
            jamaah, Insyaa Allah akan kami bantu dengan sebaik-baiknya. Dalam perjalanan hidup Rasulullah SAW,
            beliau melakukan 4 kali umrah dan 1 kali haji. Dari keempat umrah itu, 3 diantaranya dilaksanakan
            sebelum Rasulullah SAW berhaji. Sementara 1 umrah dilakukan bersamaan dengan haji beliau.<br>
            Sahabat Ibnu Abbas RA menceritakan, <br>
            “Nabi shallallahu ‘alaihi wa sallam mengerjakan umrah sebanyak
            4 kali, umrah Hudaibiyah, umrah Qadha` di bulan Dzulqa’dah setahun setelah Hudaibiyah, umrah ketiga
            dari Ji’ranah, dan keempat, umrah bersama dengan pelaksanaan haji beliau.”
            (HR. Ahmad 2249, Abu Daud 1995 dan dishahihkan Syu’aib al-Arnauth).
            Dan seperti halnya haji, umrah dalam Islam hukumnya wajib. Karena itulah, ulama sepakat, boleh
            umrah sebelum berangkat haji. </p>
        <hr>
    </div>

</section>


<section class="product" style="padding: 30px;">
    <h1 class="text-center font-weight-bold">INFORMASI PAKET UMRAH</h1>
    <div class="row">
        <?php foreach ($produk as $product) : ?>
            <div class="col-lg-4" style="padding:30px">
                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="<?= base_url('uploads/gambar_produk/' . $product->gambar) ?>" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>

                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i><?php echo $product->kategori_paket ?></h5>
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title"><?php echo $product->nama_paket ?></h4>
                        <!-- Text -->
                        <p class="card-text"><?php echo $product->deskripsi_paket ?></p>
                        <!-- Button -->
                        <a href="<?= site_url('user/checkout/' . $product->id_paket) ?>" class="btn btn-unique">Beli Paket </a>

                    </div>



                </div>
                <!-- Card Narrower -->
            </div>

        <?php endforeach ?>



    </div>

</section>

<section>
    <div class="container text-center">
        <div class="view">
            <center>
                <img class="w-50 h-50" src="<?= base_url('koper/5-Pasti.jpg') ?>">
            </center>
            <br>
        </div>
        <h4>Sebagai Biro Umrah yang senantiasa berusaha memberikan layanan terbaik untuk jamaah,
            Madinah Iman Wisata selalu patuh dengan peraturan-peraturan yang ada, salah satunya
            adalah menerapkan 5 Pasti Umrah dari Kemenag RI</h4>
        <hr>
        <div class="container text-left">
            <h5>1. Pasti Travelnya Berizin​</h5>
            </p>Madinah Iman Wisata sudah mempunyai izin PPIU: 262/2018 dan izin PIHK: 234/2018</p>
        </div>
        <div class="container text-left">
            <h5>2. Pasti Jadwalnya​</h5>
            </p>Paket-paket umrah yang kami tawarkan sudah jelas tanggal keberangkatan dan kepulangannya</p>
        </div>
        <div class="container text-left">
            <h5>3. Pasti Terbangnya​</h5>
            </p>Kami sudah ada kerjasama dengan beberapa maskapai seperti Garuda, Lion dan Saudia untuk memastikan penerbangannya</p>
        </div>
        <div class="container text-left">
            <h5>4. Pasti Hotelnya</h5>
            </p>Land Arrangement termasuk kamar-kamar Hotel sudah dibooking jauh-jauh hari, bahkan kami
            sudah ada kerjasama khusus dengan hotel Olayan Ajyad di Makkah</p>
        </div>
        <div class="container text-left">
            <h5>5. Pasti Visanya</h5>
            </p>Selama ini kami sudah ada kerjasama yang baik dengan Provider Visa. Dan in syaa Allah ke depan kami juga akan menjadi Provider Visa</p>
        </div>
    </div>
</section>
<br>

<!--/.Carousel Wrapper-->
<?php include 'footer.php' ?>