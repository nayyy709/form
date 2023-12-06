<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Formulir</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        h5 {
            font-size: 20px;
        }
    </style>




    <!-- Custom styles for this template -->

</head>

<body>

    <?= $this->include('navbar') ?>
    <?= $this->renderSection('content') ?>


    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5" style="margin: auto;">

        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title">Form Persetujuan Tindakan Kedokteran</h5>
                        <br>
                        <br>
                        <br>
                        <a href="<?= site_url('home/form1') ?>" class="btn btn-dark">Go to Form 1</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title">Form Pengkajian Pra Bedah</h5>
                        <br>
                        <br>
                        <br>
                        <a href="<?= site_url('home/form2') ?>" class="btn btn-dark ">Go to Form 2</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title">Infrom Consent</h5>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="<?= site_url('home/form3') ?>" class="btn btn-dark ">Go to Form 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title">Form Pengkajian Awal Keperawatan dan Medis Pasien Rawat Inap Dewasa</h5>
                        <br>
                        <a href="<?= site_url('home/form4') ?>" class="btn btn-dark ">Go to Form 4</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>