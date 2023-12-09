<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Formulir Persetujuan Tindakan Kedokteran</title>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>jQuery UI Signature Basics</title>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link href="<?= base_url('css/jquery.signature.css') ?>" rel="stylesheet">
  <style>
    .kbw-signature {
      width: 150px;
      height: 75px;
    }
  </style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?= base_url('js/jquery.signature.js') ?>"></script>

  <!-- Signature1 Function -->
  <script>
    $(function() {
      var sig = $('#sig').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature2 Function -->
  <script>
    $(function() {
      var sig = $('#sig1').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature3 Function -->
  <script>
    $(function() {
      var sig = $('#sig2').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature4 Function -->
  <script>
    $(function() {
      var sig = $('#sig3').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature5 Function -->
  <script>
    $(function() {
      var sig = $('#sig4').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Signature6 Function -->
  <script>
    $(function() {
      var sig = $('#sig5').signature();
      $('#disable').click(function() {
        var disable = $(this).text() === 'Disable';
        $(this).text(disable ? 'Enable' : 'Disable');
        sig.signature(disable ? 'disable' : 'enable');
      });
      $('#clear').click(function() {
        sig.signature('clear');
      });
    });
  </script>
  <!-- Style btn submit & back -->
  <style>
    .btn {
      background-color: black;
      /* Blue background */
      border: none;
      /* Remove borders */
      color: white;
      /* White text */
      padding: 12px 16px;
      /* Some padding */
      font-size: 16px;
      /* Set a font size */
      cursor: pointer;
      /* Mouse pointer on hover */
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
  </style>
  <!-- function1 -->
  <script type="text/javascript">
    $(function f1() {
      $("input[name='t_020']").click(function f1() {
        if ($("#t_020_atau").is(":checked")) {
          $("#v_23").removeAttr("disabled");
          $("#v_24").removeAttr("disabled");
          $("#t_021").removeAttr("disabled");
          $("#t_022_lk").removeAttr("disabled");
          $("#t_022_pr").removeAttr("disabled");
          $("#v_25").removeAttr("disabled");
          $("#v_23").focus();
        } else {
          $("#t_022_lk").attr("disabled", true);
          $("#t_022_lk").prop("checked", false);
          $("#t_022_pr").attr("disabled", true);
          $("#t_022_pr").prop("checked", false);
          $("#v_23").attr("disabled", true);
          $("#v_23").val("");
          $("#v_24").attr("disabled", true);
          $("#v_24").val("");
          $("#v_25").attr("disabled", true);
          $("#v_25").val("");
          $("#t_021").attr("disabled", true);
          $("#t_021").val("");

        }
      });
    });
  </script>
</head>

<body>

  <div class="container mt-3">
    <?php foreach ($dataAssessmentform1 as $row) {
    }; ?>
    <a class="btn" href="<?= site_url('home/index') ?>"><i class="fa fa-arrow-left"></i></a>
    <div style="text-align: right;">
      <h2>RM 08</h2>
    </div>

    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td width="40%">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h2 class="text-center mb-5">FORMULIR PERSETUJUAN TINDAKAN DOKTER</h2>
        </td>

        <form action="<?= site_url('addform/add_aksi') ?>" method="post">
          <td width="60%">
            <div class="row">
              <div class="col-5">
                <label>No RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="no_Registration" id="no_Registration" value="<?php echo $row->NO_REGISTRATION ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH ?>" readonly>
              </div>
              <div class="col-md-1">
                <label>Umur</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="ageyear" id="ageyear" value="<?php echo $row->AGEYEAR ?> " readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Jenis Kelamin</label><br>
              </div>
              <div class="col-2">
                <div class="form-input">
                  <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $row->GENDER ?>" readonly>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Alamat</label>
              </div>
              <div class="col-7">
                <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly><?php echo $row->THEADDRESS ?></textarea>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Dokter Penanggung Jawab Pasien</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="v_01" id="v_01">
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Ruangan</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="class_room_id" id="class_room_id" value="<?php echo $row->CLASS_ROOM_ID ?>" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <label>Tanggal dan Pukul</label>
              </div>
              <div class="col-5">
                <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" value="<?php echo $row->EXAMINATION_DATE ?>" readonly>
              </div>
            </div>

          </td>
      </tr>
    </table>
    <div>
      <h3 class="text-center">Pemberian Informasi</h3>
    </div>
    <div class="row">
      <div class="col-md-5">
        <label>Dokter Pelaksana Tindakan</label>
      </div>
      <div class="col-7">
        <input class="form-control" type="text" name="v_02" id="v_02">
      </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <label>Penanggung Jawab *</label>
        <select class="form-control" name="t_01" id="t_01_penanggungjawab">
          <option selected>Pilih</option>
          <option value="1">Penerima Informasi</option>
          <option value="2">Pemberi Persetujuan</option>
        </select>
      </div>
      <div class="col-md-7">
        <label></label>
        <input class="form-control" type="text" name="v_03" id="v_03">
      </div>
    </div>

    <table class="table table-bordered" style="border: 1px solid black;">
      <thead>
        <tr>
          <td width="5%"></td>
          <td width="35%"></td>
          <td width="45%"></td>
          <td width="15%"></td>
        </tr>
        <tr>
          <th scope="col" style="text-align: center;">No</th>
          <th scope="col">Jenis Informasi</th>
          <th scope="col" style="text-align: center;">Isi Informasi</th>
          <th scope="col" style="text-align: center;">Tanda (v)</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Diagnosis (WD & DD)</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_04" id="v_04">
            </div>
          </td>
          <td class="text-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_02_diagnosiswddd" name="t_02" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Dasar Diagnosis</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_05" id="v_05">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_03_dasardiagnosis" name="t_03" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Tindakan Kedokteran</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_06" id="v_06">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_04_tindakankedokteran" name="t_04" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Indikasi Tindakan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" id="v_07" name="v_07">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_05_indikasitindakan" name="t_05" value="1">
            </div>
          </td>
        </tr>
        <tr>

        <tr>
          <th scope="row">5</th>
          <td>
            <h6>Tata Cara :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Tipe Sedasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_08" id="v_08">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_06_tipesedasi" name="t_06" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Uraian singkat prosedur dan <br>Tahapan yang penting</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_09" id="v_09">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_07_uraiansingkat" name="t_07" value="2">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_10" id="v_10">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_08_tujuan" name="t_08" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">7</th>
          <td>Risiko</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_11" id="v_11">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_09_risiko" name="t_09" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">8</th>
          <td>Komplikasi</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_12" id="v_12">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_010_komplikasi" name="t_010" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">9</th>
          <td>
            <h6>Prognosis :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Prognosis Vital</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_13" id="v_13">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_011_prognosisvital" name="t_011" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Prognosis Fungsi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_14" id="v_14">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_012_prognosisfungsi" name="t_012" value="2">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>

            <p>Prognosis Kesembuhan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_15" id="v_15">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_013_prognosiskesembuhan" name="t_013" value="3">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">10</th>
          <td>
            <h6>Alternatif dan Risiko</h6>
            <p>Pilihan Pengobatan/Penatalaksanaan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_16" id="v_16">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_014_pilihanpengobatan" name="t_014" value="1">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">11</th>
          <td>
            <h6>Hal lain yang akan dilakukan untuk :</h6>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Perluasan Tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_17" id="v_17">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_015_perluasantindakan" name="t_015" value="1">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Konsultasi selama tindakan</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_18" id="v_18">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_016_konsultasiselamatindakan" name="t_016" value="2">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>
            <p>Resusitasi</p>
          </td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_19" id="v_19">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_017_resusitasi" name="t_017" value="3">
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <p>Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jelas,
            dan memberikan kesempatan untuk bertanya dan berdiskusi
          </p>
        </td>
        <td>
          <p>Tanda Tangan</p>
          <div id="sig"></div>
        </td>
      </tr>
      <tr>
        <td>
          <p>Dengan ini menyatakan bahwa saya telah menerima informasi dari dokter sebagaimana diatas
            kemudian yang saya berikan tanda paraf di kolom kanannya, dan telah memahaminya
          </p>
        </td>
        <td>
          <p>Tanda Tangan</p>
          <div id="sig1"></div>
        </td>
      </tr>
      <tr>
        <th>* Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat</th>
        <td></td>
      </tr>
    </table>


    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <h5 class="text-center">PERSETUJUAN TINDAKAN KEDOKTERAN</h5>
        </td>
      </tr>
      <tr>
        <td>
          <p>
            Yang bertanda tangan dibawah ini, Saya, Nama <input type="text" id="v_20" name="v_20">
            Umur <input type="text" id="t_018_umur" name="t_018">
            tahun,
            <input type="radio" class="form-check-input" id="t_019_lk" name="t_019" value="1">
            <label class="form-check-label" for="t_019_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="t_019_pr" name="t_019" value="2">
            <label class="form-check-label" for="t_019_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="v_21" name="v_21">
            dengan ini menyatakan <b>PERSETUJUAN</b> untuk dilakukannya tindakan <input type="text" id="v_22" name="v_22">
            terhadap <input type="radio" class="form-check-input" id="t_020_saya" name="t_020" value="1"> <label class="form-check-label" for="t_020_saya">Saya</label>
            /
            <input type="radio" class="form-check-input" id="t_020_atau" name="t_020" value="2"> <input type="text" id="v_23" name="v_23" disabled="disabled">
            saya bernama <input type="text" id="v_24" name="v_24" disabled="disabled">
            Umur <input type="text" id="t_021" name="t_021" disabled="disabled">
            tahun,
            <input type="radio" class="form-check-input" id="t_022_lk" name="t_022" disabled="disabled">
            <label class="form-check-label" for="t_022_lk">Laki-laki</label>
            <input type="radio" class="form-check-input" id="t_022_pr" name="t_022" disabled="disabled">
            <label class="form-check-label" for="t_022_pr">Perempuan</label>,<br>
            Alamat <input type="text" id="v_25" name="v_25" disabled="disabled">
          </p>
          <p>
            Saya memahami perlunya dan manfaat tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya termasuk risiko dan komplikasi yang mungkin timbul.
            Saya juga menyadari bahwa dokter melakukan suatu upaya dan oleh karena ilmu kedokteran bukanlah ilmu pasti, maka keberhasilan tindakan kedokteran bukanlah keniscayaan, melainkan sangat bergantung kepada izin Tuhan Yang Maha Esa.
          </p>
        </td>
      </tr>
    </table>

    <div class="container mt-5">
      <table class="table text-center">
        <tr>
          <p>Bengkulu, <input type="datetime-local" name="v_26" id="v_26"></p>
        </tr>
        <tr>
          <td>Yang Menyatakan</td>
          <td>Dokter</td>
          <td>Saksi 1</td>
          <td>Saksi 2</td>
        </tr>
        <tr>
          <td>
            <div id="sig2"></div>
          </td>
          <td>
            <div id="sig3"></div>
          </td>
          <td>
            <div id="sig4"></div>
          </td>
          <td>
            <div id="sig5"></div>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="v_27" id="v_27">
          </td>
          <td>
            <input type="text" name="v_28" id="v_28">
          </td>
          <td>
            <input type="text" name="v_29" id="v_29">
          </td>
          <td>
            <input type="text" name="v_30" id="v_30">
          </td>
        </tr>
      </table>

    </div>
    <div class="mb-3">
      <input type="submit" name="submit" class="btn form-control"></input>
    </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>