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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

</head>

<body>

    <?= $this->include('navbar') ?>
    <?= $this->renderSection('content') ?>


    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>



    <div class="container mt-5" style="margin: auto;">
    </div>

    <a class="btn btn-primary mb-3" href="<?= site_url('home/index') ?>">Back</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>No.RM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Tanggal Lahir</th>
            <th width="14%">Isi Formulir</th>
        </tr>
        </thead>
        <?php foreach ($daftarpasien as $row) {
        ?>
            <tbody>
                <tr>
                    <td><?= $row->NOID; ?></td>
                    <td><?= $row->NO_REGISTRATION; ?></td>
                    <td><?= $row->THENAME; ?></td>
                    <td><?= $row->THEADDRESS; ?></td>
                    <td><?= $row->ANAMNASE; ?></td>
                    <td><?= $row->GENDER; ?></td>
                    <td><?= $row->AGEYEAR; ?>Y <?= $row->AGEMONTH; ?>M <?= $row->AGEDAY; ?>D</td>
                    <td><?= $row->DATE_OF_BIRTH; ?></td>
                    <td>
                        <a href="<?= base_url('') ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('') ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>



</body>


</html>