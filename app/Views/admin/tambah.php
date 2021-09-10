<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">TAMBAH PRODUK UMRAH</h1>
            <hr>
            <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">

                <input type="text" name="nama_paket" class="form-control mb-4" placeholder="Nama Produk" required>

                <!-- Password -->
                <input type="text" name="kategori_paket" class="form-control mb-4" placeholder="Kategori">
                <input type="number" name="harga" class="form-control mb-4" placeholder="Harga" required>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi_paket" class="form-control" rows="10" placeholder="Berikan Deskripsi Produk disini" required></textarea>
                </div>

                <label for="">Gambar Produk</label>
                <br>
                <input name="gambar" type="file" class="form-control-xl" required>


                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Tambah Produk</button>
            </form>
        </div>

    </main>