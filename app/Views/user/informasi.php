<section class="blocker" style="padding: 20px;">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-lg-10">
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" style="height:350px" src="<?= base_url('uploads/gambar_produk/' . $produk->gambar) ?>" alt="">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $produk->nama_paket ?></h3>
                        <h4>Rp. <?php echo $produk->harga ?></h4>
                        <p class="card-title"><?php echo $produk->deskripsi_paket ?></p>
                        <a href="<?= base_url('user/informasi/' . $produk->id_paket) ?>" class="btn btn-unique">Beli Paket</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-lg-9 -->
            <div class="col-1"></div>

        </div>
    </div>
    </div>
</section>