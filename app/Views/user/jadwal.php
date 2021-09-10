<div class="container" style="margin-top:50px">
<h1>Jadwal Manasik PT. Madinah Iman Wisata Jepara</h1>
    <table class="table table-bordered text-center " style="padding:50px">
    
        <thead>
            <tr>
                <td>Nomor</td>
                <td>Nama Pembimbing</td>
                <td>Tanggal</td>
                <td>Waktu</td>
                <td>Tempat</td>
                <td>Keterangan</td>
            </tr>
        </thead>

        <tbody>
            <?php $nomor = 1;
            foreach ($data as $jadwal) : ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $jadwal->nama_pembimbing ?></td>
                    <td><?= $jadwal->tanggal ?></td>
                    <td><?= $jadwal->waktu ?></td>
                    <td><?= $jadwal->tempat ?></td>
                    <td><?= $jadwal->keterangan ?></td>
             
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo view('footer'); ?>