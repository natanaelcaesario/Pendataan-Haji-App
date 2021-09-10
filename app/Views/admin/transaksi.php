<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid" style="margin-top:30px">
            <h1 class="mt-4">Informasi Transaksi Pengguna</h1>
            <hr>

            <div class="row">
                <div class="col-4">
                    <div class="card-fluid">
                        &nbsp; <img style="height:400px; margin-left:-10px" class="img-fluid" src="<?= base_url('uploads/bukti_bayar/' . $transaksi->bukti_bayar) ?>" alt="User Belum melakukan Upload Bukti">
                    </div>
                </div>
                <div class="col-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Untuk Mengkonfirmasi pembayaran Ketikan "Lunas". <br>pada kolom Status Pembayaran atau tuliskan "Status Yang Diinginkan ataupun note yang diinginkan". <br> Agar pengguna dapat mengetahui status pembayaran</li>
                    </ol>
                </div>


                <div class="col-md-8">
                    <hr>
                    <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                        <label for="name">Nama Pengguna</label>
                        <input type="text" name="nama_jamaah" class="form-control" placeholder="Nama" value="<?= $cari->nama ?>" readonly>
                        <br>
                        <label for="paket_pengguna">Paket</label>
                        <input type="text" name="paket_pengguna" value="<?= $transaksi->paket_dipilih ?>" class="form-control" placeholder="Paket" readonly>
                        <br>
                        <label for="">Total Pembayaran</label>
                        <input type="text" name="total_bayar" value="<?= $transaksi->total ?>" class="form-control" placeholder="Harga Paket" readonly>
                        <br>
                        <label for="">Bank Pembayaran</label>
                        <input type="text" class="form-control" placeholder="Bank Pengguna" value="<?= $transaksi->bank ?>" readonly>
                        <br>
                        <label for="">Status Pembayaran</label>
                        <input type="text" name="status" class="form-control" placeholder="<?= $transaksi->status ?>">
                        <br>

                        <label style="font-weight:500" class="text-right">Tanggal Pembayaran: <?= $transaksi->tanggal ?></label><br>
                        <?php if ($transaksi->status == "Lunas") { ?>
                            <h2 style="color:green"><?= $transaksi->status ?></h2>
                        <?php } ?>
                        <?php if ($transaksi->status !== "Lunas") { ?>
                            <h2 style="color:red"><?= $transaksi->status ?></h2>
                        <?php } ?>
                        <hr>
                        <button type="submit" class="btn btn-success">Update Transaksi</button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php echo view('admin/footer'); ?>