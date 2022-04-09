<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font Roboto Mono-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/vendor/fontawesome/svgs/solid/carrot.svg">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/login-style.css" rel="stylesheet">
</head>

<body class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <main class="form-signin">
        <?= form_open('auth'); ?>
        <img class="mb-4" src="<?= base_url(); ?>assets/vendor/fontawesome/svgs/solid/carrot.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>

        <?= $this->session->flashdata('flash'); ?>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>

        <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y'); ?></p>
        <?= form_close(); ?>
    </main>

    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>