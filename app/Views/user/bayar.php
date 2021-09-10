<div class="container" style="padding:50px">
    <h3 class="text-center">Data Pembayaran</h3>

    <br>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= site_url('user/bayar/') . $transaksi->id_transaksi ?>" method="POST" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td><input type="text" name="nama" class="form-control border" value="<?= $user->nama ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>Bank</th>
                        <td><input type="text" class="form-control" name="bank" value="<?php
                                                                                        if ($transaksi->bank !== NULL) {
                                                                                            echo $transaksi->bank;
                                                                                        } ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><input type="text" class="form-control" name="tanggal" value="<?= $transaksi->tanggal ?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td><input type="text" class="form-control" name="harga" value="<?= $transaksi->total ?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Status Pembayaran</th>
                        <td><?= $transaksi->status ?></td>
                    </tr>
                    <tr>
                        <th>Bukti Pembayaran</th>
                        <td><input type="file" name="bukti_bayar" required></td>
                    </tr>

                </table>
                <?php if ($transaksi->bukti_bayar !== NULL) { ?>
                    <div class="row" hidden>
                        <div class="col-md-7 d-block">
                            <div class="alert alert-info">
                            <p>
                                Silahkan Melakukan Pembayaran <br>
                                <strong>BANK BRI 0022-01-025715-50-9 A/N ANISAH IRMAYANI</strong>
                            </p>

                            </div>

                        </div>

                    </div>
                <?php } ?>

                <?php if ($transaksi->bukti_bayar == NULL) { ?>
                    <div class="row">
                        <div class="col-block ml-4">
                            <div class="alert alert-info">
                            <p>
                                Silahkan Melakukan Pembayaran <br>
                                <strong>BANK BRI 0022-01-025715-50-9 A/N ANISAH IRMAYANI</strong>
                            </p>

                            </div>

                        </div>
                    </div>
                <?php } ?>
                <?php if ($transaksi->status == "Lunas") { ?>
                    <button class="btn btn-unique btn-block my-4" type="submit" hidden>Submit</button>
                <?php } else { ?>
                    <button class="btn btn-unique btn-block my-4" type="submit" id="tombol">Submit</button>
                <?php }  ?>

            </form>

        </div>

        <div class=" col-md-6">
            <div class="card">
                <div class="view view-cascade overlay">
                    <img src="<?= base_url('uploads/bukti_bayar/' . $transaksi->bukti_bayar) ?>" alt="Anda Belum Upload Bukti Pembayaran" class="img-fluid ">
                </div>


            </div>

        </div>


    </div>

</div>


</div>


<?php if ($transaksi->status == "Sedang Diproses") {  ?>
    <script>
        $("#tombol").attr("hidden", true);
    </script>
<?php }  ?>