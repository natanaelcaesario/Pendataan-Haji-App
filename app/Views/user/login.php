<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashData('success');
?>

<form action="<?= current_url() ?>" method="POST" class="text-center border border-light p-5">

    <p class="h1 mb-4">Selamat Datang</p>
    <?php if ($errors != null) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errors  ?>
        </div>
    <?php endif ?>
    <div class="view">
        <img class="img-fluid d-block img-rounded mx-auto" style="height:300px" src="<?= base_url('koper/logo.png') ?>">
        <div class="mask rgba-black-slight"></div>
    </div>
    <br>

    <!-- Email -->
    <input type="email" name="username" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" name="password" class="form-control mb-4" placeholder="Password">



    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="<?= base_url('user/register') ?>">Register</a>
    </p>

</form>


<!-- Default form login -->