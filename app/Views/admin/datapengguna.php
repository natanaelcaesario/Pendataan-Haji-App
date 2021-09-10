<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">DATA BERKAS DOKUMEN JAMAAH </h1>
            <hr>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Table Data Berkas Jamaah PT. Madinah Iman Wisata Jepara
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Nomor KTP</th>
                                    <th>Email</th>
                                    <th>Nomor Handphone</th>
                                    <th>Alamat</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1;
                                foreach ($user as $pengguna) : ?>
                                    <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $pengguna->nama ?></td>
                                        <td><?= $pengguna->ktp ?></td>
                                        <td><?= $pengguna->email ?></td>
                                        <td><?= $pengguna->nomerhandphone ?></td>
                                        <td><?= $pengguna->alamat ?></td>
                                        <td>

                                            <a href="<?= site_url('admin/hapus') ?>">
                                            <a href="<?= site_url('admin/hapususer/' . '/' . $pengguna->id_user) ?>">
                                                <button class="btn btn-sm btn-danger">Hapus</button>
                                            </a>
                                            <a href="<?= site_url('admin/singleuser/') . '/' . $pengguna->id_user ?>">
                                                <button class="btn btn-sm btn-warning">Berkas</button>
                                            </a>

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