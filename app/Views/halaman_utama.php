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
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body>

    <?= $this->include('navbar') ?>
    <?= $this->renderSection('content') ?>

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">

        <div class="row align-items-center">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Form Persetujuan Tindakan Kedokteran</h5>
                        <a href="<?= site_url('home/form1') ?>" class="btn btn-primary">Go to Form 1</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('uploads/formicon.png') ?>" class="card-img-top" alt="" width="159px" height="221px">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Form Pengkajian Pra Bedah</h5>
                        <a href="<?= site_url('home/form2') ?>" class="btn btn-primary">Go to Form 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>