<div id="layoutSidenav_content">
    <main>
        <div class="container" style="padding:100px">
            <h3 class="text-center" style="margin-top:10px">Laporan Transaksi Umrah PT. Madinah Iman Wisata Jepara</h3>
            <form action="<?= current_url() ?>" enctype="multipart/form-data" method="POST">
                <label for="">Tanggal Awal</label>
                <input type="date" class="form-control" name="tglawal" required>
                <hr>
                <label for="">Tanggal Akhir</label>
                <input type="date" class="form-control" name="tglakhir" required>
                <br>
                <button type="submit" class="btn btn-primary float-right">Lihat Transaksi</button>
            </form>
        </div>
    </main>
</div>


<?php echo view('admin/footer')  ?>