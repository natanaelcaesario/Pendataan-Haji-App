<div id="layoutSidenav_content">
    <main>

        <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
                <h1 class="mt-4">Berkas Pengguna</h1>
                <hr>
                <div class="text-center alert alert-success">
                    <p class="text-left">
                        Berikan status "Diverifikasi" jika anda ingin memeverifikasi Data Pengguna , Dan berikan pesan yang anda ingin berikan kepada pengguna jika data belum lengkap
                        Pastikan data pengguna sudah benar untuk menjamin keberangkatan<br>
                        <strong>MIW JEPARA</strong>
                    </p>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <p for="" class="text-center">KTP</p>
                            <div class="card" style="width: 15rem; padding:10px; margin-right:20px; margin-bottom:5px;">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $user->foto_ktp) ?>" alt="Belum upload">
                            </div>
                        </div>
                        <div class="col-3">
                            <p for="" class="text-center">Passport</p>
                            <div class="card" style="width: 15rem; padding:10px; margin-right:20px; margin-bottom:5px;">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $user->passport) ?>" alt="Belum upload">
                            </div>
                        </div>

                        <div class="col-3">
                            <p for="" class="text-center">Surat Nikah</p>
                            <div class="card" style="width: 15rem; padding:10px; margin-right:20px; margin-bottom:5px;">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $user->suratnikah) ?>" alt="Belum upload">
                            </div>
                        </div>
                        <div class="col-3">
                            <p for="" class="text-center">Pas Foto</p>
                            <div class="card" style="width: 15rem; padding:10px; margin-right:20px; margin-bottom:5px;">
                                <img class="card-img-top" src="<?= base_url('uploads/data_diri/' . $user->pasfoto) ?>" alt="Belum upload">
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <input type="text" name="verif" class="form-control mb-4" placeholder="<?= $user->verif ?>" required>

                <!-- Sign in button -->
                <button class=" btn btn-info btn-block my-4" type="submit">Konfirmasi Data</button>

            </div>
        </form>
    </main>

    <?php echo view('admin/footer'); ?>