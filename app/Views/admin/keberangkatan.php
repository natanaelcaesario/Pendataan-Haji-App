<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">JADWAL MANASIK </h1>
            <hr>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Table Jadwal Manasik
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Pembimbing</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Tempat</th>
                                    <th>Keterangan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomer = 1;
                                foreach ($jadwal as $data) : ?>
                                    <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $data->nama_pembimbing ?></td>
                                        <td><?= $data->tanggal ?></td>
                                        <td><?= $data->waktu ?></td>
                                        <td><?= $data->tempat ?></td>
                                        <td><?= $data->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/hapusjadwal/') . '/' . $data->id_jadwal ?>">
                                                <button class="btn btn-danger">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php echo view('admin/footer'); ?>