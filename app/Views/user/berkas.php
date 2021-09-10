<form action="<?= current_url() ?>" class="text-left border border-light p-5" method="POST" enctype="multipart/form-data">
    <div class="cotainer">
        <h1 class="heading text-center" id="upload">UPLOAD BERKAS</h1>
        <hr>
        <?php if ($find->verif == "Diverifikasi") {  ?>
            <div class="text-center " id="diverifikasi">
                <p>
                    <strong class="text-success"> Akun Anda Sudah Terverifikasi</strong><br>
                    Admin PT. Madinah Iman Wisata Jepara
                </p>
            </div>
        <?php }  ?>

        <div class="text-center alert alert-info" id="informasi">
            <p>
                Silahkan upload dokumen yang diperlukan, <br>pastikan dokumen yang diupload adalah benar karna anda hanya diizinkan upload 1 kali <br>
                <strong>Admin PT. Madinah Iman Wisata Jepara</strong>
            </p>

        </div>
        <div id="form">
            <input type="text" name="post" class="form-control mb-4" value="" hidden>
            <label for="" class="form-control-label">Passport </label>
            <input type="file" name="passport" class="form-control mb-4" required>
            <label for="" class="form-control-label" required>KTP </label>
            <input type="file" name="foto_ktp" class="form-control mb-4" required>
            <label for="" class="form-control-label">Surat Nikah </label>
            <input type="file" name="suratnikah" class="form-control mb-4" required>
            <label for="" class="form-control-label">Pas Foto </label>
            <input type="file" name="pasfoto" class="form-control mb-4" required>
            <button class="btn accent-1 btn-primary tombol" type="submit" id="button">Konfirmasi Data</button>
        </div>
        <?php if ($find->verif == "diupload") { ?>
            <script>
                $("#informasi").attr("hidden", true);
                $("#form").attr("hidden", true);
                $("#upload").attr("hidden", true);
                $(".tombol").attr("hidden", true);
            </script>
            <h5 class="text-center text-success">File Yang sudah diupload</h5>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" style="padding:30px">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $find->foto_ktp) ?>" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:30px">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $find->passport) ?>" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:30px">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $find->suratnikah) ?>" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="padding:30px">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $find->pasfoto) ?>" alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <div class="text-center alert alert-success" id="diproses" id="diproses">
                <p>
                    Berkas anda telah lengkap dan sudah terupload tunggu jadwal keberangkatan anda <br>
                    <strong>Admin PT. Madinah Iman Wisata Jepara</strong>
                </p>
            </div>


            <button class="btn accent-1 btn-primary" type="submit" hidden>Konfirmasi Data</button>





        <?php } ?>

</form>

<?php if ($find->verif == "Diverifikasi") {  ?>
    <script>
        $("#informasi").attr("hidden", true);
        $(".tombol").attr("hidden", true);
        $("#diproses").attr("hidden", true);
    </script>
<?php }  ?>