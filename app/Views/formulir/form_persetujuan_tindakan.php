<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

</head>

<body>


  <div class="container mt-3">
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
        <form>
          <td width="60%">
            <div class="row">
              <div class="col-5">
                <label>No RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="no_Registration" id="no_Registration" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thename" id="thename" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" readonly>
              </div>
              <div class="col-md-1">
                <label>Umur</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="ageyear" id="ageyear" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                <label>Jenis Kelamin</label><br>
              </div>
              <div class="col-7">
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="gender" id="gender" value="laki">
                  <label class="form-check-label" for="gender">Laki-laki</label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="gender" id="gender" value="perempuan">
                  <label class="form-check-label" for="gender">Perempuan</label>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Alamat</label>
              </div>
              <div class="col-7">
                <textarea class="form-control" name="theaddress" id="theaddress" cols="6" rows="2" readonly></textarea>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Dokter Penanggung Jawab Pasien</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="v_06" id="v_06">
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-5">
                <label>Ruangan</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="v_07" id="v_07">
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <label>Tanggal dan Pukul</label>
              </div>
              <div class="col-4">
                <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" readonly>
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
        <input class="form-control" type="text" name="v_10" id="v_10">
      </div>
    </div>

    <div class="row">
      <div class="col-md-5">
        <label>Penanggung Jawab *</label>
        <select class="form-control" name="t_02">
          <option selected>Pilih</option>
          <option value="1">Penerima Informasi</option>
          <option value="2">Pemberi Persetujuan</option>
        </select>
      </div>
      <div class="col-md-7">
        <label></label>
        <input class="form-control" type="text" name="v_11" id="v_11">
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
              <input class="form-control" type="text" name="v_12" id="v_12">
            </div>
          </td>
          <td class="text-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_03" name="t_03">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Dasar Diagnosis</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_13" id="v_13">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_04" name="t_04">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Tindakan Kedokteran</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_14" id="v_14">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_05" name="t_05">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Indikasi Tindakan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" id="v_15" name="v_15">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_06" name="t_06">
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
              <input class="form-control" type="text" name="v_16" id="v_16">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_07" name="t_07">
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
              <input class="form-control" type="text" name="v_17" id="v_17">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_08" name="t_08">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">6</th>
          <td>Tujuan</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_18" id="v_18">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_09" name="t_09">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">7</th>
          <td>Risiko</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_19" id="v_19">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_10" name="t_10">
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">8</th>
          <td>Komplikasi</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="v_20" id="v_20">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_11" name="t_11">
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
              <input class="form-control" type="text" name="v_21" id="v_21">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_12" name="t_12">
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
              <input class="form-control" type="text" name="v_22" id="v_22">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_13" name="t_13">
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
              <input class="form-control" type="text" name="v_23" id="v_23">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_14" name="t_14">
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
              <input class="form-control" type="text" name="v_24" id="v_24">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_15" name="t_15">
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
              <input class="form-control" type="text" name="v_25" id="v_25">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_16" name="t_16">
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
              <input class="form-control" type="text" name="v_26" id="v_26">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_17" name="t_17">
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
              <input class="form-control" type="text" name="v_27" id="v_27">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="t_18" name="t_18">
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
            Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_28" id="v_28" readonly> tahun, <input type="text" name="v_29" id="v_29" readonly>,
            alamat <input type="text" name="v_30" id="v_30" readonly> dengan ini menyatakan persetujuan untuk dilakukannya tindakan <input type="text" name="v_31" id="v_31" readonly> terhadap saya
          </p><br>


          <p>
            Yang bertanda tangan dibawah ini, Saya, nama <input type="text" name="v_32" id="v_32" readonly> umur <input type="text" name="v_33" id="v_33" readonly> tahun,
            <input type="radio" class="form-check-input" name="gender" id="gender" value="laki">
            <label class="form-check-label" for="gender">Laki-laki</label>
            <input type="radio" class="form-check-input" name="gender" id="gender" value="perempuan">
            <label class="form-check-label" for="gender_pr">Perempuan</label>,
            alamat <input type="text" name="v_34" id="v_34" readonly> dengan ini menyatakan persetujuan
            untuk dilakukannya tindakan <input type="text" name="v_35" id="v_35" readonly> terhadap<input type="text" name="v_36" id="v_36" readonly> saya
            bernama <input type="text" name="v_37" id="v_37" readonly> umur <input type="text" name="v_38" id="v_38" readonly> tahun, <input type="text" name="v_39" id="v_39" readonly>, alamat <input type="text" name="v_40" id="v_40" readonly>

          </p>

        </td>
      </tr>
      <tr>
        <td>
          <p>
        </td>
      </tr>
      <tr>
        <td>
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
          <p>Bengkulu, <input type="datetime-local" name="v_41" id="v_41"></p>
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
            <input type="text" name="v_42" id="v_42">
          </td>
          <td>
            <input type="text" name="v_43" id="v_43">
          </td>
          <td>
            <input type="text" name="v_44" id="v_44">
          </td>
          <td>
            <input type="text" name="v_45" id="v_45">
          </td>
        </tr>
      </table>

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