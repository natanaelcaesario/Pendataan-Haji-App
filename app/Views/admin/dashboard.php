<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">DASHBOARD</h1>
            <hr>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Selamat Datang!<br> Halaman ini adalah konfigurasi untuk PT. Madinah Iman Wisata Jepara</li>
            </ol>
            <hr>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Transaksi Selesai
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Paket Yang Dibeli</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksi as $trans) : ?>
                                    <tr>
                                        <td><?= $trans->id_transaksi ?></td>
                                        <td><?= $trans->paket_dipilih ?></td>
                                        <td><?= $trans->total ?></td>
                                        <td class="text-success"><?= $trans->status ?></td>
                                        <td> <a href="<?= site_url('admin/viewtrans/') . $trans->id_transaksi ?>">
                                                <button class="btn btn-sm btn-info">Lihat Transaksi</button>
                                            </a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php  ?>
    <?php echo view('admin/footer'); ?>