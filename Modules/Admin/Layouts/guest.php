<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <!-- Preloader -->
    <!--    <div class="preloader flex-column justify-content-center align-items-center">-->
    <!--        <img class="animation__shake" src="--><?php //echo base_url('dist/img/AdminLTELogo.png')?><!--" alt="AdminLTELogo" height="60" width="60">-->
    <!--    </div>-->
    <?php $this->include('/Modules/Admin/Views/_partial/messages');?>
    <?php $this->renderSection('content');?>
    <footer class="main-footer">
        <strong>Copyright &copy; <?= date('Y') ?>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?= CodeIgniter\CodeIgniter::CI_VERSION ?> @Mode: <?= ENVIRONMENT ?>
        </div>
        <div class="environment">
            <p>Page rendered in {elapsed_time} seconds</p>
            <p>Environment: <?= ENVIRONMENT ?></p>
        </div>
    </footer>
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dist/js/adminlte.js"></script>
</body>
</html>