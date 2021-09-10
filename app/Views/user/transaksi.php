<div class="container" style="margin-top:50px;">
    <h1>TRANSAKSI</h1>
    <div class="row">
        <div class="col-md-7">
            <div class="alert alert-info">
                <p>
                    Silahkan Melakukan Pembayaran <br>
                    <strong>BANK BRI 0022-01-025715-50-9 A/N ANISAH IRMAYANI</strong>
                </p>

            </div>

        </div>

    </div>

    <table class="table table-bordered text-center">

        <thead>
            <tr>
                <td>Nomor</td>
                <td>ID Transaksi</td>
                <td>Nama</td>
                <td>No KTP</td>
                <td>Email</td>
                <td>Harga</td>
                <td>Paket</td>
                <td>Status Pembayaran</td>
                <td>Option</td>
            </tr>
        </thead>

        <tbody>
            <?php $nomor = 1;
            foreach ($cari as $data) : ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $data->id_transaksi ?></td>
                    <td><?= $pengguna->nama ?></td>
                    <td><?= $pengguna->ktp ?></td>
                    <td><?= $pengguna->email ?></td>
                    <td><?= $data->total ?></td>
                    <td><?= $data->paket_dipilih ?></td>
                    <td><?php

                        if ($pengguna->status == "Lunas") {
                            echo "Lunas";
                        } else {
                            echo $data->status;
                        }
                        ?></td>
                    <td>
                        <a href="<?= site_url('user/bayar/'  . $data->id_transaksi) ?>" class="btn btn-unique">Upload Pembayaran</a>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>