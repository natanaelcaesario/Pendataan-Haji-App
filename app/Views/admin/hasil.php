<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - ADMIN MIW</title>
    <link href="<?= base_url('sbadmin/dist/css/styles.css') ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">LAPORAN</h1>
            <button class="btn btn-primary btn-sm" onclick="window.print();">Export</button>
            <hr>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    LAPORAN TRANSAKSI
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama jamaah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Nomer Handphone</th>
                                    <th>Paket</th>
                                    <th>No KTP</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomer = 1;
                                foreach ($obj as $laporan) :  ?>
                                    <tr>
                                        <td><?= $nomer++ ?></td>
                                        <td><?= $laporan->nama ?></td>
                                        <td><?= $laporan->jenis_kelamin ?></td>
                                        <td><?= $laporan->alamat ?></td>
                                        <td><?= $laporan->nomerhandphone ?></td>
                                        <td><?= $laporan->paket_dipilih ?></td>
                                        <td><?= $laporan->ktp ?></td>
                                        <td><?= $laporan->total ?></td>
                                    </tr>
                                <?php endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php echo view('admin/footer')  ?>