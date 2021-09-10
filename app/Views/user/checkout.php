<?php $data = session()->get("id_user");
?>
<form action="<?= base_url('user/beli') ?>" method="POST" enctype="multipart/form-data">

    <div class="container wow fadeIn" style="padding:10px">
        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Checkout form</h2>

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
                <!--Card-->
                <div class="card">
                    <!--Card content-->
                    <form class="card-body">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 mb-2">
                                <!--firstName-->
                                <div class="md-form mb-5">

                                    <input type="text" name="nama" id="firstName" class="form-control" value="<?php echo $info->nama ?>">

                                </div>
                            </div>
                            <!--Grid column-->
                        </div>


                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" id="email" name="email" class="form-control" placeholder="email@contoh.com" value="<?php echo $info->email ?>">
                            <label for="email" class=""></label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" id="address" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $info->alamat ?>">
                            <label for="address" class=""></label>
                        </div>


                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-lg-12 col-md-12 mb-4">
                                <label for="country">Pilih paket yang anda inginkan</label>
                                <select name="paket_dipilih" class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option name="paket_dipilih"><?php echo $produk->nama_paket ?></option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                        </div>
                        <input type="text" name="ktp" value="<?= $info->ktp ?>" hidden>
                        <input type="text" name="id_user" value="<?= $data ?>" hidden>
                        <input type="text" name="total" value="<?= $produk->harga ?>" hidden>


                        <h4 class="text-right font-weight-bold">Total Yang Harus DiBayarkan Rp. <?php echo $produk->harga ?></h4>
                </div>
                <hr>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjut Ke Pembyaran</button>


            </div>
        </div>
    </div>
</form>
<!--Main layout-->