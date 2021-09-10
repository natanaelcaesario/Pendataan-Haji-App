<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Produk Aktif</h1>
            <hr>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Produk PT. Madinah Iman Wisata Jepara
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Deskripsi Paket</th>
                                    <th>Kategori Paket</th>
                                    <th>Harga</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1;
                                foreach ($produk as $product) : ?>
                                    <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $product->nama_paket ?></td>
                                        <td><?= $product->deskripsi_paket ?></td>
                                        <td><?= $product->kategori_paket ?></td>
                                        <td><?= $product->harga ?></td>
                                        <td>
                                            <div>
                                                <a href="<?= site_url('admin/editproduk/') . $product->id_paket ?>">
                                                    <button class="btn btn-warning">Edit</button></a>

                                                <a href="<?= site_url('admin/hapus/') . $product->id_paket ?>">
                                                    <button class="btn btn-danger">Hapus</button></a>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php echo view('admin/footer'); ?>