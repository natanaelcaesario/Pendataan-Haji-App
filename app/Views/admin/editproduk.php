<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid">
            <h1 class="mt-4">Edit Data Produk</h1>
            <div class="row">
                <div class="col-6">
                    <hr>
                    <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                        <label for="name">Nama Paket</label>
                        <input type="text" name="nama_paket" class="form-control" placeholder="Nama Paket" value="<?= $produk->nama_paket ?>" required>
                        <br>
                        <label for="harga">Harga Paket</label>
                        <input name="harga" type="text" class="form-control" value="<?= $produk->harga ?>" placeholder="Harga Paket" required>
                        <br>
                        <label for="name">Deskripsi Paket</label>
                        <input type="text" value="<?= $produk->deskripsi_paket ?>" name="deskripsi_paket" class="form-control" placeholder="Deskipsi paket" required>
                        </input>

                        <br>
                        <label for="name">Kategori Paket</label>
                        <input type="text" value="<?= $produk->kategori_paket ?>" class="form-control" name="kategori_paket" placeholder="Kategori Paket" required>
                        <br>
                        <input type="file" name="gambar" required>
                        <hr>

                        <button class="btn btn-primary mr-3" type="submit">Update Data</button>

                    </form>
                </div>
                <div class="col-6">
                    <img style="width: 300px;" src="<?= base_url('uploads/gambar_produk/' . $produk->gambar) ?>" name="gambar" alt="">
                </div>
            </div>
        </div>
    </main>
    <br>
    <?php echo view('admin/footer'); ?>