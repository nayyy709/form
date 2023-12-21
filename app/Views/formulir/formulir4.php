<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Pengkajian Awal Keperawatan dan Medis Pasien Rawat Inap Dewasa</title>

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
    p {
      font-size: 12px;
    }

    h5 {
      font-size: 15px;
    }

    h6 {
      font-size: 14px;
    }

    .box {
      border: 1px solid;
      width: 600px;
      height: 300px;
    }
  </style>




  <script>
    $(function() {
      fungsi1_disabled();
      $("#t_01_pasien, #t_01_keluarga").click(fungsi1_disabled);
    });
    $(function() {
      fungsi1_enable();
      $("#t_01_lainnya").click(fungsi1_enable);
    });

    function fungsi1_disabled() {
      if (this.click) {
        $("#v_08").attr("disabled", true);
        $("#v_08").val("");
      } else {
        $("#v_08").removeAttr("disabled");
      }
    }

    function fungsi1_enable() {
      $("#v_08").attr("disabled", true);
      if (this.click) {
        $("#v_08").removeAttr("disabled");
        $("#v_08").focus();
      } else {
        $("#v_08").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi2_disabled();
      $("#t_02_islam, #t_02_protestan, #t_02_katholik, #t_02_hindu, #t_02_budha, #t_02_konghucu").click(fungsi2_disabled);
    });
    $(function() {
      fungsi2_enable();
      $("#t_02_lainnya").click(fungsi2_enable);
    });

    function fungsi2_disabled() {
      if (this.click) {
        $("#v_09").attr("disabled", true);
        $("#v_09").val("");
      } else {
        $("#v_09").removeAttr("disabled");
      }
    }

    function fungsi2_enable() {
      $("#v_09").attr("disabled", true);
      if (this.click) {
        $("#v_09").removeAttr("disabled");
        $("#v_09").focus();
      } else {
        $("#v_09").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi3_disabled();
      $("#t_03_sd, #t_03_smp, #t_03_sma, #t_03_diploma, #t_03_s1, #t_03_s2, #t_03_s3").click(fungsi3_disabled);
    });
    $(function() {
      fungsi3_enable();
      $("#t_03_lainnya").click(fungsi3_enable);
    });

    function fungsi3_disabled() {
      if (this.click) {
        $("#v_10").attr("disabled", true);
        $("#v_10").val("");
      } else {
        $("#v_10").removeAttr("disabled");
      }
    }

    function fungsi3_enable() {
      $("#v_10").attr("disabled", true);
      if (this.click) {
        $("#v_10").removeAttr("disabled");
        $("#v_10").focus();
      } else {
        $("#v_10").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi4_disabled();
      $("#t_04_tidak").click(fungsi4_disabled);
    });
    $(function() {
      fungsi4_enable();
      $("#t_04_ya").click(fungsi4_enable);
    });

    function fungsi4_disabled() {
      if (this.click) {
        $("#t_05, #v_14").attr("disabled", true);
        $("#t_05, #v_14").val("");
      } else {
        $("#t_05, #v_14").removeAttr("disabled");
      }
    }

    function fungsi4_enable() {
      $("#t_05, #v_14").attr("disabled", true);
      if (this.click) {
        $("#t_05, #v_14").removeAttr("disabled");
        $("#t_05").focus();
      } else {
        $("#t_05, #v_14").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi5_disabled();
      $("#t_06_tidak").click(fungsi5_disabled);
    });
    $(function() {
      fungsi5_enable();
      $("#t_06_ya").click(fungsi5_enable);
    });

    function fungsi5_disabled() {
      if (this.click) {
        $("#v_15").attr("disabled", true);
        $("#v_15").val("");
      } else {
        $("#v_15").removeAttr("disabled");
      }
    }

    function fungsi5_enable() {
      $("#v_15").attr("disabled", true);
      if (this.click) {
        $("#v_15").removeAttr("disabled");
        $("#v_15").focus();
      } else {
        $("#v_15").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi6_disabled();
      $("#t_07_tidak").click(fungsi6_disabled);
    });
    $(function() {
      fungsi6_enable();
      $("#t_07_ada").click(fungsi6_enable);
    });

    function fungsi6_disabled() {
      if (this.click) {
        $("#riwayat_obat").attr("disabled", true);
        $("#riwayat_obat").val("");
      } else {
        $("#riwayat_obat").removeAttr("disabled");
      }
    }

    function fungsi6_enable() {
      $("#riwayat_obat").attr("disabled", true);
      if (this.click) {
        $("#riwayat_obat").removeAttr("disabled");
        $("#riwayat_obat").focus();
      } else {
        $("#riwayat_obat").attr("disabled", true);
      }
    }
  </script>

  <!-- fungsi disabled riwayat alergi -->
  <script type="text/javascript">
    $(function f12() {
      $("input[name='t_08']").click(function f12() {
        if ($("#t_08_ya").is(":checked")) {
          $("#t_09_alergiobat").removeAttr("disabled");
          $("#t_010_alergimakanan").removeAttr("disabled");
          $("#t_011_alergilainnya").removeAttr("disabled");
          $("#t_09_alergiobat").focus();
        } else {
          $("#t_09_alergiobat").attr("disabled", true);
          $("#t_09_alergiobat").prop("checked", false);
          $("#t_010_alergimakanan").attr("disabled", true);
          $("#t_010_alergimakanan").prop("checked", false);
          $("#t_011_alergilainnya").attr("disabled", true);
          $("#t_011_alergilainnya").prop("checked", false);
          $("#v_17").attr("disabled", true);
          $("#v_17").val("");
          $("#v_18").attr("disabled", true);
          $("#v_18").val("");
          $("#v_19").attr("disabled", true);
          $("#v_19").val("");
          $("#v_20").attr("disabled", true);
          $("#v_20").val("");
          $("#v_21").attr("disabled", true);
          $("#v_21").val("");
          $("#v_22").attr("disabled", true);
          $("#v_22").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f12() {
      $("input[name='t_09']").click(function f12() {
        if ($("#t_09_alergiobat").is(":checked")) {
          $("#v_17").removeAttr("disabled");
          $("#v_18").removeAttr("disabled");
        } else {
          $("#v_17").attr("disabled", true);
          $("#v_17").val("");
          $("#v_18").attr("disabled", true);
          $("#v_18").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f12() {
      $("input[name='t_010']").click(function f12() {
        if ($("#t_010_alergimakanan").is(":checked")) {
          $("#v_19").removeAttr("disabled");
          $("#v_20").removeAttr("disabled");
        } else {
          $("#v_19").attr("disabled", true);
          $("#v_19").val("");
          $("#v_20").attr("disabled", true);
          $("#v_20").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f12() {
      $("input[name='t_011']").click(function f12() {
        if ($("#t_011_alergilainnya").is(":checked")) {
          $("#v_21").removeAttr("disabled");
          $("#v_22").removeAttr("disabled");
        } else {
          $("#v_21").attr("disabled", true);
          $("#v_21").val("");
          $("#v_22").attr("disabled", true);
          $("#v_22").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled riwayat alergi -->

  <!-- fungsi disabled riwayat penyakit keluarga -->
  <script type="text/javascript">
    $(function f13() {
      $("input[name='t_012']").click(function f13() {
        if ($("#t_012_ada").is(":checked")) {
          $("#t_013_jantung").removeAttr("disabled");
          $("#t_014_asma").removeAttr("disabled");
          $("#t_015_dm").removeAttr("disabled");
          $("#t_016_hipertensi").removeAttr("disabled");
          $("#t_017_lainnya").removeAttr("disabled");
        } else {
          $("#t_013_jantung").attr("disabled", true);
          $("#t_013_jantung").prop("checked", false);
          $("#t_014_asma").attr("disabled", true);
          $("#t_014_asma").prop("checked", false);
          $("#t_015_dm").attr("disabled", true);
          $("#t_015_dm").prop("checked", false);
          $("#t_016_hipertensi").attr("disabled", true);
          $("#t_016_hipertensi").prop("checked", false);
          $("#t_017_lainnya").attr("disabled", true);
          $("#t_017_lainnya").prop("checked", false);
          $("#v_23").attr("disabled", true);
          $("#v_23").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f13() {
      $("input[name='t_017']").click(function f13() {
        if ($("#t_017_lainnya").is(":checked")) {
          $("#v_23").removeAttr("disabled");
          $("#v_23").removeAttr("disabled");
          $("#v_23").focus();
        } else {
          $("#v_23").attr("disabled", true);
          $("#v_23").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled riwayat penyakit keluarga -->

  <!-- fungsi disabled riwayat ekonomi -->
  <script>
    $(function() {
      fungsi11_disabled();
      $("#t_018_mandiri, #t_018_bpjs").click(fungsi11_disabled);
    });
    $(function() {
      fungsi11_enable();
      $("#t_018_lainnya").click(fungsi11_enable);
    });

    function fungsi11_disabled() {
      if (this.click) {
        $("#v_24").attr("disabled", true);
        $("#v_24").val("");
      } else {
        $("#v_24").removeAttr("disabled");
      }
    }

    function fungsi11_enable() {
      $("#v_24").attr("disabled", true);
      if (this.click) {
        $("#v_24").removeAttr("disabled");
        $("#v_24").focus();
      } else {
        $("#v_24").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled riwayat ekonomi -->

  <!-- fungsi disabled status psikologi -->
  <script type="text/javascript">
    $(function f114() {
      $("input[name='t_021']").click(function f12() {
        if ($("#t_021_lainnya").is(":checked")) {
          $("#v_25").removeAttr("disabled");
          $("#v_25").removeAttr("disabled");
          $("#v_25").focus();
        } else {
          $("#v_25").attr("disabled", true);
          $("#v_25").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled status psikologi -->

  <!-- fungsi disabled tempat tinggal -->
  <script>
    $(function() {
      fungsi12_disabled();
      $("#t_023_rumah, #t_023_panti").click(fungsi12_disabled);
    });
    $(function() {
      fungsi12_enable();
      $("#t_023_lainnya").click(fungsi12_enable);
    });

    function fungsi12_disabled() {
      if (this.click) {
        $("#v_26").attr("disabled", true);
        $("#v_26").val("");
      } else {
        $("#v_26").removeAttr("disabled");
      }
    }

    function fungsi12_enable() {
      $("#v_26").attr("disabled", true);
      if (this.click) {
        $("#v_26").removeAttr("disabled");
        $("#v_26").focus();
      } else {
        $("#v_26").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled tempat tinggal -->

  <!-- fungsi disabled diasuh/dirawat oleh -->
  <script>
    $(function() {
      fungsi13_disabled();
      $("#t_024_orangtua, #t_024_anggota, #t_024_tiri").click(fungsi13_disabled);
    });
    $(function() {
      fungsi13_enable();
      $("#t_024_lainnya").click(fungsi13_enable);
    });

    function fungsi13_disabled() {
      if (this.click) {
        $("#v_27").attr("disabled", true);
        $("#v_27").val("");
      } else {
        $("#v_27").removeAttr("disabled");
      }
    }

    function fungsi13_enable() {
      $("#v_27").attr("disabled", true);
      if (this.click) {
        $("#v_27").removeAttr("disabled");
        $("#v_27").focus();
      } else {
        $("#v_27").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled diasuh/dirawat oleh -->

  <!-- fungsi disabled jenis sekolah -->
  <script>
    $(function() {
      fungsi14_disabled();
      $("#t_025_sekolah").click(fungsi14_disabled);
    });
    $(function() {
      fungsi14_enable();
      $("#t_025_sekolahink").click(fungsi14_enable);
    });

    function fungsi14_disabled() {
      if (this.click) {
        $("#v_28").attr("disabled", true);
        $("#v_28").val("");
      } else {
        $("#v_28").removeAttr("disabled");
      }
    }

    function fungsi14_enable() {
      $("#v_28").attr("disabled", true);
      if (this.click) {
        $("#v_28").removeAttr("disabled");
        $("#v_28").focus();
      } else {
        $("#v_28").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled jenis sekolah -->

  <!-- fungsi disabled penurunan prestasi sekolah -->
  <script>
    $(function() {
      fungsi15_disabled();
      $("#t_026_tidak").click(fungsi15_disabled);
    });
    $(function() {
      fungsi15_enable();
      $("#t_026_ya").click(fungsi15_enable);
    });

    function fungsi15_disabled() {
      if (this.click) {
        $("#v_29").attr("disabled", true);
        $("#v_29").val("");
      } else {
        $("#v_29").removeAttr("disabled");
      }
    }

    function fungsi15_enable() {
      $("#v_29").attr("disabled", true);
      if (this.click) {
        $("#v_29").removeAttr("disabled");
        $("#v_29").focus();
      } else {
        $("#v_29").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled penurunan prestasi sekolah -->

  <!-- fungsi disabled kekerasan fisik -->
  <script>
    $(function() {
      fungsi16_disabled();
      $("#t_027_tidak").click(fungsi16_disabled);
    });
    $(function() {
      fungsi16_enable();
      $("#t_027_pernah").click(fungsi16_enable);
    });

    function fungsi16_disabled() {
      if (this.click) {
        $("#v_30").attr("disabled", true);
        $("#v_30").val("");
      } else {
        $("#v_30").removeAttr("disabled");
      }
    }

    function fungsi16_enable() {
      $("#v_30").attr("disabled", true);
      if (this.click) {
        $("#v_30").removeAttr("disabled");
        $("#v_30").focus();
      } else {
        $("#v_30").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kekerasan fisik -->

  <!-- fungsi disabled kegiatan beribadah -->
  <script>
    $(function() {
      fungsi17_disabled();
      $("#t_030_tidak").click(fungsi17_disabled);
    });
    $(function() {
      fungsi17_enable();
      $("#t_030_kadang").click(fungsi17_enable);
    });

    function fungsi17_disabled() {
      if (this.click) {
        $("#v_31").attr("disabled", true);
        $("#v_31").val("");
      } else {
        $("#v_31").removeAttr("disabled");
      }
    }

    function fungsi17_enable() {
      $("#v_31").attr("disabled", true);
      if (this.click) {
        $("#v_31").removeAttr("disabled");
        $("#v_31").focus();
      } else {
        $("#v_31").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi18_disabled();
      $("#t_030_tidak").click(fungsi18_disabled);
    });
    $(function() {
      fungsi18_enable();
      $("#t_030_selalu").click(fungsi18_enable);
    });

    function fungsi18_disabled() {
      if (this.click) {
        $("#v_31").attr("disabled", true);
        $("#v_31").val("");
      } else {
        $("#v_31").removeAttr("disabled");
      }
    }

    function fungsi18_enable() {
      $("#v_31").attr("disabled", true);
      if (this.click) {
        $("#v_31").removeAttr("disabled");
        $("#v_31").focus();
      } else {
        $("#v_31").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kegiatan beribadah -->

  <!-- fungsi disabled perlu rohaniawan -->
  <script>
    $(function() {
      fungsi19_disabled();
      $("#t_031_tidak").click(fungsi19_disabled);
    });
    $(function() {
      fungsi19_enable();
      $("#t_031_ya").click(fungsi19_enable);
    });

    function fungsi19_disabled() {
      if (this.click) {
        $("#v_32").attr("disabled", true);
        $("#v_32").val("");
      } else {
        $("#v_32").removeAttr("disabled");
      }
    }

    function fungsi19_enable() {
      $("#v_32").attr("disabled", true);
      if (this.click) {
        $("#v_32").removeAttr("disabled");
        $("#v_32").focus();
      } else {
        $("#v_32").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled perlu rohaniawan -->

  <!-- fungsi disabled sklera -->
  <script>
    $(function() {
      fungsi20_disabled();
      $("#t_036_normal, #t_036_ikterus").click(fungsi20_disabled);
    });
    $(function() {
      fungsi20_enable();
      $("#t_036_lainnya").click(fungsi20_enable);
    });

    function fungsi20_disabled() {
      if (this.click) {
        $("#v_42").attr("disabled", true);
        $("#v_42").val("");
      } else {
        $("#v_42").removeAttr("disabled");
      }
    }

    function fungsi20_enable() {
      $("#v_32").attr("disabled", true);
      if (this.click) {
        $("#v_42").removeAttr("disabled");
        $("#v_42").focus();
      } else {
        $("#v_42").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled sklera -->

  <!-- fungsi disabled kelainan pada leher -->
  <script>
    $(function() {
      fungsi21_disabled();
      $("#t_038_tidak").click(fungsi21_disabled);
    });
    $(function() {
      fungsi21_enable();
      $("#t_038_ya").click(fungsi21_enable);
    });

    function fungsi21_disabled() {
      if (this.click) {
        $("#v_43").attr("disabled", true);
        $("#v_43").val("");
      } else {
        $("#v_43").removeAttr("disabled");
      }
    }

    function fungsi21_enable() {
      $("#v_43").attr("disabled", true);
      if (this.click) {
        $("#v_43").removeAttr("disabled");
        $("#v_43").focus();
      } else {
        $("#v_43").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kelainan pada leher -->

  <!-- fungsi disabled kelainan pada dada -->
  <script>
    $(function() {
      fungsi7_disabled();
      $("#t_041_tidak").click(fungsi7_disabled);
    });
    $(function() {
      fungsi7_enable();
      $("#t_041_ya").click(fungsi7_enable);
    });

    function fungsi7_disabled() {
      if (this.click) {
        $("#v_44").attr("disabled", true);
        $("#v_44").val("");
      } else {
        $("#v_44").removeAttr("disabled");
      }
    }

    function fungsi7_enable() {
      $("#v_44").attr("disabled", true);
      if (this.click) {
        $("#v_44").removeAttr("disabled");
        $("#v_44").focus();
      } else {
        $("#v_44").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kelainan pada dada -->

  <!-- fungsi disabled sekret pada dada -->
  <script>
    $(function() {
      fungsi22_disabled();
      $("#t_046_tidak").click(fungsi22_disabled);
    });
    $(function() {
      fungsi22_enable();
      $("#t_046_ada").click(fungsi22_enable);
    });

    function fungsi22_disabled() {
      if (this.click) {
        $("#v_45, #v_46").attr("disabled", true);
        $("#v_45, #v_46").val("");
      } else {
        $("#v_45, #v_46").removeAttr("disabled");
      }
    }

    function fungsi22_enable() {
      $("#v_45, #v_46").attr("disabled", true);
      if (this.click) {
        $("#v_45, #v_46").removeAttr("disabled");
        $("#v_45").focus();
      } else {
        $("#v_45, #v_46").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled sekret pada dada -->

  <!-- fungsi disabled nyeri pada abdomen -->
  <script>
    $(function() {
      fungsi23_disabled();
      $("#t_048_tidak").click(fungsi23_disabled);
    });
    $(function() {
      fungsi23_enable();
      $("#t_048_ya").click(fungsi23_enable);
    });

    function fungsi23_disabled() {
      if (this.click) {
        $("#v_47").attr("disabled", true);
        $("#v_47").val("");
      } else {
        $("#v_47").removeAttr("disabled");
      }
    }

    function fungsi23_enable() {
      $("#v_47").attr("disabled", true);
      if (this.click) {
        $("#v_47").removeAttr("disabled");
        $("#v_47").focus();
      } else {
        $("#v_47").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled nyeri pada abdomen -->

  <!-- fungsi disabled bising usus pada abdomen -->
  <script>
    $(function() {
      fungsi24_disabled();
      $("#t_049_normal").click(fungsi24_disabled);
    });
    $(function() {
      fungsi24_enable();
      $("#t_049_abnormal").click(fungsi24_enable);
    });

    function fungsi24_disabled() {
      if (this.click) {
        $("#v_13").attr("disabled", true);
        $("#v_13").val("");
      } else {
        $("#v_13").removeAttr("disabled");
      }
    }

    function fungsi24_enable() {
      $("#v_47").attr("disabled", true);
      if (this.click) {
        $("#v_13").removeAttr("disabled");
        $("#v_13").focus();
      } else {
        $("#v_13").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled bising usus pada abdomen -->

  <!-- fungsi disabled kelainan pada ekstremitas -->
  <script>
    $(function() {
      fungsi25_disabled();
      $("#t_051_tidak").click(fungsi25_disabled);
    });
    $(function() {
      fungsi25_enable();
      $("#t_051_ya").click(fungsi25_enable);
    })

    function fungsi25_disabled() {
      if (this.click) {
        $("#v_48").attr("disabled", true);
        $("#v_48").val("");
      } else {
        $("#v_48").removeAttr("disabled");
      }
    }

    function fungsi25_enable() {
      $("#v_48").attr("disabled", true);
      if (this.click) {
        $("#v_48").removeAttr("disabled");
        $("#v_48").focus();
      } else {
        $("#v_48").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kelainan pada ekstremitas -->

  <!-- fungsi disabled luka pada kulit -->
  <script>
    $(function() {
      fungsi26_disabled();
      $("#t_058_tidak").click(fungsi26_disabled);
    });
    $(function() {
      fungsi26_enable();
      $("#t_058_ya").click(fungsi26_enable);
    })

    function fungsi26_disabled() {
      if (this.click) {
        $("#v_49").attr("disabled", true);
        $("#v_49").val("");
      } else {
        $("#v_49").removeAttr("disabled");
      }
    }

    function fungsi26_enable() {
      $("#v_49").attr("disabled", true);
      if (this.click) {
        $("#v_49").removeAttr("disabled");
        $("#v_49").focus();
      } else {
        $("#v_49").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled luka pada kulit -->

  <!-- fungsi disabled kelainan pada anus dan genetalia -->
  <script>
    $(function() {
      fungsi27_disabled();
      $("#t_059_tidak").click(fungsi27_disabled);
    });
    $(function() {
      fungsi27_enable();
      $("#t_059_ya").click(fungsi27_enable);
    })

    function fungsi27_disabled() {
      if (this.click) {
        $("#v_51").attr("disabled", true);
        $("#v_51").val("");
      } else {
        $("#v_51").removeAttr("disabled");
      }
    }

    function fungsi27_enable() {
      $("#v_51").attr("disabled", true);
      if (this.click) {
        $("#v_51").removeAttr("disabled");
        $("#v_51").focus();
      } else {
        $("#v_51  ").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kelainan pada anus dan genetalia -->

  <!-- fungsi disabled kesulitan berfanas pada pernafasan -->
  <script>
    $(function() {
      fungsi28_disabled();
      $("#t_060_tidak").click(fungsi28_disabled);
    });
    $(function() {
      fungsi28_enable();
      $("#t_060_ya").click(fungsi28_enable);
    })

    function fungsi28_disabled() {
      if (this.click) {
        $("#t_061").attr("disabled", true);
        $("#t_061").val("");
      } else {
        $("#t_061").removeAttr("disabled");
      }
    }

    function fungsi28_enable() {
      $("#t_061").attr("disabled", true);
      if (this.click) {
        $("#t_061").removeAttr("disabled");
        $("#t_061").focus();
      } else {
        $("#t_061").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled kesulitan berfanas pada pernafasan -->

  <!-- fungsi disabled menggunakan pada pernafasan -->
  <script>
    $(function() {
      fungsi29_disabled();
      $("#t_060_tidak").click(fungsi29_disabled);
    });
    $(function() {
      fungsi29_enable();
      $("#t_060_ya").click(fungsi29_enable);
    });

    function fungsi29_disabled() {
      if (this.click) {
        $("input.hambatan3").attr("disabled", true);
        $("input.hambatan3").prop("checked", false);
      } else {
        $("input.hambatan3").removeAttr("disabled");
      }
    }

    function fungsi29_enable() {
      if (this.click) {
        $("input.hambatan3").removeAttr("disabled");
      } else {
        $("input.hambatan3").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled menggunakan pada pernafasan -->

  <!-- fungsi disabled muntah pada makanan dan minuman -->
  <script>
    $(function() {
      fungsi30_disabled();
      $("#t_074_tidak").click(fungsi30_disabled);
    });
    $(function() {
      fungsi30_enable();
      $("#t_074_ya").click(fungsi30_enable);
    });

    function fungsi30_disabled() {
      if (this.click) {
        $("#v_55, #v_56").attr("disabled", true);
        $("#v_55, #v_56").val("");
      } else {
        $("#v_55, #v_56").removeAttr("disabled");
      }
    }

    function fungsi30_enable() {
      $("#v_55, #v_56").attr("disabled", true);
      if (this.click) {
        $("#v_55, #v_56").removeAttr("disabled");
        $("#v_55").focus();
      } else {
        $("#v_55, #v_56").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled muntah pada makanan dan minuman -->

  <!-- fungsi disabled masalah perkemihan pada eliminasi -->
  <script>
    $(function() {
      fungsi31_disabled();
      $("#t_076_tidakada").click(fungsi31_disabled);
    });
    $(function() {
      fungsi31_enable();
      $("#t_076_ada").click(fungsi31_enable);
    });

    function fungsi31_disabled() {
      if (this.click) {
        $("input.hambatan4").attr("disabled", true);
        $("input.hambatan4").prop("checked", false);
      } else {
        $("input.hambatan4").removeAttr("disabled");
      }
    }

    function fungsi31_enable() {
      if (this.click) {
        $("input.hambatan4").removeAttr("disabled");
      } else {
        $("input.hambatan4").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled masalah perkemihan pada eliminasi -->

  <!-- fungsi disabled masalah defekasi pada eliminasi -->
  <script>
    $(function() {
      fungsi32_disabled();
      $("#t_082_tidakada").click(fungsi32_disabled);
    });
    $(function() {
      fungsi32_enable();
      $("#t_082_ada").click(fungsi32_enable);
    });

    function fungsi32_disabled() {
      if (this.click) {
        $("input.hambatan5").attr("disabled", true);
        $("input.hambatan5").prop("checked", false);

      } else {
        $("input.hambatan5").removeAttr("disabled");
      }
    }

    function fungsi32_enable() {
      if (this.click) {
        $("input.hambatan5").removeAttr("disabled");
        $("#t_077").focus();
      } else {
        $("input.hambatan5").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled masalah defekasi pada eliminasi -->

  <!-- fungsi disabled perdarahan pada eliminasi -->
  <script>
    $(function() {
      fungsi33_disabled();
      $("#t_088_tidak").click(fungsi33_disabled);
    });
    $(function() {
      fungsi33_enable();
      $("#t_088_ya").click(fungsi33_enable);
    });

    function fungsi33_disabled() {
      if (this.click) {
        $("#v_58").attr("disabled", true);
        $("#v_58").val("");
      } else {
        $("#v_58").removeAttr("disabled");
      }
    }

    function fungsi33_enable() {
      $("#v_58").attr("disabled", true);
      if (this.click) {
        $("#v_58").removeAttr("disabled");
        $("#v_58").focus();
      } else {
        $("#v_58").attr("disabled", true);
      }
    }
  </script>
  <!-- fungsi disabled perdarahan pada eliminasi -->

  <!-- fungs disabled mobilisasi -->
  <script>
    $(function() {
      fungsi34_disabled();
      $("#t_092_normal, #t_092_kursiroda, #t_092_dibantu").click(fungsi34_disabled);
    });
    $(function() {
      fungsi34_enable();
      $("#t_092_lainnya").click(fungsi34_enable);
    });

    function fungsi34_disabled() {
      if (this.click) {
        $("#v_60").attr("disabled", true);
        $("#v_60").val("");
      } else {
        $("#v_60").removeAttr("disabled");
      }
    }

    function fungsi34_enable() {
      $("#v_60").attr("disabled", true);
      if (this.click) {
        $("#v_60").removeAttr("disabled");
        $("#v_60").focus();
      } else {
        $("#v_60").attr("disabled", true);
      }
    }
  </script>
  <!-- fungs disabled mobilisasi -->

  <!-- fungsi disabled skrining nyeri -->
  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_093']").click(function f15() {
        if ($("#t_093_ya").is(":checked")) {
          $("#t_094_pain").removeAttr("disabled");
          $("#t_096_wong").removeAttr("disabled");
          $("#v_61").removeAttr("disabled");
          $("#t_098_tumpul").removeAttr("disabled");
          $("#t_098_tajam").removeAttr("disabled");
          $("#t_098_panas").removeAttr("disabled");
          $("#v_62").removeAttr("disabled");
          $("#t_099_tidak").removeAttr("disabled");
          $("#t_099_ya").removeAttr("disabled");
          $("#v_63").removeAttr("disabled");
          $("#t_100_jarang").removeAttr("disabled");
          $("#t_100_hilangtimbul").removeAttr("disabled");
          $("#t_100_terusmenerus").removeAttr("disabled");
          $("#v_64").removeAttr("disabled");
        } else {
          $("#t_094_pain").attr("disabled", true);
          $("#t_094_pain").prop("checked", false);
          $("#t_095_rangepain").attr("disabled", true);
          $("#t_095_rangepain").prop("checked", false);
          $("#t_095_rangepain").val("0");
          $("#t_096_wong").attr("disabled", true);
          $("#t_096_wong").prop("checked", false);
          $("#t_097_rangewong").attr("disabled", true);
          $("#t_097_rangewong").prop("checked", false);
          $("#t_097_rangewong").val("0");
          $("#v_61").attr("disabled", true);
          $("#v_61").val("");
          $("#t_098_tumpul").attr("disabled", true);
          $("#t_098_tumpul").prop("checked", false);
          $("#t_098_tajam").attr("disabled", true);
          $("#t_098_tajam").prop("checked", false);
          $("#t_098_panas").attr("disabled", true);
          $("#t_098_panas").prop("checked", false);
          $("#v_62").attr("disabled", true);
          $("#v_62").val("");
          $("#t_099_tidak").attr("disabled", true);
          $("#t_099_tidak").prop("checked", false);
          $("#t_099_ya").attr("disabled", true);
          $("#t_099_ya").prop("checked", false);
          $("#v_63").attr("disabled", true);
          $("#v_63").val("");
          $("#t_100_jarang").attr("disabled", true);
          $("#t_100_jarang").prop("checked", false);
          $("#t_100_hilangtimbul").attr("disabled", true);
          $("#t_100_hilangtimbul").prop("checked", false);
          $("#t_100_terusmenerus").attr('disabled', true);
          $("#t_100_terusmenerus").prop("checked", false);
          $("#v_64").attr("disabled", true);
          $("#v_64").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_094']").click(function f15() {
        if ($("#t_094_pain").is(":checked")) {
          $("#t_095_rangepain").removeAttr("disabled");
        } else {
          $("#t_095_rangepain").attr("disabled", true);
          $("#t_095_rangepain").prop("checked", false);
          $("#t_095_rangepain").val("0");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_096']").click(function f15() {
        if ($("#t_096_wong").is(":checked")) {
          $("#t_097_rangewong").removeAttr("disabled");
        } else {
          $("#t_097_rangewong").attr("disabled", true);
          $("#t_097_rangewong").prop("checked", false);
          $("#t_097_rangewong").val("0");
        }
      });
    });
  </script>
  <!-- fungsi disabled skrining nyeri -->

  <!-- fungsi disabled nyeri hilang lainnya -->
  <script type="text/javascript">
    $(function f16() {
      $("input[name='t_103']").click(function f16() {
        if ($("#t_103_lainnya").is(":checked")) {
          $("#v_65").removeAttr("disabled");
          $("#v_65").focus();
        } else {
          $("#v_65").attr("disabled", true);
          $("#v_65").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled nyeri hilang lainnya -->

  <!-- sum1 -->
  <script>
    $(function() {
      $('input.jumlah').click(function() {

        var nilai1 = parseInt($('input[name="t_106"]:checked').val());
        var nilai2 = parseInt($('input[name="t_107"]:checked').val());

        if (isNaN(nilai1)) {
          nilai1 = 0;
        }

        if (isNaN(nilai2)) {
          nilai2 = 0;
        }

        $('#t_108').val(nilai1 + nilai2);
      });
    });
  </script>
  <!-- sum1 -->

  <!-- fungsi disabled pasien dengan diagnosa khusus -->
  <script type="text/javascript">
    $(function f17() {
      $("input[name='t_109']").click(function f17() {
        if ($("#t_109_ya").is(":checked")) {
          $("#t_110_dm").removeAttr("disabled");
          $("#t_111_ginjal").removeAttr("disabled");
          $("#t_112_hati").removeAttr("disabled");
          $("#t_113_paru").removeAttr("disabled");
          $("#t_114_stroke").removeAttr("disabled");
          $("#t_115_kanker").removeAttr("disabled");
          $("#t_116_geriatri").removeAttr("disabled");
          $("#t_117_jantung").removeAttr("disabled");
          $("#t_118_lainnya").removeAttr("disabled");
          $("#t_119_imun").removeAttr("disabled");
        } else {
          $("#t_110_dm").attr("disabled", true);
          $("#t_110_dm").prop("checked", false);
          $("#t_111_ginjal").attr("disabled", true);
          $("#t_111_ginjal").prop("checked", false);
          $("#t_112_hati").attr("disabled", true);
          $("#t_112_hati").prop("checked", false);
          $("#t_113_paru").attr("disabled", true);
          $("#t_113_paru").prop("checked", false);
          $("#t_114_stroke").attr("disabled", true);
          $("#t_114_stroke").prop("checked", false);
          $("#t_115_kanker").attr("disabled", true);
          $("#t_115_kanker").prop("checked", false);
          $("#t_116_geriatri").attr("disabled", true);
          $("#t_116_geriatri").prop("checked", false);
          $("#t_117_jantung").attr("disabled", true);
          $("#t_117_jantung").prop("checked", false);
          $("#t_118_lainnya").attr("disabled", true);
          $("#t_118_lainnya").prop("checked", false);
          $("#t_119_imun").attr("disabled", true);
          $("#t_119_imun").prop("checked", false);
          $("#v_66").attr("disabled", true);
          $("#v_66").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f17() {
      $("input[name='t_118']").click(function f17() {
        if ($("#t_118_lainnya").is(":checked")) {
          $("#v_66").removeAttr("disabled");
          $("#v_66").focus();
        } else {
          $("#v_66").attr("disabled", true);
          $("#v_66").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled pasien dengan diagnosa khusus -->

  <!-- sum2 -->
  <script>
    $(function() {
      $('input.jumlah2').click(function() {

        var nilai3 = parseInt($('input[name="t_125"]:checked').val());
        var nilai4 = parseInt($('input[name="t_126"]:checked').val());
        var nilai5 = parseInt($('input[name="t_127"]:checked').val());
        var nilai6 = parseInt($('input[name="t_128"]:checked').val());
        var nilai7 = parseInt($('input[name="t_129"]:checked').val());
        var nilai8 = parseInt($('input[name="t_130"]:checked').val());

        if (isNaN(nilai3)) {
          nilai3 = 0;
        }

        if (isNaN(nilai4)) {
          nilai4 = 0;
        }

        if (isNaN(nilai5)) {
          nilai5 = 0;
        }

        if (isNaN(nilai6)) {
          nilai6 = 0;
        }

        if (isNaN(nilai7)) {
          nilai7 = 0;
        }

        if (isNaN(nilai8)) {
          nilai8 = 0;
        }

        $('#t_107').val(nilai3 + nilai4 + nilai5 + nilai6 + nilai7 + nilai8);
      });
    });
  </script>
  <!-- sum2 -->

  <!-- fungsi disabled hamabatan pembelajaran  -->
  <script type="text/javascript">
    $(function f18() {
      $("input[name='t_132']").click(function f18() {
        if ($("#t_132_ya").is(":checked")) {
          $("#t_133_pendengaran").removeAttr("disabled");
          $("#t_134_penglihatan").removeAttr("disabled");
          $("#t_135_kognitif").removeAttr("disabled");
          $("#t_136_emosi").removeAttr("disabled");
          $("#t_137_budaya").removeAttr("disabled");
          $("#t_138_bahasa").removeAttr("disabled");
          $("#t_139_lainnya").removeAttr("disabled");
        } else {
          $("#t_133_pendengaran").attr("disabled", true);
          $("#t_133_pendengaran").prop("checked", false);
          $("#t_134_penglihatan").attr("disabled", true);
          $("#t_134_penglihatan").prop("checked", false);
          $("#t_135_kognitif").attr("disabled", true);
          $("#t_135_kognitif").prop("checked", false);
          $("#t_136_emosi").attr("disabled", true);
          $("#t_136_emosi").prop("checked", false);
          $("#t_137_budaya").attr("disabled", true);
          $("#t_137_budaya").prop("cheked", false);
          $("#t_138_bahasa").attr("disabled", true);
          $("#t_138_bahasa").prop("checked", false);
          $("#t_139_lainnya").attr("disabled", true);
          $("#t_139_lainnya").prop("checked", false);
          $("#v_34").attr("disabled", true);
          $("#v_34").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f18() {
      $("input[name='t_139']").click(function f18() {
        if ($("#t_139_lainnya").is(":checked")) {
          $("#v_34").removeAttr("disabled");
          $("#v_34").focus();
        } else {
          $("#v_34").attr("disabled", true);
          $("#v_34").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled hamabatan pembelajaran  -->

  <!-- fungsi disabled edukasi yang diperlukan -->
  <script type="text/javascript">
    $(function f19() {
      $("input[name='t_148']").click(function f19() {
        if ($("#t_148_lainnya").is(":checked")) {
          $("#v_69").removeAttr("disabled");
          $("#v_69").focus();
        } else {
          $("#v_69").attr("disabled", true);
          $("#v_69").val("");
        }
      });
    });
  </script>
  <!-- fungsi disabled edukasi yang diperlukan -->

  <!-- fungsi disabled dirujuk ke skrining perencanaan -->
  <script type="text/javascript">
    $(function f20() {
      $("input[name='t_159']").click(function f20() {
        if ($("#t_159_dirujuk").is(":checked")) {
          $("#v_70").removeAttr("disabled");
          $("#v_70").focus();
        } else {
          $("#v_70").attr("disabled", true);
          $("#v_70").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f21() {
      $("input[name='t_159']").click(function f21() {
        if ($("#t_159_dirujuk").is(":checked")) {
          $("#t_160_ya").removeAttr("disabled");
          $("#t_160_tidak").removeAttr("disabled");
        } else {
          $("#t_160_ya").attr("disabled", true);
          $("#t_160_ya").prop("checked", false);
          $("#t_160_tidak").attr("disabled", true);
          $("#t_160_tidak").prop("checked", false);
        }
      })
    })
  </script>
  <!-- fungsi disabled dirujuk ke skrining perencanaan -->

  <!-- fungsi decimal -->
  <script>
    $("#TENSION_UPPER, #TENSION_BELOW, #NADI, #NAFAS, #SATURASI, #TEMPERATURE, #WEIGHT, #HEIGHT").keydown(function(e) {
      !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
    });
  </script>
  <!-- fungsi decimal -->

  <!-- back & save css -->
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
  <div class="container mt-3">
    <a class="btn  mb-5" href="<?= site_url('home/index') ?>"><i class="fa fa-arrow-left"></i></a>
    <table class="table table-bordered mb-0" style="border:1px solid black;">
      <tr>
        <td class="text-center">
          <h4>PENGKAJIAN AWAL KEPERAWATAN DAN MEDIS<br>PASIEN RAWAT INAP DEWASA</h4>
          <h5>(Formulir harus dilengkapi dalam waktu 24 jam pertama pasien masuk rawat inap)</h5>
        </td>
        <form action="<?= site_url('addform/add_aksi') ?>" method="post">
          <td>
            <div class="row align-items-center">
              <div class="col-5">
                <label>No.RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="no_Registration" id="no_Registration" value="" readonly>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME; ?>" readonly>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="" readonly>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-5">
                <label>NIK</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thenik" id="thenik" value="" readonly>
              </div>
            </div>
          </td>
      </tr>
    </table>
    <table class="table table-bordered mb-0" style="border:1px solid black;">
      <tr>
        <td class="text-center" style="background-color: tan;">
          <h5><b>PENGKAJIAN KEPERAWATAN</b></h5>
        </td>
      </tr>
    </table>
    <table class="table table-bordered mb-0" style="border:1px solid black;">
      <tr>
        <td colspan="2">
          <div class="row align-items-center mb-3">
            <div class="col-2">
              <label>Masuk Ruang Rawat :</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="room_id" id="room_id" readonly>
            </div>
            <div class="col-1">
              <label>Kelas</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="class_room_id" id="class_room_id" readonly>
            </div>
            <div class="col-1">
              <label>Tanggal/Jam</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="datetime-local" name="examination_date" id="examination_date" readonly>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-2 align-items-center">
                <label>Sumber Data :</label>
              </div>
              <div class="col-md-2">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_pasien" name="t_01" value="1">
                      <label class="form-check-label" for="t_01_pasien">Pasien</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_keluarga" name="t_01" value="2">
                      <label class="form-check-label" for="t_01_keluarga">Keluarga</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_lainnya" name="t_01" value="3">
                      <label class="form-check-label" for="t_01_lainnya">Lainnya</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="v_08" id="v_08">
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mb-2">
              <label>Identitas Pasien</label>
            </div>
            <div class="row align-items-center">
              <div class="col-2">
                <label>Agama :</label>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_islam" name="t_02" value="1">
                      <label class="form-check-label" for="t_02_islam">Islam</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_protestan" name="t_02" value="2 ">
                      <label class="form-check-label" for="t_02_protestan">Protestan</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_katholik" name="t_02" value="3">
                      <label class="form-check-label" for="t_02_katholik">Katholik</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_lainnya" name="t_02" value="7">
                      <label class="form-check-label" for="t_02_lainnya">Lainnya</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="v_09" id="v_09">
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center  mb-3">
              <div class="col-2"></div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_hindu" name="t_02" value="4">
                      <label class="form-check-label" for="t_02_hindu">Hindu</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_budha" name="t_02" value="5">
                      <label class="form-check-label" for="t_02_budha">Budha</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_konghucu" name="t_02" value="6">
                      <label class="form-check-label" for="t_02_konghucu">Konghucu</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-2">
                <label>Pendidikan :</label>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_sd" name="t_03" value="1">
                      <label class="form-check-label" for="t_03_sd">SD</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_smp" name="t_03" value="2">
                      <label class="form-check-label" for="t_03_smp">SMP</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_sma" name="t_03" value="3">
                      <label class="form-check-label" for="t_03_sma">SMA</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_lainnya" name="t_03" value="8">
                      <label class="form-check-label" for="t_03_lainnya">Lainnya</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="v_10" id="v_10">
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-2"></div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_diploma" name="t_03" value="4">
                      <label class="form-check-label" for="t_03_diploma">Diploma</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s1" name="t_03" value="5">
                      <label class="form-check-label" for="t_03_s1">S1</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s2" name="t_03" value="6">
                      <label class="form-check-label" for="t_03_s2">S2</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s3" name="t_03" value="7">
                      <label class="form-check-label" for="t_03_s3">S3</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <tr>
        <td>
          <h5><b>KELUHAN UTAMA:</b></h5>
        </td>
        <td width="70%">
          <textarea class="form-control" name="anamnase" id="anamnase" cols="6" rows="2" readonly></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <h5><b>KELUHAN SAAT INI:</b></h5>
        </td>
        <td width="70%">
          <textarea class="form-control" name="v_12" id="v_12" cols="6" rows="3"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <h5><b>RIWAYAT KESEHATAN YANG LALU:</b></h5>
        </td>
        <td width="70%">
          <div class="row align-items-center">
            <div class="col-4">
              <label>a.</label>
              <label>Riwayat MRS sebelumnya ? :</label>
            </div>
            <div class="col-md-1">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_04_tidak" name="t_04" value="1">
                    <label class="form-check-label" for="t_04_tidak">Tidak</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_04_ya" name="t_04" value="2">
                    <label class="form-check-label" for="t_04_ya">Ya,lamanya</label>
                  </div>
                </div>
                <div class="col-4">
                  <input class="form-control" type="text" name="t_05" id="t_05">
                </div>
                <div class="col-1">
                  <label>hr,</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-4">
              <label>alasan:</label>
            </div>
            <div class="col-4">
              <input class="form-control" type="text" name="v_14" id="v_14">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-4">
              <label>b.</label>
              <label>Riwayat dioperasi ? :</label>
            </div>
            <div class="col-md-1">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_06_tidak" name="t_06" value="1">
                    <label class="form-check-label" for="t_06_tidak">Tidak</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_06_ya" name="t_06" value="2">
                    <label class="form-check-label" for="t_06_ya">Ya,jenisnya</label>
                  </div>
                </div>
                <div class="col-7">
                  <input class="form-control" type="text" name="v_15" id="v_15">
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5><b>RIWAYAT MINUM OBAT</b></h5>
          <p>
            (termasuk obat yang masih digunakan saat ini)
          </p>
        </td>
        <td>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_07_tidak" name="t_07" value="1">
                    <label class="form-check-label" for="t_07_tidak">Tidak ada</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-9">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_07_ada" name="t_07" value="2">
                    <label class="form-check-label" for="t_07_ada">Ada, nama obat dan dosis</label>
                  </div>
                </div>
                <div class="col-5">
                  <input class="form-control" type="text" name="riwayat_obat" id="riwayat_obat">
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      </td>
      </tr>
    </table>
    <table class="table table-bordered mb-0" style="border: 1px solid black;">
      <tr>
        <td class="text-center" colspan="2">
          <h5><b>RIWAYAT ALERGI</b></h5>
          <div class="row align-items-center">
            <div class="col-6">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_08_tidak" name="t_08" value="1">
                    <label class="form-check-label" for="t_08_tidak">Tidak</label>
                  </div>
                </div>
                <div class="col-2">
                  <input class="form-check-input" type="radio" id="t_08_ya" name="t_08" value="2">
                  <label class="form-check-label" for="t_08_ya">Ya</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-8">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="form-check">
                    <input class="form-check-input " type="checkbox" id="t_09_alergiobat" name="t_09" disabled="disabled" value="1">
                    <label class="form-check-label" for="t_09_alergiobat">Alergi obat, sebutkan</label>
                  </div>
                </div>
                <div class="col-3">
                  <input class="form-control " type="text" name="v_17" id="v_17" disabled="disabled">
                </div>
                <div class="col-1">
                  <label>Reaksi</label>
                </div>
                <div class="col-4">
                  <input class="form-control " type="text" name="v_18" id="v_18" disabled="disabled">
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-8">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="form-check">
                    <input class="form-check-input " type="checkbox" id="t_010_alergimakanan" name="t_010" disabled="disabled" value="2">
                    <label class="form-check-label" for="t_010_alergimakanan">&nbsp;&nbsp;&nbsp;&nbsp;Alergi makanan, sebutkan</label>
                  </div>
                </div>
                <div class="col-3">
                  <input class="form-control " type="text" name="v_19" id="v_19" disabled="disabled">
                </div>
                <div class="col-1">
                  <label>Reaksi</label>
                </div>
                <div class="col-4">
                  <input class="form-control " type="text" name="v_20" id="v_20" disabled="disabled">
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-8">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <div class="form-check">
                    <input class="form-check-input " type="checkbox" id="t_011_alergilainnya" name="t_011" disabled="disabled" value="3">
                    <label class="form-check-label" for="t_011_alergilainnya">&nbsp;&nbsp;&nbsp;&nbsp;Alergi lainnya, sebutkan</label>
                  </div>
                </div>
                <div class="col-3" disabled="disabled">
                  <input class="form-control" type="text" name="v_21" id="v_21" disabled="disabled">
                </div>
                <div class="col-1">
                  <label>Reaksi</label>
                </div>
                <div class="col-4" disabled="disabled">
                  <input class="form-control " type="text" name="v_22" id="v_22" disabled="disabled">
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-9">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_08_tidakdik" name="t_08" value="2">
                    <label class="form-check-label" for="t_08_tidakdik">Tidak diketahui</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="30%">
          <h5><b>RIWAYAT PENYAKIT KELUARGA</b></h5>
        </td>
        <td width="70%">
          <div class="row align-items-center">
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_012_tidak" name="t_012" value="1">
                    <label class="form-check-label" for="t_012_tidak">Tidak ada</label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_012_ada" name="t_012" value="2">
                    <label class="form-check-label" for="t_012_ada">Ada</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_013_jantung" name="t_013" disabled="disabled" value="1">
                    <label class="form-check-label" for="t_013_jantung">Jantung</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_014_asma" name="t_014" disabled="disabled" value="2">
                    <label class="form-check-label" for="t_014_asma">Asma</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_015_dm" name="t_015" disabled="disabled" value="3">
                    <label class="form-check-label" for="t_015_dm">DM</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_016_hipertensi" name="t_016" disabled="disabled" value="4">
                    <label class="form-check-label" for="t_016_hipertensi">Hipertensi</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input  " type="checkbox" id="t_017_lainnya" name="t_017" disabled="disabled" value="5">
                    <label class="form-check-label" for="t_017_lainnya">Lainnya</label>
                  </div>
                </div>
                <div class="col-7">
                  <input class="form-control" type="text" name="v_23" id="v_23" disabled="disabled">
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
    <table class="table table-bordered" style="border: 1px solid black;">
      <tr>
        <td>
          <h5 class="text-center"><b>RIWAYAT EKONOMI</b></h5>
          <div class="row align-items-center">
            <h6><b>Status Ekonomi</b></h6>
          </div>
          <div class="row align-items-center">
            <div class="col-3">
              <h6>Jaminan kesehatan yang digunakan :</h6>
            </div>
            <div class="col-md-1">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_018_mandiri" name="t_018" value="Mandiri">
                    <label class="form-check-label" for="t_018_mandiri">Mandiri</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-1">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_018_bpjs" name="t_018" value="BPJS">
                    <label class="form-check-label" for="t_018_bpjs">BPJS</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_018_lainnya" name="t_018" value="Lainnya">
                    <label class="form-check-label" for="t_018_lainnya">Lainnya</label>
                  </div>
                </div>
                <div class="col-6">
                  <input class="form-control" type="text" name="v_24" id="v_24">
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <h5><b>PSIKO-SOSIAL-SPIRITUAL</b></h5>
        </td>
      </tr>
      <tr>
        <td>
          <h6><b>Status Psikologis</b></h6>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_019_tenang" name="t_019">
                    <label class="form-check-label" for="t_019_tenang">Tenang, kooperatif</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_020_kejiwaan" name="t_020">
                    <label class="form-check-label" for="t_020_kejiwaan">Kejiwaan; gelisah, murung, ketakutan</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="t_021_lainnya" name="t_021">
                <input class="form-control" type="text" name="v_25" id="v_25" disabled="disabled">
              </div>
            </div>
            <div class="col-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="t_022_perubahan" name="t_022">
                <label class="form-check-label" for="t_022_perubahan">Perubahan suasana hati, gangguan tidur, sulit berpikir</label>
              </div>
            </div>
          </div>

          <hr>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Status Sosial</b></label>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3">
              <div>
                <label>Tempat tinggal :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_023_rumah" name="t_023" value="1">
              <label class="form-check-label" for="t_023_rumah">Rumah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_023_lainnya" name="t_023" value="3">
              <label class="form-check-label" for="t_023_lainnya">Lain-lain, sebutkan</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_26" id="v_26">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_023_panti" name="t_023" value="2">
              <label class="form-check-label" for="t_023_panti">Panti</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Diasuh/dirawat oleh :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_024_orangtua" name="t_024" value="1">
              <label class="form-check-label" for="t_024_orangtua">Orang tua kandung</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_024_anggota" name="t_024" value="2">
              <label class="form-check-label" for="t_024_anggota">Anggota keluarga lain</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_024_tiri" name="t_024" value="3">
              <label class="form-check-label" for="t_024_tiri">Bapak/ibu tiri</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_024_lainnya" name="t_024" value="4 ">
              <label class="form-check-label" for="t_024_lainnya">Lain-lain,</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_27" id="v_27">
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Jenis sekolah :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_025_sekolah" name="t_025" value="1">
              <label class="form-check-label" for="t_025_sekolah">Sekolah umum</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_025_sekolahink" name="t_025" value="3">
              <label class="form-check-label" for="t_025_sekolahink">Sekolah inklusi</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_28" id="v_28">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_025_tidak" name="t_025" value="2">
              <label class="form-check-label" for="t_025_tidak">Tidak sekolah</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Penurunan prestasi sekolah :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_026_tidak" name="t_026" value="1">
              <label class="form-check-label" for="t_026_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_026_ya" name="t_026" value="2">
              <label class="form-check-label" for="t_026_ya">Ya,Jelaskan</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_29" id="v_29">
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Kekerasan fisik :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_027_tidak" name="t_027" value="1">
              <label class="form-check-label" for="t_027_tidak">Tidak pernah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_027_pernah" name="t_027" value="2">
              <label class="form-check-label" for="t_027_pernah">Pernah,Jelaskan</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_30" id="v_30">
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Pernah melanggar hukum :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_028_ya" name="t_028" value="1">
              <label class="form-check-label" for="t_028_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_028_tidak" name="t_028" value="2">
              <label class="form-check-label" for="t_028_tidak">Tidak</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Penelantaran fisik/mental :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_029_pernah" name="t_029" value="1">
              <label class="form-check-label" for="t_029_pernah">Pernah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_029_tidak" name="t_029" value="2">
              <label class="form-check-label" for="t_029_tidak">Tidak</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Spiritual</b></label>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3">
              <div>
                <label>Kegiatan beribadah :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_selalu" name="t_030" value="1">
              <label class="form-check-label" for="t_030_selalu">Selalu</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_kadang" name="t_030" value="2">
              <label class="form-check-label" for="t_030_kadang">Kadang</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-4">
              <label>Kegiatan keagamaan yang dilakukan,</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_31" id="v_31">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_tidak" name="t_030" value="3">
              <label class="form-check-label" for="t_030_tidak">Tidak pernah</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Perlu rohaniawan :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_031_tidak" name="t_031" value="Tidak">
              <label class="form-check-label" for="t_031_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_031_ya" name="t_031" value="Ya">
              <label class="form-check-label" for="t_031_ya">Ya,Jelaskan</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_32" id="v_32">
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-3">
              <div>
                <label>Nilai-nilai kepercayaan/keyakinan<br>tertentu terkait kondisi pasien :</label>
              </div>
            </div>
            <div class="col-4">
              <input class="form-control" type="text" name="v_33" id="v_33">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <h5><b>PEMERIKSAAN FISIK</b></h5>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Kesadaran :</b></label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_032_composmentis" name="t_032" value="1">
              <label class="form-check-label" for="t_032_composmentis">Compos mentis</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_032_apatis" name="t_032" value="2">
              <label class="form-check-label" for="t_032_apatis">Apatis</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_032_coma" name="t_032" value="3">
              <label class="form-check-label" for="t_032_coma">Coma</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_032_somolen" name="t_032" value="4">
              <label class="form-check-label" for="t_032_somolen">Somnolen</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_032_soporocoma" name="t_032" value="5">
              <label class="form-check-label" for="t_032_soporocoma">Soporocoma</label>
            </div>
          </div>
          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-4">
              <div class="col-5">
                <label><b>Tanda-tanda vital :</b></label>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Suhu</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="temperature" id="temperature" readonly>
            </div>
            <div class="col-1">
              <label>°C</label>
            </div>
          </div>


          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Pernafasan</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="nafas" id="nafas" readonly>
            </div>
            <div class="col-2">
              <label>x/menit</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Nadi</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="nadi" id="nadi" readonly>
            </div>
            <div class="col-2">
              <label>x/menit</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Tekanan Darah</label>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <input class="form-control" type="text" name="tension_upper" id="tension_upper" readonly>
                </div>
                <div class="col-md-1">
                  <label>/</label>
                </div>
                <div class="col-md-3">
                  <input class="form-control" type="text" name="tension_bellow" id="tension_bellow" readonly>
                </div>
                <div class="col-md-2">
                  <label>mmHg</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Berat Badan</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="weight" id="weight" readonly>
            </div>
            <div class="col-2">
              <label>Kg</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Tinggi Badan</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="height" id="height" readonly>
            </div>
            <div class="col-2">
              <label>cm</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-8">
              <div class="col-7">
                <label><b>PEMERIKSAAN FISIK (Head To Toe)</b></label>
              </div>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Kepala :</b></label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_033_normosefali" name="t_033" value="1">
              <label class="form-check-label" for="t_033_normosefali">Normosefali</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_033_mikrosefali" name="t_033" value="2">
              <label class="form-check-label" for="t_033_mikrosefali">Mikrosefali</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_033_hidrosefali" name="t_033" value="3">
              <label class="form-check-label" for="t_033_hidrosefali">Hidrosefali</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Lingkar kepala</label>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-md-3">
                  <input class="form-control" type="text" name="head" id="head" readonly>
                </div>
                <div class="col-md-1">
                  <label>cm</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Ubun-ubun</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_034" id="t_034">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Mata :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Konjungtiva:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_035_merahmuda" name="t_035" value="1">
              <label class="form-check-label" for="t_035_merahmuda">Merah muda</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_035_pucat" name="t_035" value="2">
              <label class="form-check-label" for="t_035_pucat">Pucat</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Sklera:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_036_normal" name="t_036" value="1">
              <label class="form-check-label" for="t_036_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_036_ikterus" name="t_036" value="2">
              <label class="form-check-label" for="t_036_ikterus">Ikterus,</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" name="t_036" id="t_036_lainnya" value="3">
              <label class="form-check-label" for="t_036_lainnya">Lain-lain</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_42" id="v_42">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Leher :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Bentuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_037_normal" name="t_037" value="1">
              <label class="form-check-label" for="t_037_normal">Normal</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan2" type="radio" id="t_038_tidak" name="t_038" value="1">
              <label class="form-check-label" for="t_038_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input hambatan2" type="radio" id="t_038_ya" name="t_038" value="2">
              <label class="form-check-label" for="t_038_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_43" id="v_43">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Pembesaran vena jugularis:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_039_tidak" name="t_039" value="1">
              <label class="form-check-label" for="t_039_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_039_ya" name="t_039" value="2">
              <label class="form-check-label" for="t_039_ya">Ya</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Dada :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Bentuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_040_simetris" name="t_040" value="1">
              <label class="form-check-label" for="t_040_simetris">Simetris</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_041_tidak" name="t_041" value="1">
              <label class="form-check-label" for="t_041_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_041_ya" name="t_041" value="2">
              <label class="form-check-label" for="t_041_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_44" id="v_44">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Irama nafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_042_reguler" name="t_042" value="1">
              <label class="form-check-label" for="t_042_reguler">Reguler</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_042_irreguler" name="t_042" value="2">
              <label class="form-check-label" for="t_042_irreguler">Irreguler</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_042_apnea" name="t_042" value="3">
              <label class="form-check-label" for="t_042_apnea">Apnea</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Suara Nafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_043_normal" name="t_043" value="1">
              <label class="form-check-label" for="t_043_normal">Normal</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Wheezing:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_044_tidak" name="t_044" value="1">
              <label class="form-check-label" for="t_044_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_044_ya" name="t_044" value="2">
              <label class="form-check-label" for="t_044_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3 ">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Batuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_045_tidak" name="t_045" value="1">
              <label class="form-check-label" for="t_045_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_045_ya" name="t_045" value="2">
              <label class="form-check-label" for="t_045_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Sekret:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_046_tidak" name="t_046" value="1">
              <label class="form-check-label" for="t_046_tidak">Tidak ada</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_046_ada" name="t_046" value="2">
              <label class="form-check-label" for="t_046_ada">Ada</label>
            </div>
            <div class="col-md-4">
              <div class="col-2">
                <label>Warna/jumlah</label>
              </div>
              <div class="col-3">
                <input class="form-control" type="text" name="v_45" id="v_45" placeholder="warna">
              </div>

              <div class="col-3">
                <input class="form-control" type="text" name="v_46" id="v_46" placeholder="jumlah">
              </div>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Abdomen :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Kembung:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_047_tidak" name="t_047" value="1">
              <label class="form-check-label" for="t_047_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_047_ya" name="t_047" value="2">
              <label class="form-check-label" for="t_047_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Nyeri:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_048_tidak" name="t_048" value="1">
              <label class="form-check-label" for="t_048_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_048_ya" name="t_048" value="2">
              <label class="form-check-label" for="t_048_ya">Ya</label>
            </div>
            <div class="col-1">
              <label>Lokasi</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_47" id="v_47">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Bising usus:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_049_normal" name="t_049" value="1">
              <label class="form-check-label" for="t_049_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_049_abnormal" name="t_049" value="2">
              <label class="form-check-label" for="t_049_abnormal">Abnormal</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_13" id="v_13">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Ekstremitas :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Akral:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_050_hangat" name="t_050" value="1">
              <label class="form-check-label" for="t_050_hangat">Hangat</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_050_dingin" name="t_050" value="2">
              <label class="form-check-label" for="t_050_dingin">Dingin</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_051_tidak" name="t_051" value="1">
              <label class="form-check-label" for="t_051_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_051_ya" name="t_051" value="2">
              <label class="form-check-label" for="t_051_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_48" id="v_48">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Pergerakan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_052_aktif" name="t_052" value="1">
              <label class="form-check-label" for="t_052_aktif">Aktif</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_052_pasif" name="t_052" value="2">
              <label class="form-check-label" for="t_052_pasif">Pasif</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kekuatan otot:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_kuat" name="t_053" value="1">
              <label class="form-check-label" for="t_053_kuat">Kuat</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_lemah" name="t_053" value="2">
              <label class="form-check-label" for="t_053_lemah">Lemah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_tidakada" name="t_053" value="3">
              <label class="form-check-label" for="t_053_tidakada">Tidak ada</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kontraktur:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_054_tidak" name="t_054" value="1">
              <label class="form-check-label" for="t_054_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_054_ya" name="t_054" value="2">
              <label class="form-check-label" for="t_054_ya">Ya</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Kulit :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Warna:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_055_normal" name="t_055" value="1">
              <label class="form-check-label" for="t_055_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_055_ikterus" name="t_055" value="2">
              <label class="form-check-label" for="t_055_ikterus">Ikterus</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_055_sianosis" name="t_055" value="3">
              <label class="form-check-label" for="t_055_sianosis">Sianosis</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Membran mukosa:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_056_lembab" name="t_056" value="1">
              <label class="form-check-label" for="t_056_lembab">Lembab</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_056_kering" name="t_056" value="2">
              <label class="form-check-label" for="t_056_kering">Kering</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_056_stomatitis" name="t_056" value="3">
              <label class="form-check-label" for="t_056_stomatitis">Stomatitis</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Hematome:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_057_tidak" name="t_057" value="1">
              <label class="form-check-label" for="t_057_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_057_ya" name="t_057" value="2">
              <label class="form-check-label" for="t_057_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Luka:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_058_tidak" name="t_058" value="1">
              <label class="form-check-label" for="t_058_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_058_ya" name="t_058" value="2">
              <label class="form-check-label" for="t_058_ya">Ya</label>
            </div>
            <div class="col-1">
              <label>Lokasi</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_49" id="v_49">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Lain-lain</label>
            </div>
            <div class="col-5">
              <input class="form-control" type="text" name="v_50" id="v_50">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-8">
                <label><b>Anus dan Genetalia :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_059_tidak" name="t_059" value="1">
              <label class="form-check-label" for="t_059_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_059_ya" name="t_059" value="2">
              <label class="form-check-label" for="t_059_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_51" id="v_51">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-8">
              <div class="col-4">
                <label><b>DATA BIOLOGIS</b></label>
              </div>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Pernafasan :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Kesulitan bernafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_060_tidak" name="t_060" value="1">
              <label class="form-check-label" for="t_060_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_060_ya" name="t_060" value="2">
              <label class="form-check-label" for="t_060_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-3">
              </div>
            </div>
            <div class="col-2">
              <label>Memakai:</label>
            </div>
            <div class="col-1">
              <label>O2</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_061" id="t_061">
            </div>
            <div class="col-1">
              <label>lt/menit</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Menggunakan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_062_nasalcanule" name="t_062" value="1">
              <label class="form-check-label" for="t_062_nasalcanule">Nasal canule</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_063_sungkup" name="t_063" value="2">
              <label class="form-check-label" for="t_063_sungkup">Sungkup</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_064_rebrethingmask" name="t_064" value="3">
              <label class="form-check-label" for="t_064_rebrethingmask">Re-breathing mask</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_065_headbox" name="t_065" value="4">
              <label class="form-check-label" for="t_065_headbox">Head box</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-9">
                <label><b>Makanan dan Minuman :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Nafsu makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_066_baik" name="t_066" value="1">
              <label class="form-check-label" for="t_066_baik">Baik</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_066_tidak" name="t_066" value="2">
              <label class="form-check-label" for="t_066_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Jenis makanan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_067_bubur" name="t_067" value="1">
              <label class="form-check-label" for="t_067_bubur">Bubur</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_068_nasi" name="t_068" value="2">
              <label class="form-check-label" for="t_068_nasi">Nasi</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_069_susu" name="t_069" value="3">
              <label class="form-check-label" for="t_069_susu">Susu formula</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Jumlah</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_070" id="t_070">
            </div>
            <div class="col-1">
              <label>/hari</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kesulitan makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_071_tidak" name="t_071" value="1">
              <label class="form-check-label" for="t_071_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_071_ya" name="t_071" value="2">
              <label class="form-check-label" for="t_071_ya">Ya</label>

              <div class="col-3">
              </div>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">

              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kebiasaan makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_mandiri" name="t_072" value="1">
              <label class="form-check-label" for="t_072_mandiri">Mandiri</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_dibantu" name="t_072" value="2">
              <label class="form-check-label" for="t_072_dibantu">Dibantu</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_ketergantungan" name="t_072" value="3">
              <label class="form-check-label" for="t_072_ketergantungan">Ketergantungan</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Keluhan:</label>
            </div>
            <div class="col-2">
              <label>Mual</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_073_tidak" name="t_073" value="1">
              <label class="form-check-label" for="t_073_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_073_ya" name="t_073" value="2">
              <label class="form-check-label" for="t_073_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <label>Muntah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_074_tidak" name="t_074" value="1">
              <label class="form-check-label" for="t_074_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_074_ya" name="t_074" value="2">
              <label class="form-check-label" for="t_074_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-2"></div>
            <div class="col-md-3"></div>
            <div class="col-2">
              <label>Warna/Volume</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="v_55" id="v_55" placeholder="warna">
            </div>

            <div class="col-1">
              <input class="form-control" type="text" name="v_56" id="v_56" placeholder="volume">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Eliminasi :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>BAK:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_075_normal" name="t_075" value="1">
              <label class="form-check-label" for="t_075_normal">Normal</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_075_tidak" name="t_075" value="2">
              <label class="form-check-label" for="t_075_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Masalah perkemihan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_076_tidakada" name="t_076" value="1">
              <label class="form-check-label" for="t_076_tidakada">Tidak ada</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_076_ada" name="t_076" value="2">
              <label class="form-check-label" for="t_076_ada">Ada</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan4" type="checkbox" id="t_077_retensiurine" name="t_077" value="1">
              <label class="form-check-label" for="t_077_retensiurine">Retensi urine</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan4" type="checkbox" id="t_078_inkontinensia" name="t_078" value="2">
              <label class="form-check-label" for="t_078_inkontinensia">Inkontinensia</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan4" type="checkbox" id="t_079_dialysis" name="t_079" value="3">
              <label class="form-check-label" for="t_079_dialysis">Dialysis</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Warna urine:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_080_kuning" name="t_080" value="1">
              <label class="form-check-label" for="t_080_kuning">Kuning jernih</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_080_keruh" name="t_080" value="2">
              <label class="form-check-label" for="t_080_keruh">Keruh</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_080_kemerahan" name="t_080" value="3">
              <label class="form-check-label" for="t_080_kemerahan">Kemerahan</label>
            </div>
          </div>

          <div class="row align-items-center mb-4">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Frekuensi:</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_57" id="v_57">
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>BAB:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_081_normal" name="t_081" value="1">
              <label class="form-check-label" for="t_081_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_081_tidak" name="t_081" value="2">
              <label class="form-check-label" for="t_081_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Masalah defekasi:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_082_tidakada" name="t_082" value="1">
              <label class="form-check-label" for="t_082_tidakada">Tidak ada</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_082_ada" name="t_082" value="2">
              <label class="form-check-label" for="t_082_ada">Ada</label>
            </div>
          </div>


          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan5" type="checkbox" id="t_083_stoma" name="t_083" value="1">
              <label class="form-check-label" for="t_083_stoma">Stoma</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan5" type="checkbox" id="t_084_atresiaani" name="t_084" value="2">
              <label class="form-check-label" for="t_084_atresiaani">Athresia ani</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan5" type="checkbox" id="t_085_konstipasi" name="t_085" value="3">
              <label class="form-check-label" for="t_085_konstipasi">Konstipasi</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan5" type="checkbox" id="t_086_diare" name="t_086" value="4">
              <label class="form-check-label" for="t_086_diare">Diare</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Warna fases:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_087_kuning" name="t_087" value="1">
              <label class="form-check-label" for="t_087_kuning">Kuning</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_087_kecoklatan" name="t_087" value="2">
              <label class="form-check-label" for="t_087_kecoklatan">Kecoklatan</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_087_kehitaman" name="t_087" value="3">
              <label class="form-check-label" for="t_087_kehitaman">Kehitaman</label>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Perdarahan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_088_tidak" name="t_088" value="1">
              <label class="form-check-label" for="t_088_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_088_ya" name="t_088" value="2">
              <label class="form-check-label" for="t_088_ya">Ya</label>
            </div>
            <div class="col-1">
              <label>frekuensi</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_58" id="v_58">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-6">
                <label><b>Istirahat Tidur :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Lama tidur</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_089" id="t_089">
            </div>
            <div class="col-1">
              <label>jam/hari</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kesulitan tidur:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_090_tidak" name="t_090" value="1">
              <label class="form-check-label" for="t_090_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_090_ya" name="t_090" value="2">
              <label class="form-check-label" for="t_090_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Tidur siang:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_091_tidak" name="t_091" value="1">
              <label class="form-check-label" for="t_091_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_091_ya" name="t_091" value="2">
              <label class="form-check-label" for="t_091_ya">Ya</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Mobilisasi :</b></label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_092_normal" name="t_092" value="1">
              <label class="form-check-label" for="t_092_normal">Normal/mandiri</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_092_kursiroda" name="t_092" value="2">
              <label class="form-check-label" for="t_092_kursiroda">Menggunakan korsi roda</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_092_dibantu" name="t_092" value="3">
              <label class="form-check-label" for="t_092_dibantu">Dibantu</label>
            </div>
            <div class="col-2">
              <div class="col-12">
                <input class="form-check-input" type="radio" id="t_092_lainnya" name="t_092" value="4">
                <label class="form-check-label" for="t_092_lainnya">Lain-lain</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_60" id="v_60">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <h5><b>SKRINING NYERI</b></h5>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="col-10">
                    <label>Apa ada keluhan nyeri :</label>
                  </div>
                </div>
                <div class="col-3">
                  <input class="form-check-input" type="radio" id="t_093_tidak" name="t_093" value="1">
                  <label class="form-check-label" for="t_093_tidak">Tidak</label>
                </div>
                <div class="col-2">
                  <input class="form-check-input" type="radio" id="t_093_ya" name="t_093" value="2">
                  <label class="form-check-label" for="t_093_ya">Ya</label>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="col-10">
                    <label>Metode penilaian nyeri:</label>
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-10">
                  <div class="col-12">
                    <input class="form-check-input" type="checkbox" id="t_094_pain" name="t_094" value="1" disabled="disabled">
                    <label class="form-check-label" for="t_094_pain">PAIN SCORE 0-10 NUMERICAL RATING</label>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div>

                    <input type="range" id="t_095_rangepain" name="t_095" min="0" max="10" value="0" list="markers" style="width: 83%;" disabled="disabled" />

                    <datalist id="markers">
                      <option value="0"></option>
                      <option value="1"></option>
                      <option value="2"></option>
                      <option value="3"></option>
                      <option value="4"></option>
                      <option value="5"></option>
                      <option value="6"></option>
                      <option value="7"></option>
                      <option value="8"></option>
                      <option value="9"></option>
                      <option value="10"></option>
                    </datalist>
                  </div>
                  <div>
                    <img src="<?= base_url('uploads/range2.jpg') ?>" alt="Gambar" width="349px" height="100px">
                  </div>
                </div>


                <div class="row align-items-center">
                  <div class="col-md-10">
                    <div class="col-12">
                      <br>
                      <input class="form-check-input" type="checkbox" id="t_096_wong" name="t_096" value="2" disabled="disabled">
                      <label class="form-check-label" for="t_096_wong">WONG-BAKER FACE PAIN Rating Scale</label>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div>

                      <input type="range" id="t_097_rangewong" name="t_097" min="0" max="10" value="0" list="markers" style="width: 87%;" disabled="disabled" />

                      <datalist id="markers">
                        <option value="0"></option>
                        <option value="2"></option>
                        <option value="4"></option>
                        <option value="6"></option>
                        <option value="8"></option>
                        <option value="10"></option>
                      </datalist>
                    </div>
                    <div>
                      <img src="<?= base_url('uploads/range3.jpg') ?>" alt="Gambar" width="350px" height="100px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">

              <div class="box">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                      <div class="col-12">
                        <div class="col-10">
                          <label><b>Deskripsi :</b></label>
                        </div>
                        <div class="row align-items-center">
                          <div class="col-4">
                            <label>(P) Faktor Pencetus </label>
                          </div>
                          <div class="col-7">
                            <input class="form-control" type="text" name="v_61" id="v_61" disabled="disabled">
                          </div>
                        </div>

                        <div class="row align-items-center">
                          <div class="col-4">
                            <label>(Q) Quality</label>
                          </div>
                          <div class="col-3">
                            <input class="form-check-input" type="radio" id="t_098_tumpul" name="t_098" value="1" disabled="disabled">
                            <label class="form-check-label" for="t_098_tumpul">Tumpul</label>
                          </div>
                          <div class="col-2">
                            <input class="form-check-input" type="radio" id="t_098_tajam" name="t_098" value="2" disabled="disabled">
                            <label class="form-check-label" for="t_098_tajam">Tajam</label>
                          </div>
                          <div class="col-2">
                            <input class="form-check-input" type="radio" id="t_098_panas" name="t_098" value="3" disabled="disabled">
                            <label class="form-check-label" for="t_098_panas">Panas</label>
                          </div>
                        </div>

                        <div class="row align-items-center">
                          <div class="col-4">
                            <label>(R) Lokasi </label>
                          </div>
                          <div class="col-7">
                            <input class="form-control" type="text" name="v_62" id="v_62" disabled="disabled">
                          </div>

                          <div class="container">
                            <div class="row align-items-center">
                              <div class="col-4">
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menjalar</label>
                              </div>
                              <div class="col-3">
                                <input class="form-check-input" type="radio" id="t_099_tidak" name="t_099" value="1" disabled="disabled">
                                <label class="form-check-label" for="t_099_tidak">Tidak</label>
                              </div>
                              <div class="col-2">
                                <input class="form-check-input" type="radio" id="t_099_ya" name="t_099" value="2" disabled="disabled">
                                <label class="form-check-label" for="t_099_ya">Ya</label>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="row align-items-center">
                          <div class="col-4">
                            <label>(S) Skala Nyeri </label>
                          </div>
                          <div class="col-7">
                            <input class="form-control" type="text" name="v_63" id="v_63" disabled="disabled">
                          </div>
                        </div>

                        <div class="container">
                          <div class="row align-items-center">
                            <div class="col-4">
                              <label>Frekuensi</label>
                            </div>
                            <div class="col-7">
                              <div class="row align-items-center">
                                <div class="col-6">
                                  <input class="form-check-input" type="radio" id="t_100_jarang" name="t_100" value="1" disabled="disabled">
                                  <label class="form-check-label" for="t_100_jarang">Jarang</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-check-input" type="radio" id="t_100_hilangtimbul" name="t_100" value="2" disabled="disabled">
                                  <label class="form-check-label" for="t_100_hilangtimbul">Hilang Timbul</label>
                                </div>
                              </div>
                              <div class="row align-items-center">
                                <div class="col-7">
                                  <input class="form-check-input" type="radio" id="t_100_terusmenerus" name="t_100" value="3" disabled="disabled">
                                  <label class="form-check-label" for="t_100_terusmenerus">Terus Menerus</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row align-items-center">
                          <div class="col-4">
                            <label>(T) Lamanya Nyeri </label>
                          </div>
                          <div class="col-7">
                            <input class="form-control" type="text" name="v_64" id="v_64" disabled="disabled">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td>

          <div class="row align-items-center">
            <label>Nyeri Hilang/Berkurang apabila:</label>
            <div class="col-md-3">
              <input class="form-check-input" type="checkbox" id="t_101_minumobat" name="t_101" value="1">
              <label class="form-check-label" for="t_101_minumobat">Minum Obat</label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="checkbox" id="t_102_istirahat" name="t_102" value="3">
              <label class="form-check-label" for="t_102_istirahat">Istirahat</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_103_lainnya" name="t_103" value="5">
              <label class="form-check-label" for="t_103_lainnya">Lain-lain, sebutkan</label>
            </div>
            <div class="col-4">
              <div class="form-input">
                <input class="form-control" type="text" name="v_65" id="v_65" disabled="disabled">
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <input class="form-check-input" type="checkbox" id="t_104_musik" name="t_104" value="2">
              <label class="form-check-label" for="t_104_musik">Mendengarkan musik</label>
            </div>
            <div class="col-md-3">
              <input class="form-check-input" type="checkbox" id="t_105_mengganti" name="t_105" value="4">
              <label class="form-check-label" for="t_105_mengganti">Mengganti posisi tidur</label>
            </div>
          </div>

        </td>
      </tr>
      <tr>
        <td>
          <h5 class="text-center"><b>SKRINING GIZI</b></h5>

          <div>
            <h5>Berdasarkan Malnutrition Screening Test (MST)</h5>
            <h5>(Lingkari skor sesuai dengan jawaban, Total skor adalah jumlah skor yang dilingkari)</h5>
          </div>

          <table class="table table-bordered" style="border:1px solid black">
            <tr class="text-center">
              <th width="10%">No</th>
              <th width="60%">Parameter</th>
              <th width="15%">Skor</th>
              <th width="15%">Ceklist</th>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>Apakah pasien mengalami penurunan berat badan yang tidak diinginkan dalam 6 bulan terakhir</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>a. Tidak penurunan berat badan</td>
              <td class="text-center">0</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="0" id="t_106_tidakmenurun" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>b. Tidak yakin / tidak tahu / terasa baju longgar</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_106_tidakyakin" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>c. Jika ya, berapa penurunan berat badan tersebut</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>1 - 5 Kg</td>
              <td class="text-center">1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="1" id="t_106_berat" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>8 - 10 Kg</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_106_berat1" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>11 - 15 Kg</td>
              <td class="text-center">5</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="5" id="t_106_berat2" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>> 15 Kg</td>
              <td class="text-center">4</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="4" id="t_106_berat3" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>Tidak yakin penurunannya</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_106_tidak" name="t_106">
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>Apakah asupan makan berkurang karena berkurangnya nafsu makan?</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>a. Tidak</td>
              <td class="text-center">0</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="0" id="t_107_tidak" name="t_107">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>b. Ya</td>
              <td class="text-center">1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="1" id="t_107_ya" name="t_107">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>-------------+</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="text-right"><strong>Total Skor</strong></td>
              <td>
                <input type="text" size="7px" id="t_108" name="t_108 readonly">
              </td>
              <td></td>
            </tr>
            <tr>
              <td class=" text-center">3
              </td>
              <td colspan="3">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Pasien Dengan Diagnosis Khusus </label>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="t_109_tidak" name="t_109" value="1">
                        <label class="form-check-label" for="t_109_tidak">Tidak</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="row align-items-center">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="t_109_ya" name="t_109" value="2">
                          <label class="form-check-label" for="t_109_ya">Ya</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-md-2">
                      <label class="col-form-label">Jika Ya : </label>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_110_dm" name="t_110" disabled="disabled" value="1">
                              <label class="form-check-label" for="t_110_dm">DM</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_111_ginjal" name="t_111" disabled="disabled" value="3">
                              <label class="form-check-label" for="t_111_ginjal">Ginjal</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_112_hati" name="t_112" disabled="disabled" value="5">
                              <label class="form-check-label" for="t_112_hati">Hati</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_113_paru" name="t_113" disabled="disabled" value="6">
                              <label class="form-check-label" for="t_113_paru">Paru</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_114_stroke" name="t_114" disabled="disabled" value="7">
                              <label class="form-check-label" for="t_114_stroke">Stroke</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_115_kanker" name="t_115" disabled="disabled" value="9">
                              <label class="form-check-label" for="t_115_kanker">Kanker</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_116_geriatri" name="t_116" disabled="disabled" value="2">
                              <label class="form-check-label" for="t_116_geriatri">Geriatri</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_117_jantung" name="t_117" disabled="disabled" value="4">
                              <label class="form-check-label" for="t_117_jantung">Jantung</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="row align-items-center">
                          <div class="col-5">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_118_lainnya" name="t_118" disabled="disabled" value="10">
                              <label class="form-check-label" for="t_118_lainnya">Lain-Lain</label>
                            </div>
                          </div>
                          <div class="col-6">
                            <input class="form-control" type="text" name="v_66" id="v_66" disabled="disabled">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="row align-items-center">
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_119_imun" name="t_119" disabled="disabled" value="8">
                              <label class="form-check-label" for="t_119_imun">Penurunan Imunitas</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <div>
            <h5><b>Bila skor > 2 dan atau dengan diagnosis / kondisi khusus dilakukan pengkajian lanjut oleh Ahli Gizi.</b></h5>

            <div class="row align-items-center">
              <div class="col-4">
                <label>Tanggal/jam</label>
                <input type="datetime-local" name="v_67" id="67">
              </div>

              <div class="col-2">
                <label>Nama/paraf Dietisen</label>
              </div>

              <div class="col-2">
                <div id="sig"></div>
                <div class="row align-items-center">
                  <input class="form-control" type="text" name="v_68" id="v_68">
                </div>

              </div>
            </div>

          </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5 class="text-center"><b>STATUS FUNGSIONAL</b></h5>
          <div class="row align-items-center">
            <label><b>ADL</b>(<i>Activity Daily Life</i>)</label>

            <div class="col-3">
              <label>Personal hygiene</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_120_mandiri" name="t_120" value="1">
              <label class="form-check-label" for="t_120_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_120_dibantu" name="t_120" value="2">
              <label class="form-check-label" for="t_120_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_120_ketergantungan" name="t_120" value="3">
              <label class="form-check-label" for="t_120_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>

          <div class="row align-items-center">


            <div class="col-3">
              <label>Toileting</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_121_mandiri" name="t_121" value="1">
              <label class="form-check-label" for="t_121_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_121_dibantu" name="t_121" value="2">
              <label class="form-check-label" for="t_121_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_121_ketergantungan" name="t_121" value="3">
              <label class="form-check-label" for="t_121_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>

          <div class="row align-items-center">


            <div class="col-3">
              <label>Berpakaian</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_122_mandiri" name="t_122" value="1">
              <label class="form-check-label" for="t_122_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_122_dibantu" name="t_122" value="2">
              <label class="form-check-label" for="t_122_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_122_ketergantungan" name="t_122" value="3">
              <label class="form-check-label" for="t_122_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Bergerak di tempat tidur</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_123_mandiri" name="t_123" value="1">
              <label class="form-check-label" for="t_123_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_123_dibantu" name="t_123" value="2">
              <label class="form-check-label" for="t_123_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_123_ketergantungan" name="t_123" value="3">
              <label class="form-check-label" for="t_123_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Berpindah tempat</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_124_mandiri" name="t_124" value="1">
              <label class="form-check-label" for="t_124_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_124_dibantu" name="t_124" value="2">
              <label class="form-check-label" for="t_124_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_124_ketergantungan" name="t_124" value="3">
              <label class="form-check-label" for="t_124_ketergantungan">Ketergantungan Penuh</label>
            </div>
        </td>
      </tr>
      <tr>
        <td>
          <h5 class="text-center"><b>SKRINING RISIKO JATUH PADA DEWASA</b></h5>

          <table class="table table-bordered" style="border: 1px solid black;">

            <tr class="text-center">
              <th width="30%">Parameter</th>
              <th width="40%">Kriteria</th>
              <th width="10%">Nilai</th>
              <th width="10%">Cek</th>
            </tr>

            <tr>
              <td>Riwayat Jatuh</td>
              <td>Ya</td>
              <td class="text-center">25</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah2" type="radio" id="t_125_ya" name="t_125" value="25">
                </div>
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah2" type="radio" id="t_125_tidak" name="t_125" value="0">
                </div>
              </td>
            </tr>

            <tr>
              <td>Diagnosa > 2</td>
              <td>Ya</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_126_ya" name="t_126" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_126_tidak" name="t_126" value="0">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Berpegangan pada perabot</td>
              <td class="text-center">30</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_126_berpegangan" name="t_126" value="30">
              </td>
            </tr>

            <tr>
              <td>Alat Bantu Jalan</td>
              <td>Tongkat/alat penopang</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_127_tongkat" name="t_127" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak ada/kursi roda/perawat/tirah baring</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_127_tidak" name="t_127" value="0">
              </td>
            </tr>

            <tr>
              <td>Terpasang infus</td>
              <td>Ya</td>
              <td class="text-center">20</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_128_ya" name="t_128" value="20">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_128_tidak" name="t_128" value="0">
              </td>
            </tr>

            <tr>
              <td>Gaya Berjalan</td>
              <td>Terganggu</td>
              <td class="text-center">20</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_129_terganggu" name="t_129" value="20">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Lemah</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_129_lemah" name="t_129" value="0">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Normal/tirah baring/imobilisasi</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_129_normal" name="t_129" value="0">
              </td>
            </tr>

            <tr>
              <td>Status Mental</td>
              <td>Sering lupa akan keterbatasan yang dimiliki</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_130_lupa" name="t_130" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Sadar akan kemampuan diri</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_130_sadar" name="t_130" value="0">
              </td>
            </tr>


            <tr>
              <td colspan="3">

                <div>
                  <label>Kriteria resiko cedera/jatuh : </label>

                  <div class="row align-items-center">
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_131_tidakberisiko" name="t_131" value="1">
                      <label class="form-check-label" for="t_131_tidakberisiko">0-24 Tidak berisiko</label>
                    </div>
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_131_rendahberisiko" name="t_131" value="2">
                      <label class="form-check-label" for="t_131_rendahberisiko">25-50 Rendah berisiko</label>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_131_risikotinggi" name="t_131" value="3">
                      <label class="form-check-label" for="t_131_risikotinggi">> 50 Risiko tinggi</label>
                    </div>
                  </div>
                </div>

              </td>


              <td class="text-right"><strong>Total Skor</strong>
                <input type="text" size="7px" id="t_107" readonly" />
              </td>

            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class="text-center">
          <h5><b>KEBUTUHAN EDUKASI</b></h5>
        </td>
      </tr>
      <tr>
        <td>
          <div class="row align-items-center">
            <label>Hambatan Pembelajaran:</label>
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_132_tidakada" name="t_132" value="1">
              <label class="form-check-label" for="t_132_tidakada">Tidak ada</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_133_pendengaran" name="t_133" disabled="disabled" value="1">
              <label class="form-check-label" for="t_133_pendengaran">Pendengaran</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_134_penglihatan" name="t_134" disabled="disabled" value="2">
              <label class="form-check-label" for="t_134_penglihatan">Penglihatan</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_135_kognitif" name="t_135" disabled="disabled" value="3">
              <label class="form-check-label" for="t_135_kognitif">Kognitif</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_132_ya" name="t_132" value="2">
              <label class="form-check-label" for="t_132_ya">Ya</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_136_emosi" name="t_136" disabled="disabled" value="4">
              <label class="form-check-label" for="t_136_emosi">Emosi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_137_budaya" name="t_137" disabled="disabled" value="5">
              <label class="form-check-label" for="t_137_budaya">Budaya/kepercayaan</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_138_bahasa" name="t_138" disabled="disabled" value="6">
              <label class="form-check-label" for="t_138_bahasa">Bahasa</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3"></div>
            <div class="col-md-6 row mb-3">
              <div class="col-3 col-form-label">
                <input class="form-check-input" type="checkbox" id="t_139_lainnya" name="t_139" disabled="disabled" value="7">
                <label class="form-check-label" for="t_139_lainnya">Lain-lain</label>
              </div>
              <div class="col-4">
                <input class="form-control" type="text" id="v_34" name="v_34" disabled="disabled">
              </div>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-2">
            <label>Edukasi yang Diperlukan:</label>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_140_stimulasi" name="t_140" value="1">
              <label class="form-check-label" for="t_140_stimulasi">Stimulasi tumbuh kembang</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_141_nutrisi" name="t_141" value="2">
              <label class="form-check-label" for="t_141_nutrisi">Nutrisi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_142_perawatanluka" name="t_142" value="3">
              <label class="form-check-label" for="t_142_perawatanluka">Perawatan luka</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_143_perawatanstoma" name="t_143" value="4">
              <label class="form-check-label" for="t_143_perawatanstoma">Perawatan stoma</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_144_manajemennyeri" name="t_144" value="5">
              <label class="form-check-label" for="t_144_manajemennyeri">Manajemen nyeri</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_145_medikasi" name="t_145" value="6">
              <label class="form-check-label" for="t_145_medikasi">Medikasi</label>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_146_rehabilitasi" name="t_146" value="7">
              <label class="form-check-label" for="t_146_rehabilitasi">Rehabilitasi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_147_jaminanfinansial" name="t_147" value="8">
              <label class="form-check-label" for="t_147_jaminanfinansial">Jaminan finansial</label>
            </div>
            <div class="col-md-6 row mb-3">
              <div class="col-3 col-form-label">
                <input class="form-check-input" type="checkbox" id="t_148_lainnya" name="t_148" value="9">
                <label class="form-check-label" for="t_148_lainnya">Lain-lain</label>
              </div>
              <div class="col-4">
                <input class="form-control" type="text" name="v_69" id="v_69" disabled="disabled">
              </div>
            </div>
          </div>
        </td>
      </tr>


      <tr>
        <td>
          <h5 class="mt-3"><b>SKRINING PERENCANAAN PULANG/DISCHARGE PLANNING UNTUK PELAYANAN MPP:</b></h5>

          <table class="table table-bordered" style="border:1px solid black;">

            <tr class="text-center">
              <th width="40%">Kriteria Seleksi</th>
              <th width="5%">Ya</th>
              <th width="5%">Tidak</th>
              <th width="40%">Kriteria Seleksi</th>
              <th width="5%">Ya</th>
              <th width="5%">Tidak</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Pasien dengan kognitif rendah</td>
              <td>
                <div class="radio">
                  <input class="form-check-input" type="radio" id="t_149_ya" name="t_149" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_149_tidak" name="t_149" value="2">
                </div>
              </td>
              <td>Riwayat gangguan mental, bunuh diri, dll</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_150_ya" name="t_150" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_150_tidak" name="t_150" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td>Pasien dengan resiko tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_151_ya" name="t_151" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_151_tidak" name="t_151" value="2">
                </div>
              </td>
              <td>Pasien redmisi RS dlm 1 bulan diagnose sama</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_152_ya" name="t_152" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_152_tidak" name="t_152" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td>Kasus dengan penyakit kronik > 1 diagnosa</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_153_ya" name="t_153" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_153_tidak" name="t_153" value="2">
                </div>
              </td>
              <td>Perkiraan asuhan dengan biaya finansial tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_154_ya" name="t_154" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_154_tidak" name="t_154" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td>Status fungsional rendah, kebutuhan ADL tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_155_ya" name="t_155" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_155_tidak" name="t_155" value="2">
                </div>
              </td>
              <td>Kasus yang melebihi rata rata hari rawat</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_156_ya" name="t_156" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_156_tidak" name="t_156" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td>Pasien dgn Riwayat penggunaan peralatan medis</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_157_ya" name="t_157" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_157_tidak" name="t_157" value="2">
                </div>
              </td>
              <td>Pasien dengan komplain tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_158_ya" name="t_158" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_158_tidak" name="t_158" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td>Dirujuk ke
                <input class="form-check-input" type="checkbox" id="t_159_dirujuk" name="t_159" value="1">
                <div class="input">
                  <input class="form-control" type="text" name="v_70" id="v_70" disabled="disabled">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_160_ya" name="t_160" value="1" disabled="disabled">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_160_tidak" name="t_160" value="2" disabled="disabled">
                </div>
              </td>
              <td>Pasien butuh kotinuitas pelayanan</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_161_ya" name="t_161" value="1">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_161_tidak" name="t_161" value="2">
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="4">Lain-lain
                <textarea class="form-control" name="v_71" id="v_71" cols="4" rows="3"></textarea>
              </td>

            </tr>
          </table>

        </td>
      </tr>
      <tr>
        <td>
          <h5 class="text-center mt-3"><b>DIAGNOSA KEPERAWATAN</b></h5>

          <table class="table table-bordered" style="border:1px solid black;">
            <tr class="text-center">
              <th width="5%">No</th>
              <th width="10%">Tanggal Ditemukan</th>
              <th width="20%">Diagnosis Keperawatan</th>
              <th width="10%">Tanggal Teratasi</th>
              <th width="5%">No</th>
              <th width="10%">Tanggal Ditemukan</th>
              <th width="20%">Diagnosis Keperawatan</th>
              <th width="10%">Tanggal Teratasi</th>
            </tr>

            <tr>
              <td class="text-center">1.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_72" id="v_72">
                </div>
              </td>
              <td>Ansietas</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_73" id="v_73">
                </div>
              </td>
              <td class="text-center">20.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_74" id="v_74">
                </div>
              </td>
              <td>Konstipasi</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_75" id="v_75">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">2.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_76" id="v_76">
                </div>
              </td>
              <td>Bersihan jalan napas tidak efektif</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_77" id="v_77">
                </div>
              </td>
              <td class="text-center">21.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_78" id="v_78">
                </div>
              </td>
              <td>Nausea</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_79" id="v_79">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">3.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_80" id="v_80">
                </div>
              </td>
              <td>Defisit perawatan diri</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_81" id="v_81">
                </div>
              </td>
              <td class="text-center">22.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_82" id="v_82">
                </div>
              </td>
              <td>Nyeri akut</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_83" id="v_83">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">4.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_84" id="v_84">
                </div>
              </td>
              <td>Defisit Nutrisi</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_85" id="v_85">
                </div>
              </td>
              <td class="text-center">23.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_86" id="v_86">
                </div>
              </td>
              <td>Nyeri kronis</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_87" id="v_87">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">5.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_88" id="v_88">
                </div>
              </td>
              <td>Diare</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_89" id="v_89">
                </div>
              </td>
              <td class="text-center">24.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_90" id="v_90">
                </div>
              </td>
              <td>Penurunan curah jantung</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_91" id="v_91">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">6.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_92" id="v_92">
                </div>
              </td>
              <td>Gangguan citra tubuh</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_93" id="v_93">
                </div>
              </td>
              <td class="text-center">25.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_94" id="v_94">
                </div>
              </td>
              <td>Perfusi perifer tidak efektif</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_95" id="v_95">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">7.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_96" id="v_96">
                </div>
              </td>
              <td>Gangguan eliminasi urin</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_97" id="v_97">
                </div>
              </td>
              <td class="text-center">26.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_98" id="v_98">
                </div>
              </td>
              <td>Pola napas tidak efektif</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_99" id="v_99">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">8.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_100" id="v_100">
                </div>
              </td>
              <td>Gangguan integritas kulit/jaringan</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_101" id="v_101">
                </div>
              </td>
              <td class="text-center">27.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_102" id="v_102">
                </div>
              </td>
              <td>Risiko cedera</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_103" id="v_103">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">9.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_104" id="v_104">
                </div>
              </td>
              <td>Gangguan mobilitas fisik</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_105" id="v_105">
                </div>
              </td>
              <td class="text-center">28.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_106" id="v_106">
                </div>
              </td>
              <td>Risiko defisit nutrisi</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_107" id="v-107">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">10.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_108" id="v108">
                </div>
              </td>
              <td>Gangguan pertukaran gas</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_109" id="v_109">
                </div>
              </td>
              <td class="text-center">29.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_110" id="v_110">
                </div>
              </td>
              <td>Risiko gangguan integritas kulit/jaringan</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_111" id="v_111">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">11.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_112" id="v_112">
                </div>
              </td>
              <td>Gangguan pola tidur</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_113" id="v_113">
                </div>
              </td>
              <td class="text-center">30.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_114" id="v_114">
                </div>
              </td>
              <td>Risiko infeksi</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_115" id="v_115">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">12.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_116" id="v_116">
                </div>
              </td>
              <td>Gangguan rasa nyaman</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_117" id="v_117">
                </div>
              </td>
              <td class="text-center">31.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_118" id="v_118">
                </div>
              </td>
              <td>Risiko jatuh</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_119" id="v_119">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">13.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_120" id="v_120">
                </div>
              </td>
              <td>Gangguan tumbuh kembang</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_121" id="v_121">
                </div>
              </td>
              <td class="text-center">32.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_122" id="v_122">
                </div>
              </td>
              <td>Risiko ketidakseimbangan cairan</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_123" id="v_123">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">14.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_124" id="v_124">
                </div>
              </td>
              <td>Hipertermia</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_125" id="v_125">
                </div>
              </td>
              <td class="text-center">33.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_126" id="v_126">
                </div>
              </td>
              <td>Risiko ketidakseimbangan elektrolit</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_127" id="v_127">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">15.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_128" id="v_128">
                </div>
              </td>
              <td>Hipervolemia</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_129" id="v_129">
                </div>
              </td>
              <td class="text-center">34.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_130" id="v_130">
                </div>
              </td>
              <td>Risiko pendarahan</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_131" id="v_131">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">16.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_132" id="v_132">
                </div>
              </td>
              <td>Hipotermia</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_133" id="v_133">
                </div>
              </td>
              <td class="text-center">35.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_134" id="v_134">
                </div>
              </td>
              <td>Risiko perfusi perifer tidak efektif</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_135" id="v_135">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">17.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_136" id="v_v136">
                </div>
              </td>
              <td>Hipovolemia</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_137" id="v_137">
                </div>
              </td>
              <td class="text-center">36.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_138" id="v_138">
                </div>
              </td>
              <td>Risiko syok</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_139" id="v_139">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">18.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_140" id="v_140">
                </div>
              </td>
              <td>Intoleransi aktivitas</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_141" id="v_141">
                </div>
              </td>
              <td class="text-center">37.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_142" id="v_142">
                </div>
              </td>
              <td>Risiko kejang/kejang berulang</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_143" id="v_143">
                </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">19.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_144" id="v_144">
                </div>
              </td>
              <td>Keletihan</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_145" id="v_145">
                </div>
              </td>
              <td class="text-center">38.</td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_146" id="v_146">
                </div>
              </td>
              <td>
                <input class="form-control" type="text" name="v_147" id="v_147" placeholder="Lainnya">
              </td>
              <td>
                <div class="input">
                  <input class="form-control" type="date" name="v_148" id="v_148">
                </div>
              </td>
            </tr>

          </table>
          <br>
          <table class="table text-center">

            <tr>
              <th width="20%"></th>
              <th width="30%">Perawat Yang Melakukan Pengkajian</th>
              <th width="30%">Perawat Yang Memverivikasi</th>
            </tr>

            <tr class="text-center">
              <td><b>Nama dan tanda tangan Perawat</b></td>
              <td class="text-center">
                <div id="sig1"></div>

              </td>
              <td class="text-center">

                <div id="sig2"></div>


              </td>
            </tr>

            <tr>
              <td></td>
              <td>

                <input size="25px" type="text" name="v_149" id="v_149">

              </td>
              <td>

                <input size="25px" type="text" name="v_150" id="v_150">

              </td>
            </tr>

            <tr>
              <td><b>Tanggal/Jam</b></td>
              <td><input type="datetime-local" name="v_151" id="v_151"></td>
              <td><input type="datetime-local" name="v_152" id="v_152"></td>
            </tr>


          </table>


        </td>
      </tr>


    </table>
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