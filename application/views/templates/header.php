<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
    
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.js"></script>
    
    
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">CRUD CodeIgniter</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?= base_url('provinsi'); ?>">Provinsi</a>
        <a class="p-2 text-dark" href="<?= base_url('kota'); ?>">Kota</a>
        <a class="p-2 text-dark" href="#">Menu 3</a>
        <a class="p-2 text-dark" href="#">Menu 4</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

</body>
</html>