<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid">
            <h1 class="mt-4">TRANSAKSI JAMAAH</h1>
            <hr>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Table Transaksi PT. Madinah Iman Wisata Jepara
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Jamaah</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nomer KTP</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kota</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Nama Paket</th>
                                    <th>Status</th>
                                    <th>Total Pembayaran</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomer = 1;
                                foreach ($transaksi as $trans) : ?>
                                    <tr>
                                        <td><?= $nomer++ ?></td>
                                        <td><?= $trans->nama ?></td>
                                        <td><?= $trans->tanggal_lahir ?></td>
                                        <td><?= $trans->ktp ?></td>
                                        <td><?= $trans->jenis_kelamin ?></td>
                                        <td><?= $trans->kota ?></td>

                                        <td><?= $trans->alamat ?></td>
                                        <td><?= $trans->nomerhandphone ?></td>

                                        <td><?= $trans->paket_dipilih ?></td>
                                        <?php if ($trans->status == "Lunas") { ?>
                                            <td style="color:green">Lunas</td>
                                        <?php } ?>
                                        <?php if ($trans->status !== "Lunas") { ?>
                                            <td style="color:red">Perlu ditangani</td>
                                        <?php } ?>
                                        <td><?= $trans->total ?></td>
                                        <td>
                                            <a href="<?= site_url('admin/viewtrans/') . $trans->id_transaksi ?>">
                                                <button class="btn btn-sm btn-success"> Bukti Transfer</button>
                                            </a>
                                            <br>
                                            <?php if ($trans->status !== "Lunas") { ?>
                                                <a href="<?= site_url('admin/hapustrans/') . $trans->id_transaksi ?>">
                                                    <button class="btn btn-sm btn-danger">Hapus Transaksi</button>
                                                </a>
                                            <?php } ?>
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