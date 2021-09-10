<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="height: 200px">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <!-- caption -->
            <div class="captionhead">PROFIL USER</div>

        </div>
        <!--/.Controls-->
    </div>
</div>

<br>
<form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <img name="foto" class="img-fluid" alt="image" src="<?= base_url('uploads/' . $info->foto) ?>" />
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h1 style="font-weight:bolder">DASHBOARD PENGGUNA</h1>
                <hr>
                <input type="text" name="id_user" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nama Lengkap" value="<?php echo $info->id_user ?>" hidden>
                <input type="text" name="nama" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nama Lengkap" value="<?php echo $info->nama ?>" readonly>
                <input type=" text" name="ktp" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="NIK KTP" readonly value="<?php echo $info->ktp ?>">
                <input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" value="<?php echo $info->email ?>">
                <input type="text" name="nomerhandphone" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nomor Handphone" value="<?php echo $info->nomerhandphone ?>">
                <input type="address" name="alamat" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="alamat" value="<?php echo $info->alamat ?>">

                <button class="btn accent-1 btn-primary" type="submit">Konfirmasi Data</button>
            </div>
        </div>
    </div>
</form>

<div class="container"></div>
<br>
<br>