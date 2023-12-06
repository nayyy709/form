<?php
$db = db_connect();

foreach ($dataAssessmentform3 as $row) {
};
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Inform Consent</title>

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

  <style>
    h1 {
      font-size: 17px;
    }

    h2 {
      font-size: 16px;
    }

    h3 {
      font-size: 15px;
    }

    h4 {
      font-size: 14px;
    }

    h5 {
      font-size: 13px;
    }

    p {
      font-size: 10px;
    }
  </style>

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
</head>

<body>

  <div class="container mt-5">
    <a class="btn mb-5" href="<?= site_url('home/index') ?>"><i class="fa fa-arrow-left"></i></a>
    <form>
      <table class="table table-bordered">
        <tr>
          <td align="right">

            <img src="<?= base_url('uploads/gambar.jpg') ?>" alt="Gambar" width="55px" height="74px">

          </td>

          <td>
            <h1><b>RSUD Dr.M.Yunus Bengkulu</b></h1>
            <h2><b>Badan Layanan Umum Daerah</b></h2>
            <p>Jl. Bhayangkara Bengkulu 38229 Telp. (0736) 52004 – 52006 Fax (0736) 52007</p>
          </td>
          <form>
            <td>
              <div class=" row">
                <div class="col-4">
                  <label>No.MR:</label>
                </div>
                <div class="col-8">
                  <input class="form-control" type="text" name="no_Registration" id="no_Registration" placeholder="No.MR" value="<?php echo $row->NO_REGISTRATION ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-4">
                  <label>Nama Lengkap</label>
                </div>
                <div class="col-8">
                  <input class="form-control" type="text" name="thename " id="thename  " placeholder="Nama Lengkap" value="<?php echo $row->THENAME ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-4">
                  <label>Tanggal Lahir</label>
                </div>
                <div class="col-8">
                  <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH ?>" readonly>
                </div>
              </div>
            </td>
        </tr>
    </form>
    </table>

    <table class="table table-bordered" style="border: 2px solid black;">
      <tr>
        <td>
          <h1 class="text-center">FORMULIR PEMBERIAN INFORMASI DAN PERSETUJUAN UMUM<br>
            (GENERALCONSENT) UNTUK MENERIMA PELAYANAN KESEHATAN</h1>
        </td>
      </tr>
    </table>

    <div class="container mt-5">
      <h4>I. INFORMASI TENTANG DAHK DAN KEWAJIBAN SERTA TATA TERTIB RUMAH SAKIT:</h4>

      <!-- 1 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;1. Informasi tentang hak dan kewajiban pasien serta tata tertib Rumah Sakit dijelaskan melalui liflet dan brosur.</h5>

      <!-- 2 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;2. Saya menyatakan setuju, baik sebagai wali atau sebagai pasien, bahwa sesuai pertimbangan pelayanan yang<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;diberikan kepada pasien, maka saya wajib untuk membayar total biaya perawatan yang diberikan sesuai acuan biaya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspdan ketentuan Rumah Sakit dengan jaminan asuransi kesehatan/perusahaan maupun pribadi.</h5>

      <!-- 3 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;3. Barang-barang milik pasien dilindungi sesuai kemampuan Rumah Sakit.</h5>

      <h4 class="mt-3">II. PERAWATAN DAN PENGOBATAN</h4>

      <!-- 1 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;1. Saya menyetujui untuk dilakukan perawatan sebagai pasien rawat jalan, rawat inap, maupun Gawat Darurat di RSUD<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DR.M.Yunus Bengkulu dan memberikan kuasa untuk dilakukan pemeriksaan dan tindakan oleh dokter, perawat dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tenaga kesehatan lainnya dengan sarana dan prasarana yang tersedia di Rumah Sakit termasuk X-Ray, pemberian<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan/atau penyuntikan produk farmasi dan obat-obatan, pemasangan alat kesehatan (kecuali yang membutuhkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;persetujuan khusus), pengambilan darah untuk pemeriksaan laboratorium atau pemeriksaan patologi yang<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disarankan pada perawatan saya.</h5>

      <!-- 2 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;2. Saya mengakui bahwa RSUD DR.M. Yunus Bengkulu merupakan Rumah Sakit Pendidikan yang menjadi tempat<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;praktek klinik bagi mahasiswa kedokteran dan profesi-profesi lain. Karena itu mereka mungkin berpartisipasi dan atau<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;terlibat dalam perawatan saya. Saya menyetujui bahwa mahasiswa kedokteran dan profesi kesehatan lain<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;berpartisipasi dalam perawatan saya, sepanjang di bawah supervise Dokter Penanggung Jawab Pasien (DPKP). </h5>

      <!-- 3 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;3. Saya setuju untuk dirujuk ke Instansi pelayanan lain yang telah ditentukan atau disepakati bersama bila dibutuhkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tindakan atau pelayanan lain yang tersedia di Rumah Sakit.</h5>

      <!-- 4 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;4. Saya setuju bila Rumah Sakit melakukan tindakan pertolongan sesuai kebutuhan medis pasien termasuk dalam<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keadaan gawat darurat dengan pemberi informasi dan persetujuan lisan terlebih dahulu dan kemudian persetujuan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tertulis dilakukan setelah kondisi memungkinkan.</h5>


      <h4 class="mt-3">III. KERAHASIAAN INFORMASI, PRIVASI DAN PELEPASAN INFORMASI</h4>

      <!-- 1 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Saya memberi kuasa kepada setiap dan seluruh orang yang merawat saya untuk memeriksa dan/atau<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memberitahukan iinformasi kesehatan saya kepada pemberi kesehatan lain yang turut merawat saya selama di Rumah<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sakit ini.</h5>

      <!-- 2 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Saya memberi wewenang kepada Rumah Sakit untuk memberikan informasi tentang diagnosis, hasil pelayanan dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pengobatan yang diperlukan untuk proses klaim asuransi kesehatan/perusahaan dan atau lembaga pemerintahan.</h5>

      <!-- 3 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Saya setuju Rumah Sakit wajib menjamin kerahasiaan informasi medis saya baik untuk kepentingan perawatan dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pengobatan, pendidikan maupun penelitian kecuali saya mengungkapkan sendiri atau orang lain yang saya beri kuasa<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;untuk itu.</h5>

      <!-- 4 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Saya <select name="v_04" id="v_04">
          <option selected>Pilih</option>
          <option value="1">memberikan</option>
          <option value="2">tidak memberikan</option>
        </select>&nbsp;(*coret salah satu), wewenang kepada Rumah Sakit untuk memberikan data<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan informasi kesehatan saya kepada keluarga saya, yaitu:</h5>

      <!-- a -->
      <form>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. <input type="text" name="v_05" id="v_05" placeholder="isi"></h5>

        <!-- b -->
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. <input type="text" name="v_06" id="v_06" placeholder="isi"></h5>

        <!-- c -->
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. <input type="text" name="v_07" id="v_07" placeholder="isi"></h5>
      </form>

      <!-- 5 -->
      <h5 class="mt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Pengambilan dokumentasi saya berupa foto, rekaman wawancara di luar kepentingan keperawatan dan pengobatan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;harus seijin saya.</h5>

      <!-- 6 -->
      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. Saya <select name="v_08" id="v_08">
          <option selected>Pilih</option>
          <option value="1">menginginkan</option>
          <option value="2">tidak menginginkan</option>
        </select>&nbsp;(*coret salah satu)privasi khusus, jika ada&nbsp;<input type="text" name="v_09" id="v_09" placeholder="isi">&nbsp;dan tidak<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ingin dikunjungi oleh <input type="text" name="v_10" id="v_10" placeholder="isi"></h5>

      <!-- alert -->
      <h5 class="mt-3"><b>Dengan ini saya menyatakan bahwa saya telah menerima informasi sebagaimana di atas dan telah<br><select name="v_11" id="v_11">
            <option selected>Pilih</option>
            <option value="1">memahami</option>
            <option value="2">tidak memahami</option>
          </select>&nbsp;(*coret salah satu)</b></h5>

      <!-- TTD -->
      <h5 class="mt-3"><b>UNTUK KONFIRMASI, SAYA MENANDATANGANI FORMULIR INI.</b></h5>
    </div>

    <table class="table table-bordered mb-5">
      <tr>
        <td class="text-center">
          Bengkulu,<input type="date" name="v_12" id="v_12">
        </td>
        <td class="text-center">
          Jam: <input type="time" name="v_13" id="v_13"> WIB
        </td>
      </tr>
      <tr>
        <td class="text-center">
          Disetujui oleh <select name="v_14" id="v_14">
            <option selected>Pilih</option>
            <option value="1">Pasien</option>
            <option value="2">Keluarga Pasien</option>
          </select>
        </td>
        <td class="text-center">
          Saksi,
        </td>
        <td class="text-center">
          Petugas
        </td>
      </tr>
      <tr>
        <td class="text-center">
          Hubungan dengan pasien
        </td>
        <td>
          &nbsp;
        </td>
        <td>
          &nbsp;
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <div id="sig"></div>
        </td>
        <td class="text-center">
          <div id="sig1"></div>
        </td>
        <td class="text-center">
          <div id="sig2"></div>
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <input type="text" name="v_15" id="v_15" style="width: 150px;">
        </td>
        <td class="text-center">
          <input type="text" name="v_16" id="v_16" style="width: 150px;">
        </td>
        <td class="text-center">
          <input type="text" name="v_17" id="v_17" style="width: 150px;">
        </td>
      </tr>
    </table>
    </form>
    <div class="mb-3">
      <a class="btn form-control"><i class="fa fa-save"></i> SAVE</a>
    </div>
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