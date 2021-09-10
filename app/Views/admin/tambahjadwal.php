<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Jadwal Manasik PT. Madinah Iman Wisata Jepara</h1>
            <hr>
            <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">

                <input type="text" name="nama_pembimbing" class="form-control mb-4" placeholder="Nama Pembimbing" required>

                <!-- Password -->
                <input type="date" name="tanggal" class="form-control mb-4" placeholder="Tanggal Keberangkatan" required>
                <input type="time" name="waktu" class="form-control mb-4" required>
                <input type="text" name="tempat" class="form-control mb-4" placeholder="Tempat" required>
                <input type="text" name="keterangan" class="form-control mb-4" placeholder="Keterangan" required>
              
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Tambah Jadwal</button>
            </form>
        </div>

    </main>