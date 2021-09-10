<?php echo view('navbar.php');
?>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="<?= base_url('koper/landing cs.jpg') ?>" alt="First slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <!-- caption -->

        </div>
        <!--/.Controls-->
    </div>
</div>
<style>
    .map-container-section {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container-section iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>
<div class="contact container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row">
        <div class="col-6">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5"> Hubungi Kami</h2>
            <!-- Section description -->
            <p class="text-left w-responsive mx-auto">Lokasi : Jl. Sukarno Hatta, KM 7, RT 005 RW 007, Griya Tahunan Indah, Kec. Tahunan Kab. Jepara Provinsi Jawa Tengah.</p>
            <p class="text-left w-responsive mx-auto ">Jam kerja Operasional : Senin - Sabtu 09.00-16.00 </p>
            <p class="text-left w-responsive mx-auto ">Nomor Telepon : 081325757946 (Anisah Irmayani)</p>
            <p class="text-left w-responsive mx-auto ">Email : miwjepara01@gmail.com</p>
        </div>

        <div class="col-lg-6" style="margin-top: 20px;">

            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Depan%20Swalayan%20SAUDARA,%20
        Jl.%20Soekarno%20Hatta%20No.Km.07,%20Tahunan,%20Kec.%20Tahunan,%20Kabupaten%20Jepara,%20Jawa%20Tengah%2059451,
        %20Indonesia+(MADINAH%20IMAN%20WISATA%20JEPARA)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <center>
                <p>Lokasi PT. Madinah Iman Wisata Jepara</p>
            </center>
            <!-- Buttons-->

        </div>
    </div>
</div>



<!-- Section: Contact v.1 -->

<?php include 'footer.php' ?>