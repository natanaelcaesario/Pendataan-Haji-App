<?php $session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashData('success');
?>
<!-- Default form register -->
<form action="<?= current_url() ?>" class="text-left border border-light p-5" method="POST" enctype="multipart/form-data">

    <p class="text-center h1 mb-4">PENDAFTARAN AKUN</p>
    <div class="container-fluid bg-indigo ">
        <?php if ($errors != null) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errors  ?>
            </div>
        <?php endif ?>
        <?php if ($success != null) :  ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success  ?>
            </div>
        <?php endif  ?>
        <!-- First name -->
        <input name="nama" type="text" class="form-control mb-4" placeholder="Nama Lengkap">
        <input name="ktp" type="text" class="form-control mb-4" placeholder="No KTP">

        <!-- E-mail -->
        <input name="email" type="email" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input name="password" type="password" id="password" class="form-control" placeholder="Password" minlength="10" required>
        <small class="form-text text-muted mb-4">
            &nbsp;<input type="checkbox" onclick="myFunction()">
            Lihat Password
        </small>

        <input type="password" id="confirm_password" class="form-control" placeholder="Ulangi Password" minlength="10" required>
        <br>
        <label for="">Kabupaten/Kota</label>
        <select name="kota" id="" class="form-control" required>
            <option value="">Pilih</option>
            <option value="Banjarnegara">Banjarnegara</option>
            <option value="Banyumas">Banyumas</option>
            <option value="Batang">Batang</option>
            <option value="Blora">Blora</option>
            <option value="Boyolali">Boyolali</option>
            <option value="Brebes">Brebes</option>
            <option value="Cilacap">Cilacap</option>
            <option value="Demak">Demak</option>
            <option value="Grobogan">Grobogan</option>
            <option value="Jepara"> Jepara</option>
            <option value="Karanganyar">Karanganyar</option>
            <option value="Kebumen">Kebumen</option>
            <option value="Kendal">Kendal</option>
            <option value="Klaten">Klaten</option>
            <option value="Kudus">Kudus</option>
            <option value="Magelang">Magelang</option>
            <option value="Pati">Pati</option>
            <option value="Pekalongan">Pekalongan</option>
            <option value="Pemalang">Pemalang</option>
            <option value="Purbalingga">Purbalingga</option>
            <option value="Purworejo">Purworejo</option>
            <option value="Rembang">Rembang</option>
            <option value="Semarang">Semarang</option>
            <option value="Sragen">Sragen</option>
            <option value="Sukoharjo">Sukoharjo</option>
            <option value="Tegal">Tegal</option>
            <option value="Temanggung">Temanggung</option>
            <option value="Temanggung">Wonogiri</option>
            <option value="Wonogiri">Wonosobo</option>
            <option value="Salatiga">Salatiga</option>
            <option value="Surakarta">Surakarta</option>
        </select>
        <br>
        <input name="alamat" minlength="10" type="text" class="form-control" placeholder="Alamat" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
        <br>
        <label for="">Tanggal Lahir</label>
        <input name="tanggal_lahir" minlength="10" type="date" class="form-control" placeholder="Alamat" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
        <br>
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" id="male" name="jenis_kelamin" value="laki-laki">
        <label for="male">Laki-laki</label><br>
        <input type="radio" id="female" name="jenis_kelamin" value="perempuan">
        <label for="female">Perempuan</label><br>
        <br>

        <input name="nomerhandphone" type="number" class="form-control" placeholder="Nomor Handpohone" minlength="10" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <br>


        <p>Upload Foto</p>
        <input name="foto" type="file" class="form-control-xl" required>


        <!-- Sign up button -->
        <button class="btn btn-unique btn-block my-4" type="submit">Daftar</button>


</form>

<!-- Default form register -->
<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Password tidak cocok");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>