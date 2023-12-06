<?php
$db = db_connect();

foreach ($dataAssessmentform4 as $row) {
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

  <script type="text/javascript">
    $(function f12() {
      $("input[name='t_08']").click(function f12() {
        if ($("#t_08_ya").is(":checked")) {
          $("#t_09_alergiobat").removeAttr("disabled");
          $("#t_09_alergimakanan").removeAttr("disabled");
          $("#t_09_alergilainnya").removeAttr("disabled");
          $("#t_09_alergiobat").focus();
        } else {
          $("#t_09_alergiobat").attr("disabled", true);
          $("#t_09_alergiobat").prop("checked", false);
          $("#t_09_alergimakanan").attr("disabled", true);
          $("#t_09_alergimakanan").prop("checked", false);
          $("#t_09_alergilainnya").attr("disabled", true);
          $("#t_09_alergilainnya").prop("checked", false);
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
      $("input[name='t_09']").click(function f12() {
        if ($("#t_09_alergimakanan").is(":checked")) {
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
      $("input[name='t_09']").click(function f12() {
        if ($("#t_09_alergilainnya").is(":checked")) {
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


  <script type="text/javascript">
    $(function f13() {
      $("input[name='t_024']").click(function f12() {
        if ($("#t_024_ada").is(":checked")) {
          $("#t_025_jantung").removeAttr("disabled");
          $("#t_025_asma").removeAttr("disabled");
          $("#t_025_dm").removeAttr("disabled");
          $("#t_025_hipertensi").removeAttr("disabled");
          $("#t_025_lainnya").removeAttr("disabled");
        } else {
          $("#t_025_jantung").attr("disabled", true);
          $("#t_025_jantung").prop("checked", false);
          $("#t_025_asma").attr("disabled", true);
          $("#t_025_asma").prop("checked", false);
          $("#t_025_dm").attr("disabled", true);
          $("#t_025_dm").prop("checked", false);
          $("#t_025_hipertensi").attr("disabled", true);
          $("#t_025_hipertensi").prop("checked", false);
          $("#t_025_lainnya").attr("disabled", true);
          $("#t_025_lainnya").prop("checked", false);
          $("#v_23").attr("disabled", true);
          $("#v_23").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f13() {
      $("input[name='t_025']").click(function f12() {
        if ($("#t_025_lainnya").is(":checked")) {
          $("#v_23").removeAttr("disabled");
          $("#v_23").removeAttr("disabled");
        } else {
          $("#v_23").attr("disabled", true);
          $("#v_23").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f114() {
      $("input[name='t_012']").click(function f12() {
        if ($("#t_012_lainnya").is(":checked")) {
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

  <script>
    $(function() {
      fungsi11_disabled();
      $("#t_011_mandiri, #t_011_bpjs").click(fungsi11_disabled);
    });
    $(function() {
      fungsi11_enable();
      $("#t_011_lainnya").click(fungsi11_enable);
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

  <script>
    $(function() {
      fungsi12_disabled();
      $("#t_013_rumah, #t_013_panti").click(fungsi12_disabled);
    });
    $(function() {
      fungsi12_enable();
      $("#t_013_lainnya").click(fungsi12_enable);
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

  <script>
    $(function() {
      fungsi13_disabled();
      $("#t_014_orangtua, #t_014_anggota, #t_014_tiri").click(fungsi13_disabled);
    });
    $(function() {
      fungsi13_enable();
      $("#t_014_lainnya").click(fungsi13_enable);
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


  <script>
    $(function() {
      fungsi14_disabled();
      $("#t_015_sekolah").click(fungsi14_disabled);
    });
    $(function() {
      fungsi14_enable();
      $("#t_015_sekolahink").click(fungsi14_enable);
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


  <script>
    $(function() {
      fungsi15_disabled();
      $("#t_016_tidak").click(fungsi15_disabled);
    });
    $(function() {
      fungsi15_enable();
      $("#t_016_ya").click(fungsi15_enable);
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

  <script>
    $(function() {
      fungsi16_disabled();
      $("#t_017_tidak").click(fungsi16_disabled);
    });
    $(function() {
      fungsi16_enable();
      $("#t_017_pernah").click(fungsi16_enable);
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

  <script>
    $(function() {
      fungsi17_disabled();
      $("#t_020_tidak").click(fungsi17_disabled);
    });
    $(function() {
      fungsi17_enable();
      $("#t_020_kadang").click(fungsi17_enable);
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
      $("#t_020_tidak").click(fungsi18_disabled);
    });
    $(function() {
      fungsi18_enable();
      $("#t_020_selalu").click(fungsi18_enable);
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

  <script>
    $(function() {
      fungsi19_disabled();
      $("#t_021_tidak").click(fungsi19_disabled);
    });
    $(function() {
      fungsi19_enable();
      $("#t_021_ya").click(fungsi19_enable);
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

  <script>
    $(function() {
      fungsi20_disabled();
      $("#t_034_normal, #t_034_ikterus").click(fungsi20_disabled);
    });
    $(function() {
      fungsi20_enable();
      $("#t_034_lainnya").click(fungsi20_enable);
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

  <script>
    $(function() {
      fungsi21_disabled();
      $("#t_036_tidak").click(fungsi21_disabled);
    });
    $(function() {
      fungsi21_enable();
      $("#t_036_ya").click(fungsi21_enable);
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

  <script>
    $(function() {
      fungsi7_disabled();
      $("#t_039_tidak").click(fungsi7_disabled);
    });
    $(function() {
      fungsi7_enable();
      $("#t_039_ya").click(fungsi7_enable);
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
      $("#v_43").attr("disabled", true);
      if (this.click) {
        $("#v_44").removeAttr("disabled");
        $("#v_44").focus();
      } else {
        $("#v_44").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi22_disabled();
      $("#t_044_tidak").click(fungsi22_disabled);
    });
    $(function() {
      fungsi22_enable();
      $("#t_044_ada").click(fungsi22_enable);
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

  <script>
    $(function() {
      fungsi23_disabled();
      $("#t_046_tidak").click(fungsi23_disabled);
    });
    $(function() {
      fungsi23_enable();
      $("#t_046_ya").click(fungsi23_enable);
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

  <script>
    $(function() {
      fungsi24_disabled();
      $("#t_047_normal").click(fungsi24_disabled);
    });
    $(function() {
      fungsi24_enable();
      $("#t_047_abnormal").click(fungsi24_enable);
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

  <script>
    $(function() {
      fungsi25_disabled();
      $("#t_049_tidak").click(fungsi25_disabled);
    });
    $(function() {
      fungsi25_enable();
      $("#t_049_ya").click(fungsi25_enable);
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

  <script>
    $(function() {
      fungsi26_disabled();
      $("#t_056_tidak").click(fungsi26_disabled);
    });
    $(function() {
      fungsi26_enable();
      $("#t_056_ya").click(fungsi26_enable);
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

  <script>
    $(function() {
      fungsi27_disabled();
      $("#t_057_tidak").click(fungsi27_disabled);
    });
    $(function() {
      fungsi27_enable();
      $("#t_057_ya").click(fungsi27_enable);
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

  <script>
    $(function() {
      fungsi28_disabled();
      $("#t_058_tidak").click(fungsi28_disabled);
    });
    $(function() {
      fungsi28_enable();
      $("#t_058_ya").click(fungsi28_enable);
    })

    function fungsi28_disabled() {
      if (this.click) {
        $("#t_60").attr("disabled", true);
        $("#t_60").val("");
      } else {
        $("#t_60").removeAttr("disabled");
      }
    }

    function fungsi28_enable() {
      $("#t_60").attr("disabled", true);
      if (this.click) {
        $("#t_60").removeAttr("disabled");
        $("#t_60").focus();
      } else {
        $("#t_60").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi29_disabled();
      $("#t_058_tidak").click(fungsi29_disabled);
    });
    $(function() {
      fungsi29_enable();
      $("#t_058_ya").click(fungsi29_enable);
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

  <script>
    $(function() {
      fungsi30_disabled();
      $("#t_068_tidak").click(fungsi30_disabled);
    });
    $(function() {
      fungsi30_enable();
      $("#t_068_ya").click(fungsi30_enable);
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

  <script>
    $(function() {
      fungsi31_disabled();
      $("#t_070_tidakada").click(fungsi31_disabled);
    });
    $(function() {
      fungsi31_enable();
      $("#t_070_ada").click(fungsi31_enable);
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

  <script>
    $(function() {
      fungsi32_disabled();
      $("#t_074_tidakada").click(fungsi32_disabled);
    });
    $(function() {
      fungsi32_enable();
      $("#t_074_ada").click(fungsi32_enable);
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
      } else {
        $("input.hambatan5").attr("disabled", true);
      }
    }
  </script>

  <script>
    $(function() {
      fungsi33_disabled();
      $("#t_077_tidak").click(fungsi33_disabled);
    });
    $(function() {
      fungsi33_enable();
      $("#t_077_ya").click(fungsi33_enable);
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

  <script>
    $(function() {
      fungsi34_disabled();
      $("#t_081_normal, #t_081_kursiroda, #t_081_dibantu").click(fungsi34_disabled);
    });
    $(function() {
      fungsi34_enable();
      $("#t_081_lainnya").click(fungsi34_enable);
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

  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_082']").click(function f15() {
        if ($("#t_082_ya").is(":checked")) {
          $("#t_083_pain").removeAttr("disabled");
          $("#t_084_wong").removeAttr("disabled");
          $("#v_61").removeAttr("disabled");
          $("#t_085_tumpul").removeAttr("disabled");
          $("#t_085_tajam").removeAttr("disabled");
          $("#t_085_panas").removeAttr("disabled");
          $("#v_62").removeAttr("disabled");
          $("#t_086_tidak").removeAttr("disabled");
          $("#t_086_ya").removeAttr("disabled");
          $("#v_63").removeAttr("disabled");
          $("#t_087_jarang").removeAttr("disabled");
          $("#t_087_hilangtimbul").removeAttr("disabled");
          $("#t_087_terusmenerus").removeAttr("disabled");
          $("#v_64").removeAttr("disabled");
        } else {
          $("#t_083_pain").attr("disabled", true);
          $("#t_083_pain").prop("checked", false);
          $("#t_088_rangepain").attr("disabled", true);
          $("#t_088_rangepain").prop("checked", false);
          $("#t_088_rangepain").val("0");
          $("#t_084_wong").attr("disabled", true);
          $("#t_084_wong").prop("checked", false);
          $("#t_089_rangewong").attr("disabled", true);
          $("#t_089_rangewong").prop("checked", false);
          $("#t_089_rangewong").val("0");
          $("#v_61").attr("disabled", true);
          $("#v_61").val("");
          $("#t_085_tumpul").attr("disabled", true);
          $("#t_085_tumpul").prop("checked", false);
          $("#t_085_tajam").attr("disabled", true);
          $("#t_085_tajam").prop("checked", false);
          $("#t_085_panas").attr("disabled", true);
          $("#t_085_panas").prop("checked", false);
          $("#v_62").attr("disabled", true);
          $("#v_62").val("");
          $("#t_086_tidak").attr("disabled", true);
          $("#t_086_tidak").prop("checked", false);
          $("#t_086_ya").attr("disabled", true);
          $("#t_086_ya").prop("checked", false);
          $("#v_63").attr("disabled", true);
          $("#v_63").val("");
          $("#t_087_jarang").attr("disabled", true);
          $("#t_087_jarang").prop("checked", false);
          $("#t_087_hilangtimbul").attr("disabled", true);
          $("#t_087_hilangtimbul").prop("checked", false);
          $("#t_087_terusmenerus").attr('disabled', true);
          $("#t_087_terusmenerus").prop("checked", false);
          $("#v_64").attr("disabled", true);
          $("#v_64").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_083']").click(function f15() {
        if ($("#t_083_pain").is(":checked")) {
          $("#t_088_rangepain").removeAttr("disabled");
        } else {
          $("#t_088_rangepain").attr("disabled", true);
          $("#t_088_rangepain").prop("checked", false);
          $("#t_088_rangepain").val("0");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f15() {
      $("input[name='t_084']").click(function f15() {
        if ($("#t_084_wong").is(":checked")) {
          $("#t_089_rangewong").removeAttr("disabled");
        } else {
          $("#t_089_rangewong").attr("disabled", true);
          $("#t_089_rangewong").prop("checked", false);
          $("#t_089_rangewong").val("0");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f16() {
      $("input[name='t_090']").click(function f16() {
        if ($("#t_090_lainnya").is(":checked")) {
          $("#v_65").removeAttr("disabled");
          $("#v_65").focus();
        } else {
          $("#v_65").attr("disabled", true);
          $("#v_65").val("");
        }
      });
    });
  </script>

  <!-- sum1 -->
  <script>
    $(function() {
      $('input.jumlah').click(function() {

        var nilai1 = parseInt($('input[name="t_091"]:checked').val());
        var nilai2 = parseInt($('input[name="t_092"]:checked').val());

        if (isNaN(nilai1)) {
          nilai1 = 0;
        }

        if (isNaN(nilai2)) {
          nilai2 = 0;
        }

        $('#t_095').val(nilai1 + nilai2);
      });
    });
  </script>
  <!-- sum1 -->

  <script type="text/javascript">
    $(function f17() {
      $("input[name='t_093']").click(function f17() {
        if ($("#t_093_ya").is(":checked")) {
          $("#t_094_dm").removeAttr("disabled");
          $("#t_094_ginjal").removeAttr("disabled");
          $("#t_094_hati").removeAttr("disabled");
          $("#t_094_paru").removeAttr("disabled");
          $("#t_094_stroke").removeAttr("disabled");
          $("#t_094_kanker").removeAttr("disabled");
          $("#t_094_geriatri").removeAttr("disabled");
          $("#t_094_jantung").removeAttr("disabled");
          $("#t_094_lainnya").removeAttr("disabled");
          $("#t_094_imun").removeAttr("disabled");
        } else {
          $("#t_094_dm").attr("disabled", true);
          $("#t_094_dm").prop("checked", false);
          $("#t_094_ginjal").attr("disabled", true);
          $("#t_094_ginjal").prop("checked", false);
          $("#t_094_hati").attr("disabled", true);
          $("#t_094_hati").prop("checked", false);
          $("#t_094_paru").attr("disabled", true);
          $("#t_094_paru").prop("checked", false);
          $("#t_094_stroke").attr("disabled", true);
          $("#t_094_stroke").prop("checked", false);
          $("#t_094_kanker").attr("disabled", true);
          $("#t_094_kanker").prop("checked", false);
          $("#t_094_geriatri").attr("disabled", true);
          $("#t_094_geriatri").prop("checked", false);
          $("#t_094_jantung").attr("disabled", true);
          $("#t_094_jantung").prop("checked", false);
          $("#t_094_lainnya").attr("disabled", true);
          $("#t_094_lainnya").prop("checked", false);
          $("#t_094_imun").attr("disabled", true);
          $("#t_094_imun").prop("checked", false);
          $("#v_66").attr("disabled", true);
          $("#v_66").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f17() {
      $("input[name='t_094']").click(function f17() {
        if ($("#t_094_lainnya").is(":checked")) {
          $("#v_66").removeAttr("disabled");
          $("#v_66").focus();
        } else {
          $("#v_66").attr("disabled", true);
          $("#v_66").val("");
        }
      });
    });
  </script>

  <!-- sum2 -->
  <script>
    $(function() {
      $('input.jumlah2').click(function() {

        var nilai3 = parseInt($('input[name="t_101"]:checked').val());
        var nilai4 = parseInt($('input[name="t_102"]:checked').val());
        var nilai5 = parseInt($('input[name="t_103"]:checked').val());
        var nilai6 = parseInt($('input[name="t_104"]:checked').val());
        var nilai7 = parseInt($('input[name="t_105"]:checked').val());
        var nilai8 = parseInt($('input[name="t_106"]:checked').val());

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

  <script type="text/javascript">
    $(function f18() {
      $("input[name='t_110']").click(function f18() {
        if ($("#t_110_ya").is(":checked")) {
          $("#t_109_pendengaran").removeAttr("disabled");
          $("#t_109_penglihatan").removeAttr("disabled");
          $("#t_109_kognitif").removeAttr("disabled");
          $("#t_109_emosi").removeAttr("disabled");
          $("#t_109_budaya").removeAttr("disabled");
          $("#t_109_bahasa").removeAttr("disabled");
          $("#t_109_lainnya").removeAttr("disabled");
        } else {
          $("#t_109_pendengaran").attr("disabled", true);
          $("#t_109_pendengaran").prop("checked", false);
          $("#t_109_penglihatan").attr("disabled", true);
          $("#t_109_penglihatan").prop("checked", false);
          $("#t_109_kognitif").attr("disabled", true);
          $("#t_109_kognitif").prop("checked", false);
          $("#t_109_emosi").attr("disabled", true);
          $("#t_109_emosi").prop("checked", false);
          $("#t_109_budaya").attr("disabled", true);
          $("#t_109_budaya").prop("cheked", false);
          $("#t_109_bahasa").attr("disabled", true);
          $("#t_109_bahasa").prop("checked", false);
          $("#t_109_lainnya").attr("disabled", true);
          $("#t_109_lainnya").prop("checked", false);
          $("#v_34").attr("disabled", true);
          $("#v_34").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f18() {
      $("input[name='t_109']").click(function f18() {
        if ($("#t_109_lainnya").is(":checked")) {
          $("#v_34").removeAttr("disabled");
          $("#v_34").focus();
        } else {
          $("#v_34").attr("disabled", true);
          $("#v_34").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f19() {
      $("input[name='t_111']").click(function f19() {
        if ($("#t_111_lainnya").is(":checked")) {
          $("#v_69").removeAttr("disabled");
          $("#v_69").focus();
        } else {
          $("#v_69").attr("disabled", true);
          $("#v_69").val("");
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(function f20() {
      $("input[name='t_124']").click(function f20() {
        if ($("#t_124_dirujuk").is(":checked")) {
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
      $("input[name='t_124']").click(function f21() {
        if ($("#t_124_dirujuk").is(":checked")) {
          $("#t_117_ya").removeAttr("disabled");
          $("#t_117_tidak").removeAttr("disabled");
        } else {
          $("#t_117_ya").attr("disabled", true);
          $("#t_117_ya").prop("checked", false);
          $("#t_117_tidak").attr("disabled", true);
          $("#t_117_tidak").prop("checked", false);
        }
      })
    })
  </script>

  <script>
    $("#tension_upper, #tensiom_bellow, #height, #weight, #nadi, #nafas, #temprature, #head").keydown(function(e) {
      !0 == e.shiftKey && e.preventDefault(), e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode >= 96 && e.keyCode <= 105 || 8 == e.keyCode || 9 == e.keyCode || 37 == e.keyCode || 39 == e.keyCode || 46 == e.keyCode || 190 == e.keyCode || e.preventDefault(), -1 !== $(this).val().indexOf(".") && 190 == e.keyCode && e.preventDefault()
    });
  </script>

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
        <form>
          <td>
            <div class="row">
              <div class="col-5">
                <label>No.RM</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="no_Registration" id="no_Registration" value="<?php echo $row->NO_REGISTRATION; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Nama Lengkap</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thename" id="thename" value="<?php echo $row->THENAME; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Tanggal Lahir</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row->DATE_OF_BIRTH; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>NIK</label>
              </div>
              <div class="col-7">
                <input class="form-control" type="text" name="thenik" id="thenik" value="<?php echo $row->THENIK; ?>" readonly>
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
          <div class="row align-items-center">
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
            <div class="row align-items-center">
              <div class="col-2 align-items-center">
                <label>Sumber Data :</label>
              </div>
              <div class="col-md-2">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_pasien" name="t_01" value="Pasien">
                      <label class="form-check-label" for="t_01_pasien">Pasien</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_keluarga" name="t_01" value="Keluarga">
                      <label class="form-check-label" for="t_01_keluarga">Keluarga</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_01_lainnya" name="t_01" value="Lainnya">
                      <label class="form-check-label" for="t_01_lainnya">Lainnya</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="v_08" id="v_08">
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
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
                      <input class="form-check-input" type="radio" id="t_02_islam" name="t_02" value="Islam">
                      <label class="form-check-label" for="t_02_islam">Islam</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_protestan" name="t_02" value="Protestan ">
                      <label class="form-check-label" for="t_02_protestan">Protestan</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_katholik" name="t_02" value="Katholik">
                      <label class="form-check-label" for="t_02_katholik">Katholik</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_lainnya" name="t_02" value="Lainnya">
                      <label class="form-check-label" for="t_02_lainnya">Lainnya</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" type="text" name="v_09" id="v_09">
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
                      <input class="form-check-input" type="radio" id="t_02_hindu" name="t_02" value="Hindu">
                      <label class="form-check-label" for="t_02_hindu">Hindu</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_budha" name="t_02" value="Budha">
                      <label class="form-check-label" for="t_02_budha">Budha</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_02_konghucu" name="t_02" value="Konghucu">
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
                      <input class="form-check-input" type="radio" id="t_03_sd" name="t_03" value="SD">
                      <label class="form-check-label" for="t_03_sd">SD</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_smp" name="t_03" value="SMP">
                      <label class="form-check-label" for="t_03_smp">SMP</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_sma" name="t_03" value="SMA">
                      <label class="form-check-label" for="t_03_sma">SMA</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_lainnya" name="t_03" value="Lainnya">
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
                      <input class="form-check-input" type="radio" id="t_03_diploma" name="t_03" value="Diploma">
                      <label class="form-check-label" for="t_03_diploma">Diploma</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s1" name="t_03" value="S1">
                      <label class="form-check-label" for="t_03_s1">S1</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s2" name="t_03" value="S2">
                      <label class="form-check-label" for="t_03_s2">S2</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="t_03_s3" name="t_03" value="S3">
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
                    <input class="form-check-input" type="radio" id="t_04_tidak" name="t_04" value="Tidak">
                    <label class="form-check-label" for="t_04_tidak">Tidak</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_04_ya" name="t_04" value="Ya">
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
                    <input class="form-check-input" type="radio" id="t_06_tidak" name="t_06" value="Tidak">
                    <label class="form-check-label" for="t_06_tidak">Tidak</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row align-items-center">
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_06_ya" name="t_06" value="Ya">
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
                    <input class="form-check-input" type="radio" id="t_07_tidak" name="t_07" value="Tidak">
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
                    <input class="form-check-input" type="radio" id="t_07_ada" name="t_07" value="Ada">
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
                    <input class="form-check-input" type="radio" id="t_08_tidak" name="t_08" value="Tidak">
                    <label class="form-check-label" for="t_08_tidak">Tidak</label>
                  </div>
                </div>
                <div class="col-2">
                  <input class="form-check-input" type="radio" id="t_08_ya" name="t_08" value="Ya">
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
                    <input class="form-check-input " type="checkbox" id="t_09_alergiobat" name="t_09" disabled="disabled">
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
                    <input class="form-check-input " type="checkbox" id="t_09_alergimakanan" name="t_09" disabled="disabled">
                    <label class="form-check-label" for="t_09_alergimakanan">&nbsp;&nbsp;&nbsp;&nbsp;Alergi makanan, sebutkan</label>
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
                    <input class="form-check-input " type="checkbox" id="t_09_alergilainnya" name="t_09" disabled="disabled">
                    <label class="form-check-label" for="t_09_alergilainnya">&nbsp;&nbsp;&nbsp;&nbsp;Alergi lainnya, sebutkan</label>
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
                    <input class="form-check-input" type="radio" id="t_08_tidakdik" name="t_08" value="Tidak diiketahui">
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
                    <input class="form-check-input" type="radio" id="t_024_tidak" name="t_024" value="Tidak ada">
                    <label class="form-check-label" for="t_024_tidak">Tidak ada</label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_024_ada" name="t_024" value="Ada">
                    <label class="form-check-label" for="t_024_ada">Ada</label>
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
                    <input class="form-check-input  " type="checkbox" id="t_025_jantung" name="t_025" disabled="disabled">
                    <label class="form-check-label" for="t_025_jantung">Jantung</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input  " type="checkbox" id="t_025_asma" name="t_025" disabled="disabled">
                    <label class="form-check-label" for="t_025_asma">Asma</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input  " type="checkbox" id="t_025_dm" name="t_025" disabled="disabled">
                    <label class="form-check-label" for="t_025_dm">DM</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input  " type="checkbox" id="t_025_hipertensi" name="t_025" disabled="disabled">
                    <label class="form-check-label" for="t_025_hipertensi">Hipertensi</label>
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
                    <input class="form-check-input  " type="checkbox" id="t_025_lainnya" name="t_025" disabled="disabled">
                    <label class="form-check-label" for="t_025_lainnya">Lainnya</label>
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
                    <input class="form-check-input" type="radio" id="t_011_mandiri" name="t_011" value="Mandiri">
                    <label class="form-check-label" for="t_011_mandiri">Mandiri</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-1">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_011_bpjs" name="t_011" value="BPJS">
                    <label class="form-check-label" for="t_011_bpjs">BPJS</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="t_011_lainnya" name="t_011" value="Lainnya">
                    <label class="form-check-label" for="t_011_lainnya">Lainnya</label>
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
                    <input class="form-check-input" type="checkbox" id="t_012_tenang" name="t_012">
                    <label class="form-check-label" for="t_012_tenang">Tenang, kooperatif</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_012_kejiwaan" name="t_012">
                    <label class="form-check-label" for="t_012_kejiwaan">Kejiwaan; gelisah, murung, ketakutan</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="row align-items-center">
                <div class="col-8 mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_012_lainnya" name="t_012">
                    <input class="form-control" type="text" name="v_25" id="v_25" disabled="disabled">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row align-items-center">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="t_012_perubahan" name="t_012">
                    <label class="form-check-label" for="t_012_perubahan">Perubahan suasana hati, gangguan tidur, sulit berpikir</label>
                  </div>
                </div>
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
              <input class="form-check-input" type="radio" id="t_013_rumah" name="t_013" value="Rumah">
              <label class="form-check-label" for="t_013_rumah">Rumah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_013_lainnya" name="t_013" value="Lainnya">
              <label class="form-check-label" for="t_013_lainnya">Lain-lain, sebutkan</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_26" id="v_26">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_013_panti" name="t_013" value="Panti">
              <label class="form-check-label" for="t_013_panti">Panti</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Diasuh/dirawat oleh :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_014_orangtua" name="t_014" value="Orang tua kandung">
              <label class="form-check-label" for="t_014_orangtua">Orang tua kandung</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_014_anggota" name="t_014" value="Anggota keluarga lain">
              <label class="form-check-label" for="t_014_anggota">Anggota keluarga lain</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_014_tiri" name="t_014" value="Bapak/ibu tiri">
              <label class="form-check-label" for="t_014_tiri">Bapak/ibu tiri</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_014_lainnya" name="t_014" value="Lain-lain ">
              <label class="form-check-label" for="t_014_lainnya">Lain-lain,</label>
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
              <input class="form-check-input" type="radio" id="t_015_sekolah" name="t_015" value="Sekolahumum">
              <label class="form-check-label" for="t_015_sekolah">Sekolah umum</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_015_sekolahink" name="t_015" value="Sekolahinklusi">
              <label class="form-check-label" for="t_015_sekolahink">Sekolah inklusi</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="v_28" id="v_28">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_015_tidak" name="t_015" value="Tidaksekolah">
              <label class="form-check-label" for="t_015_tidak">Tidak sekolah</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Penurunan prestasi sekolah :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_016_tidak" name="t_016" value="Tidak">
              <label class="form-check-label" for="t_016_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_016_ya" name="t_016" value="Ya, jelaskan">
              <label class="form-check-label" for="t_016_ya">Ya,Jelaskan</label>
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
              <input class="form-check-input" type="radio" id="t_017_tidak" name="t_017" value="Tidak pernah">
              <label class="form-check-label" for="t_017_tidak">Tidak pernah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_017_pernah" name="t_017" value="Pernah, jelaskan">
              <label class="form-check-label" for="t_017_pernah">Pernah,Jelaskan</label>
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
              <input class="form-check-input" type="radio" id="t_018_ya" name="t_018" value="Ya">
              <label class="form-check-label" for="t_018_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_018_tidak" name="t_018" value="Tidak">
              <label class="form-check-label" for="t_018_tidak">Tidak</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Penelantaran fisik/mental :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_019_pernah" name="t_019" value="Pernah">
              <label class="form-check-label" for="t_019_pernah">Pernah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_019_tidak" name="t_019" value="Tidak">
              <label class="form-check-label" for="t_019_tidak">Tidak</label>
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
              <input class="form-check-input" type="radio" id="t_020_selalu" name="t_020" value="Selalu">
              <label class="form-check-label" for="t_020_selalu">Selalu</label>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_020_kadang" name="t_020" value="Kadang">
              <label class="form-check-label" for="t_020_kadang">Kadang</label>
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
              <input class="form-check-input" type="radio" id="t_020_tidak" name="t_020" value="Tidak">
              <label class="form-check-label" for="t_020_tidak">Tidak pernah</label>
            </div>
          </div>
          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div>
                <label>Perlu rohaniawan :</label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_021_tidak" name="t_021" value="Tidak">
              <label class="form-check-label" for="t_021_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_021_ya" name="t_021" value="Ya">
              <label class="form-check-label" for="t_021_ya">Ya,Jelaskan</label>
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
              <input class="form-check-input" type="radio" id="t_022_composmentis" name="t_022" value="Compos mentis">
              <label class="form-check-label" for="t_022_composmentis">Compos mentis</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_022_apatis" name="t_022" value="Apatis">
              <label class="form-check-label" for="t_022_apatis">Apatis</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_022_coma" name="t_022" value="Coma">
              <label class="form-check-label" for="t_022_coma">Coma</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_022_somolen" name="t_022" value="Somnolen">
              <label class="form-check-label" for="t_022_somolen">Somnolen</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_022_soporocoma" name="t_022" value="Soporocoma">
              <label class="form-check-label" for="t_022_soporocoma">Soporocoma</label>
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

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Kepala :</b></label>
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_normosefali" name="t_030" value="Normosefali">
              <label class="form-check-label" for="t_030_normosefali">Normosefali</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_mikrosefali" name="t_030" value="Mikrosefali">
              <label class="form-check-label" for="t_030_mikrosefali">Mikrosefali</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_030_hidrosefali" name="t_030" value="Hidrosefali">
              <label class="form-check-label" for="t_030_hidrosefali">Hidrosefali</label>
            </div>
          </div>



          <div class="row align-items-center">
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

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Ubun-ubun</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_032" id="t_032">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Mata :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Konjungtiva:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_033_merahmuda" name="t_033" value="Merah muda">
              <label class="form-check-label" for="t_033_merahmuda">Merah muda</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_033_pucat" name="t_033" value="Pucat">
              <label class="form-check-label" for="t_033_pucat">Pucat</label>
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
              <input class="form-check-input" type="radio" id="t_034_normal" name="t_034" value="Normal">
              <label class="form-check-label" for="t_034_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_034_ikterus" name="t_034" value="Ikterus">
              <label class="form-check-label" for="t_034_ikterus">Ikterus,</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
              <input class="form-check-input" type="radio" name="t_034" id="t_034_lainnya" value="">
              <label class="form-check-label" for="t_034_lainnya">Lain-lain</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_42" id="v_42">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Leher :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Bentuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_035_normal" name="t_035">
              <label class="form-check-label" for="t_035_normal">Normal</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan2" type="radio" id="t_036_tidak" name="t_036" value="Tidak">
              <label class="form-check-label" for="t_036_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input hambatan2" type="radio" id="t_036_ya" name="t_036" value="Ya">
              <label class="form-check-label" for="t_036_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_43" id="v_43">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Pembesaran vena jugularis:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_037_tidak" name="t_037" value="Tidak">
              <label class="form-check-label" for="t_037_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_037_ya" name="t_037" value="Ya">
              <label class="form-check-label" for="t_037_ya">Ya</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Dada :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Bentuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_038_simetris" name="t_038">
              <label class="form-check-label" for="t_038_simetris">Simetris</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_039_tidak" name="t_039" value="Tidak">
              <label class="form-check-label" for="t_039_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_039_ya" name="t_039" value="Ya">
              <label class="form-check-label" for="t_039_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_44" id="v_44">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Irama nafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_040_reguler" name="t_040" value="Reguler">
              <label class="form-check-label" for="t_040_reguler">Reguler</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_40_irreguler" name="t_040" value="Irreguler">
              <label class="form-check-label" for="t_40_irreguler">Irreguler</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_040_apnea" name="t_040" value="Apnea">
              <label class="form-check-label" for="t_040_apnea">Apnea</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Suara Nafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_041_normal" name="t_041">
              <label>Normal</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Wheezing:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_042_tidak" name="t_042" value="Tidak">
              <label class="form-check-label" for="t_042_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_042_ya" name="t_042" value="Ya">
              <label class="form-check-label" for="t_042_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Batuk:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_043_tidak" name="t_043" value="Tidak">
              <label class="form-check-label" for="t_043_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_043_ya" name="t_043" value="Ya">
              <label class="form-check-label" for="t_043_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Sekret:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_044_tidak" name="t_044" value="Tidak ada">
              <label class="form-check-label" for="t_044_tidak">Tidak ada</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_044_ada" name="t_044" value="ada">
              <label class="form-check-label" for="t_044_ada">Ada</label>
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

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Abdomen :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Kembung:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_045_tidak" name="t_045" value="Tidak">
              <label class="form-check-label" for="t_045_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_045_ya" name="t_045" value="Ya">
              <label class="form-check-label" for="t_045_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Nyeri:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_046_tidak" name="t_046" value="Tidak">
              <label class="form-check-label" for="t_046_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_046_ya" name="t_046" value="Ya">
              <label class="form-check-label" for="t_046_ya">Ya</label>
            </div>
            <div class="col-1">
              <label>Lokasi</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_47" id="v_47">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Bising usus:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_047_normal" name="t_047" value="Normal">
              <label class="form-check-label" for="t_047_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_047_abnormal" name="t_047" value="Abnormal">
              <label class="form-check-label" for="t_047_abnormal">Abnormal</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_13" id="v_13">
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Ekstremitas :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Akral:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_048_hangat" name="t_048" value="Hangat">
              <label class="form-check-label" for="t_048_hangat">Hangat</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_048_dingin" name="t_048" value="Dingin">
              <label class="form-check-label" for="t_048_dingin">Dingin</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kelainan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_049_tidak" name="t_049" value="Tidak">
              <label class="form-check-label" for="t_049_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_049_ya" name="t_049" value="Ya">
              <label class="form-check-label" for="t_049_ya">Ya</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_48" id="v_48">
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Pergerakan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_050_aktif" name="t_050" value="Aktif">
              <label class="form-check-label" for="t_050_aktif">Aktif</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_050_pasif" name="t_050" value="Pasif">
              <label class="form-check-label" for="t_050_pasif">Pasif</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kekuatan otot:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_051_kuat" name="t_051" value="Kuat">
              <label class="form-check-label" for="t_051_kuat">Kuat</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_051_lemah" name="t_051" value="Lemah">
              <label class="form-check-label" for="t_051_lemah">Lemah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_051_tidakada" name="t_051" value="Tidak ada">
              <label class="form-check-label" for="t_051_tidakada">Tidak ada</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kontraktur:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_052_tidak" name="t_052" value="Tidak">
              <label class="form-check-label" for="t_052_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_052_ya" name="t_052" value="Ya">
              <label class="form-check-label" for="t_052_ya">Ya</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Kulit :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Warna:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_normal" name="t_053" value="Normal">
              <label class="form-check-label" for="t_053_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_ikterus" name="t_053" value="Ikterus">
              <label class="form-check-label" for="t_053_ikterus">Ikterus</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_053_sianosis" name="t_053" value="Sianosis">
              <label class="form-check-label" for="t_053_sianosis">Sianosis</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Membran mukosa:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_054_lembab" name="t_054" value="Lembab">
              <label class="form-check-label" for="t_054_lembab">Lembab</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_054_kering" name="t_054" value="Kering">
              <label class="form-check-label" for="t_054_kering">Kering</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_054_stomatitis" name="t_054" value="Stomatitis">
              <label class="form-check-label" for="t_054_stomatitis">Stomatitis</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Hematome:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_055_tidak" name="t_055" value="Tidak">
              <label class="form-check-label" for="t_055_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_055_ya" name="t_055" value="ya">
              <label class="form-check-label" for="t_055_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Luka:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_056_tidak" name="t_056" value="tidak">
              <label class="form-check-label" for="t_056_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_056_ya" name="t_056" value="ya">
              <label class="form-check-label" for="t_056_ya">Ya</label>
            </div>
            <div class="col-1">
              <label>Lokasi</label>
            </div>
            <div class="col-2">
              <input class="form-control" type="text" name="v_49" id="v_49">
            </div>
          </div>

          <div class="row align-items-center">
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
              <input class="form-check-input" type="radio" id="t_057_tidak" name="t_057" value="">
              <label class="form-check-label" for="t_057_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_057_ya" name="t_057" value="">
              <label class="form-check-label" for="t_057_ya">Ya</label>
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

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-5">
                <label><b>Pernafasan :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Kesulitan bernafas:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_058_tidak" name="t_058" value="Tidak">
              <label class="form-check-label" for="t_058_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_058_ya" name="t_058" value="Ya">
              <label class="form-check-label" for="t_058_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
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
              <input class="form-control" type="text" name="t_60" id="t_60" required="required">
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
              <input class="form-check-input hambatan3" type="checkbox" id="t_059_nasalcanule" name="t_059">
              <label class="form-check-label" for="t_059_nasalcanule">Nasal canule</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_059_sungkup" name="t_059">
              <label class="form-check-label" for="t_059_sungkup">Sungkup</label>
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
              <input class="form-check-input hambatan3" type="checkbox" id="t_059_rebrethingmask" name="t_059">
              <label class="form-check-label" for="t_059_rebrethingmask">Re-breathing mask</label>
            </div>
            <div class="col-2">
              <input class="form-check-input hambatan3" type="checkbox" id="t_059_headbox" name="t_059">
              <label class="form-check-label" for="t_059_headbox">Head box</label>
            </div>
          </div>

          <hr>

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-9">
                <label><b>Makanan dan Minuman :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>Nafsu makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_061_baik" name="t_061" value="Baik">
              <label class="form-check-label" for="t_061_baik">Baik</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_061_tidak" name="t_061" value="Tidak">
              <label class="form-check-label" for="t_061_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Jenis makanan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_062_bubur" name="t_062">
              <label class="form-check-label" for="t_062_bubur">Bubur</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_062_nasi" name="t_062">
              <label class="form-check-label" for="t_062_nasi">Nasi</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_062_susu" name="t_062">
              <label class="form-check-label" for="t_062_susu">Susu formula</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Jumlah</label>
            </div>
            <div class="col-1">
              <input class="form-control" type="text" name="t_063" id="t_063">
            </div>
            <div class="col-1">
              <label>/hari</label>
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
              <input class="form-control" type="text" name="t_064" id="t_064">
            </div>
            <div class="col-2">
              <label>x/menit</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kesulitan makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_065_tidak" name="t_065" value="Tidak">
              <label class="form-check-label" for="t_065_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_065_ya" name="t_065" value="">
              <label class="form-check-label" for="t_065_ya">Ya</label>

              <div class="col-3">
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">

              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Kebiasaan makan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_066_mandiri" name="t_066" value="Mandiri">
              <label class="form-check-label" for="t_066_mandiri">Mandiri</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_066_dibantu" name="t_066" value="Dibantu">
              <label class="form-check-label" for="t_066_dibantu">Dibantu</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_066_ketergantungan" name="t_066" value="Ketergantungan">
              <label class="form-check-label" for="t_066_ketergantungan">Ketergantungan</label>
            </div>
          </div>

          <div class="row align-items-center">
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
              <input class="form-check-input" type="radio" id="t_067_tidak" name="t_067" value="Tidak">
              <label class="form-check-label" for="t_067_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_067_ya" name="t_067" value="Ya">
              <label class="form-check-label" for="t_067_ya">Ya</label>
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
              <label>Muntah</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_068_tidak" name="t_068" value="Tidak">
              <label class="form-check-label" for="t_068_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_068_ya" name="t_068" value="Ya">
              <label class="form-check-label" for="t_068_ya">Ya</label>
            </div>
          </div>

          <div class="row align-items-center">
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

          <div class="row align-items-center mt-3">
            <div class="col-md-3">
              <div class="col-4">
                <label><b>Eliminasi :</b></label>
              </div>
            </div>
            <div class="col-2">
              <label>BAK:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_069_normal" name="t_069" value="Normal">
              <label class="form-check-label" for="t_069_normal">Normal</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_069_tidak" name="t_069" value="">
              <label class="form-check-label" for="t_069_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Masalah perkemihan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_070_tidakada" name="t_070" value="Tidak ada">
              <label class="form-check-label" for="t_070_tidakada">Tidak ada</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_070_ada" name="t_070" value="Ada">
              <label class="form-check-label" for="t_070_ada">Ada</label>
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
              <input class="form-check-input hambatan4" type="checkbox" id="t_071_retensiurine" name="t_071">
              <label class="form-check-label" for="t_071_retensiurine">Retensi urine</label>
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
              <input class="form-check-input hambatan4" type="checkbox" id="t_071_inkontinensia" name="t_071">
              <label class="form-check-label" for="t_071_inkontinensia">Inkontinensia</label>
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
              <input class="form-check-input hambatan4" type="checkbox" id="t_071_dialysis" name="t_071">
              <label class="form-check-label" for="t_071_dialysis">Dialysis</label>
            </div>
          </div>

          <div class="row align-items-center mt-1">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Warna urine:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_kuning" name="t_072" value="Kuning jernih">
              <label class="form-check-label" for="t_072_kuning">Kuning jernih</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_keruh" name="t_072" value="Keruh">
              <label class="form-check-label" for="t_072_keruh">Keruh</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_072_kemerahan" name="t_072" value="Kemerahan">
              <label class="form-check-label" for="t_072_kemerahan">Kemerahan</label>
            </div>
          </div>

          <div class="row align-items-center">
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

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>BAB:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_073_normal" name="t_073" value="Normal">
              <label class="form-check-label" for="t_073_normal">Normal</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_073_tidak" name="t_073" value="Tidak">
              <label class="form-check-label" for="t_073_tidak">Tidak</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Masalah defekasi:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_074_tidakada" name="t_074" value="Tidak ada">
              <label class="form-check-label" for="t_074_tidakada">Tidak ada</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_074_ada" name="t_074" value="Ada">
              <label class="form-check-label" for="t_074_ada">Ada</label>
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
              <input class="form-check-input hambatan5" type="checkbox" id="t_075_stoma" name="t_075">
              <label class="form-check-label" for="t_075_stoma">Stoma</label>
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
              <input class="form-check-input hambatan5" type="checkbox" id="t_075_atresiaani" name="t_075">
              <label class="form-check-label" for="t_075_atresiaani">Athresia ani</label>
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
              <input class="form-check-input hambatan5" type="checkbox" id="t_075_konstipasi" name="t_075">
              <label class="form-check-label" for="t_075_konstipasi">Konstipasi</label>
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
              <input class="form-check-input hambatan5" type="checkbox" id="t_075_diare" name="t_075">
              <label class="form-check-label" for="t_075_diare">Diare</label>
            </div>
          </div>

          <div class="row align-items-center mt-1">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Warna fases:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_076_kuning" name="t_076" value="Kuning">
              <label class="form-check-label" for="t_076_kuning">Kuning</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_076_kecoklatan" name="t_076" value="">
              <label class="form-check-label" for="t_076_kecoklatan">Kecoklatan</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_076_kehitaman" name="t_076" value="">
              <label class="form-check-label" for="t_076_kehitaman">Kehitaman</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <label>Perdarahan:</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_077_tidak" name="t_077" value="Tidak">
              <label class="form-check-label" for="t_077_tidak">Tidak</label>
            </div>
            <div class="col-1">
              <input class="form-check-input" type="radio" id="t_077_ya" name="t_077" value="">
              <label class="form-check-label" for="t_077_ya">Ya</label>
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
              <input class="form-control" type="text" name="t_078" id="t_078">
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
              <input class="form-check-input" type="radio" id="t_079_tidak" name="t_079" value="Tidak">
              <label class="form-check-label" for="t_079_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_079_ya" name="t_079" value="Ada">
              <label class="form-check-label" for="t_079_ya">Ya</label>
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
              <input class="form-check-input" type="radio" id="t_080_tidak" name="t_080" value="Tidak">
              <label class="form-check-label" for="t_080_tidak">Tidak</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_080_ya" name="t_080" value="Ya">
              <label class="form-check-label" for="t_080_ya">Ya</label>
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
              <input class="form-check-input" type="radio" id="t_081_normal" name="t_081" value="Normal/mandiri">
              <label class="form-check-label" for="t_081_normal">Normal/mandiri</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_081_kursiroda" name="t_081" value="Menggunakan kursi roda">
              <label class="form-check-label" for="t_081_kursiroda">Menggunakan korsi roda</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="col-4">
              </div>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_081_dibantu" name="t_081" value="Dibantu">
              <label class="form-check-label" for="t_081_dibantu">Dibantu</label>
            </div>
            <div class="col-2">
              <div class="col-12">
                <input class="form-check-input" type="radio" id="t_081_lainnya" name="t_081" value="Lainnya">
                <label class="form-check-label" for="t_081_lainnya">Lain-lain</label>
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
                  <input class="form-check-input" type="radio" id="t_082_tidak" name="t_082" value="Tidak">
                  <label class="form-check-label" for="t_082_tidak">Tidak</label>
                </div>
                <div class="col-2">
                  <input class="form-check-input" type="radio" id="t_082_ya" name="t_082" value="Ya">
                  <label class="form-check-label" for="t_082_ya">Ya</label>
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
                    <input class="form-check-input" type="checkbox" id="t_083_pain" name="t_083" value="" disabled="disabled">
                    <label class="form-check-label" for="t_083_pain">PAIN SCORE 0-10 NUMERICAL RATING</label>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div>

                    <input type="range" id="t_088_rangepain" name="t_088" min="0" max="10" value="0" list="markers" style="width: 83%;" disabled="disabled" />

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
                      <input class="form-check-input" type="checkbox" id="t_084_wong" name="t_084" value="" disabled="disabled">
                      <label class="form-check-label" for="t_084_wong">WONG-BAKER FACE PAIN Rating Scale</label>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div>

                      <input type="range" id="t_089_rangewong" name="t_089" min="0" max="10" value="0" list="markers" style="width: 87%;" disabled="disabled" />

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
                            <input class="form-check-input" type="radio" id="t_085_tumpul" name="t_085" value="" disabled="disabled">
                            <label class="form-check-label" for="t_085_tumpul">Tumpul</label>
                          </div>
                          <div class="col-2">
                            <input class="form-check-input" type="radio" id="t_085_tajam" name="t_085" value="" disabled="disabled">
                            <label class="form-check-label" for="t_085_tajam">Tajam</label>
                          </div>
                          <div class="col-2">
                            <input class="form-check-input" type="radio" id="t_085_panas" name="t_085" value="" disabled="disabled">
                            <label class="form-check-label" for="t_085_panas">Panas</label>
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
                                <input class="form-check-input" type="radio" id="t_086_tidak" name="t_086" value="" disabled="disabled">
                                <label class="form-check-label" for="t_086_tidak">Tidak</label>
                              </div>
                              <div class="col-2">
                                <input class="form-check-input" type="radio" id="t_086_ya" name="t_086" value="" disabled="disabled">
                                <label class="form-check-label" for="t_086_ya">Ya</label>
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
                                  <input class="form-check-input" type="radio" id="t_087_jarang" name="t_087" value="" disabled="disabled">
                                  <label class="form-check-label" for="t_087_jarang">Jarang</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-check-input" type="radio" id="t_087_hilangtimbul" name="t_087" value="" disabled="disabled">
                                  <label class="form-check-label" for="t_087_hilangtimbul">Hilang Timbul</label>
                                </div>
                              </div>
                              <div class="row align-items-center">
                                <div class="col-7">
                                  <input class="form-check-input" type="radio" id="t_087_terusmenerus" name="t_087" value="" disabled="disabled">
                                  <label class="form-check-label" for="t_087_terusmenerus">Terus Menerus</label>
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
              <input class="form-check-input" type="checkbox" id="t_090_minumobat" name="t_090">
              <label class="form-check-label" for="t_090_minumobat">Minum Obat</label>
            </div>
            <div class="col-md-2">
              <input class="form-check-input" type="checkbox" id="t_090_istirahat" name="t_090">
              <label class="form-check-label" for="t_090_istirahat">Istirahat</label>
            </div>
            <div class="col-2">
              <input class="form-check-input" type="checkbox" id="t_090_lainnya" name="t_090">
              <label class="form-check-label" for="t_090_lainnya">Lain-lain, sebutkan</label>
            </div>
            <div class="col-4">
              <div class="form-input">
                <input class="form-control" type="text" name="v_65" id="v_65" disabled="disabled">
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <input class="form-check-input" type="checkbox" id="t_090_musik" name="t_090">
              <label class="form-check-label" for="t_090_musik">Mendengarkan musik</label>
            </div>
            <div class="col-md-3">
              <input class="form-check-input" type="checkbox" id="t_090_mengganti" name="t_090">
              <label class="form-check-label" for="t_090_mengganti">Mengganti posisi tidur</label>
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
                  <input class="form-check-input jumlah" type="radio" value="0" id="t_091_tidakmenurun" name="t_091">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>b. Tidak yakin / tidak tahu / terasa baju longgar</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_091_tidakyakin" name="t_091">
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
                  <input class="form-check-input jumlah" type="radio" value="1" id="t_091_berat" name="t_091">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>8 - 10 Kg</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_091_berat1" name="t_091">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>11 - 15 Kg</td>
              <td class="text-center">5</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="5" id="t_091_berat2" name="t_091">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>> 15 Kg</td>
              <td class="text-center">4</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="4" id="t_091_berat3" name="t_091">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>Tidak yakin penurunannya</td>
              <td class="text-center">2</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="2" id="t_091_tidak" name="t_091">
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
                  <input class="form-check-input jumlah" type="radio" value="0" id="t_092_tidak" name="t_092">
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>b. Ya</td>
              <td class="text-center">1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah" type="radio" value="1" id="t_092_ya" name="t_092">
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
                <input type="text" size="7px" id="t_095" readonly />
              </td>
              <td></td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td colspan="3">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <label class="col-form-label">Pasien Dengan Diagnosis Khusus </label>
                    </div>
                    <div class="col-md-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="t_093_tidak" name="t_093">
                        <label class="form-check-label" for="t_093_tidak">Tidak</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="row align-items-center">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="t_093_ya" name="t_093">
                          <label class="form-check-label" for="t_093_ya">Ya</label>
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
                              <input class="form-check-input" type="checkbox" id="t_094_dm" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_dm">DM</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_ginjal" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_ginjal">Ginjal</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_hati" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_hati">Hati</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_paru" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_paru">Paru</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_stroke" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_stroke">Stroke</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_kanker" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_kanker">Kanker</label>
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
                              <input class="form-check-input" type="checkbox" id="t_094_geriatri" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_geriatri">Geriatri</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="row align-items-center">
                          <div class="col-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_jantung" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_jantung">Jantung</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="row align-items-center">
                          <div class="col-5">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="t_094_lainnya" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_lainnya">Lain-Lain</label>
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
                              <input class="form-check-input" type="checkbox" id="t_094_imun" name="t_094" disabled="disabled">
                              <label class="form-check-label" for="t_094_imun">Penurunan Imunitas</label>
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
              <input class="form-check-input" type="radio" id="t_096_mandiri" name="t_096" value="Mandiri">
              <label class="form-check-label" for="t_096_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_096_dibantu" name="t_096" value="Dibantu">
              <label class="form-check-label" for="t_096_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_096_ketergantungan" name="t_096" value="Ketergantungan Penuh">
              <label class="form-check-label" for="t_096_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Toileting</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_097_mandiri" name="t_097" value="Mandiri">
              <label class="form-check-label" for="t_097_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_097_dibantu" name="t_097" value="Dibantu">
              <label class="form-check-label" for="t_097_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_097_ketergantungan" name="t_097" value="Ketergantungan Penuh">
              <label class="form-check-label" for="t_097_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Berpakaian</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_098_mandiri" name="t_098" value="Mandiri">
              <label class="form-check-label" for="t_098_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_098_dibantu" name="t_098" value="Dibantu">
              <label class="form-check-label" for="t_098_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_098_ketergantungan" name="t_098" value="Ketergantungan Penuh">
              <label class="form-check-label" for="t_098_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Bergerak di tempat tidur</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_099_mandiri" name="t_099" value="Mandiri">
              <label class="form-check-label" for="t_099_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_099_dibantu" name="t_099" value="Dibantu">
              <label class="form-check-label" for="t_099_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_099_ketergantungan" name="t_099" value="Ketergantungan Penuh">
              <label class="form-check-label" for="t_099_ketergantungan">Ketergantungan Penuh</label>
            </div>
          </div>
          <div class="row align-items-center">


            <div class="col-3">
              <label>Berpindah tempat</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_100_mandiri" name="t_100" value="Mandiri">
              <label class="form-check-label" for="t_100_mandiri">Mandiri</label>
            </div>

            <div class="col-2">
              <input class="form-check-input" type="radio" id="t_100_dibantu" name="t_100" value="Dibantu">
              <label class="form-check-label" for="t_100_dibantu">Dibantu</label>
            </div>

            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_100_ketergantungan" name="t_100" value="Ketergantungan Penuh">
              <label class="form-check-label" for="t_100_ketergantungan">Ketergantungan Penuh</label>
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
                  <input class="form-check-input jumlah2" type="radio" id="t_101_ya" name="t_101" value="25">
                </div>
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input jumlah2" type="radio" id="t_101_tidak" name="t_101" value="0">
                </div>
              </td>
            </tr>

            <tr>
              <td>Diagnosa > 2</td>
              <td>Ya</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_102_ya" name="t_102" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_102_tidak" name="t_102" value="0">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Berpegangan pada perabot</td>
              <td class="text-center">30</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_102_berpegangan" name="t_102" value="30">
              </td>
            </tr>

            <tr>
              <td>Alat Bantu Jalan</td>
              <td>Tongkat/alat penopang</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_103_tongkat" name="t_103" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak ada/kursi roda/perawat/tirah baring</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_103_tidak" name="t_103" value="0">
              </td>
            </tr>

            <tr>
              <td>Terpasang infus</td>
              <td>Ya</td>
              <td class="text-center">20</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_104_ya" name="t_104" value="20">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Tidak</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_104_tidak" name="t_104" value="0">
              </td>
            </tr>

            <tr>
              <td>Gaya Berjalan</td>
              <td>Terganggu</td>
              <td class="text-center">20</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_105_terganggu" name="t_105" value="20">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Lemah</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_105_lemah" name="t_105" value="0">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Normal/tirah baring/imobilisasi</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_105_normal" name="t_105" value="0">
              </td>
            </tr>

            <tr>
              <td>Status Mental</td>
              <td>Sering lupa akan keterbatasan yang dimiliki</td>
              <td class="text-center">15</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_106_lupa" name="t_106" value="15">
              </td>
            </tr>

            <tr>
              <td></td>
              <td>Sadar akan kemampuan diri</td>
              <td class="text-center">0</td>
              <td>
                <input class="form-check-input jumlah2" type="radio" id="t_106_sadar" name="t_106" value="0">
              </td>
            </tr>


            <tr>
              <td colspan="3">

                <div>
                  <label>Kriteria resiko cedera/jatuh : </label>

                  <div class="row align-items-center">
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_108_tidakberisiko" name="t_108" value="0-24 Tidak berisiko">
                      <label class="form-check-label" for="t_108_tidakberisiko">0-24 Tidak berisiko</label>
                    </div>
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_108_rendahberisiko" name="t_108" value="25-50 Rendah berisiko">
                      <label class="form-check-label" for="t_108_rendahberisiko">25-50 Rendah berisiko</label>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-3">
                      <input class="form-check-input" type="radio" id="t_108_risikotinggi" name="t_108" value="50 Risiko tinggi">
                      <label class="form-check-label" for="t_108_risikotinggi">> 50 Risiko tinggi</label>
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
              <input class="form-check-input" type="radio" id="t_110_tidakada" name="t_110">
              <label class="form-check-label" for="t_110_tidakada">Tidak ada</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_pendengaran" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_pendengaran">Pendengaran</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_penglihatan" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_penglihatan">Penglihatan</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_kognitif" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_kognitif">Kognitif</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <input class="form-check-input" type="radio" id="t_110_ya" name="t_110" value="Ya">
              <label class="form-check-label" for="t_110_ya">Ya</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_emosi" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_emosi">Emosi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_budaya" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_budaya">Budaya/kepercayaan</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_109_bahasa" name="t_109" disabled="disabled">
              <label class="form-check-label" for="t_109_bahasa">Bahasa</label>
            </div>
          </div>

          <div class="row">
            <div class="col-3"></div>
            <div class="col-md-6 row mb-3">
              <div class="col-3 col-form-label">
                <input class="form-check-input" type="checkbox" id="t_109_lainnya" name="t_109" disabled="disabled">
                <label class="form-check-label" for="t_109_lainnya">Lain-lain</label>
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
              <input class="form-check-input" type="checkbox" id="t_111_stimulasi" name="t_111">
              <label class="form-check-label" for="t_111_stimulasi">Stimulasi tumbuh kembang</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_nutrisi" name="t_111">
              <label class="form-check-label" for="t_111_nutrisi">Nutrisi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_perawatanluka" name="t_111">
              <label class="form-check-label" for="t_111_perawatanluka">Perawatan luka</label>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_perawatanstoma" name="t_111">
              <label class="form-check-label" for="t_111_perawatanstoma">Perawatan stoma</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_manajemennyeri" name="t_111">
              <label class="form-check-label" for="t_111_manajemennyeri">Manajemen nyeri</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_medikasi" name="t_111">
              <label class="form-check-label" for="t_111_medikasi">Medikasi</label>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_rehabilitasi" name="t_111">
              <label class="form-check-label" for="t_111_rehabilitasi">Rehabilitasi</label>
            </div>
            <div class="col-3">
              <input class="form-check-input" type="checkbox" id="t_111_jaminanfinansial" name="t_111">
              <label class="form-check-label" for="t_111_jaminanfinansial">Jaminan finansial</label>
            </div>
            <div class="col-md-6 row mb-3">
              <div class="col-3 col-form-label">
                <input class="form-check-input" type="checkbox" id="t_111_lainnya" name="t_111">
                <label class="form-check-label" for="t_111_lainnya">Lain-lain</label>
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
                  <input class="form-check-input" type="radio" id="t_112_ya" name="t_112" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_112_tidak" name="t_112" value="Tidak">
                </div>
              </td>
              <td>Riwayat gangguan mental, bunuh diri, dll</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_118_ya" name="t_118" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_118_tidak" name="t_118" value="Tidak">
                </div>
              </td>
            </tr>
            <tr>
              <td>Pasien dengan resiko tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_113_ya" name="t_113" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_113_tidak" name="t_113" value="Tidak">
                </div>
              </td>
              <td>Pasien redmisi RS dlm 1 bulan diagnose sama</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_119_ya" name="t_119" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_119_tidak" name="t_119" value="Tidak">
                </div>
              </td>
            </tr>
            <tr>
              <td>Kasus dengan penyakit kronik > 1 diagnosa</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_114_ya" name="t-114" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_114_tidak" name="t-114" value="Tidak">
                </div>
              </td>
              <td>Perkiraan asuhan dengan biaya finansial tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_120_ya" name="t_120" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_120_tidak" name="t_120" value="Tidak">
                </div>
              </td>
            </tr>
            <tr>
              <td>Status fungsional rendah, kebutuhan ADL tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_115_ya" name="t_115" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_115_tidak" name="t_115" value="Tidak">
                </div>
              </td>
              <td>Kasus yang melebihi rata rata hari rawat</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_121_ya" name="t_121" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_121_tidak" name="t_121" value="Tidak">
                </div>
              </td>
            </tr>
            <tr>
              <td>Pasien dgn Riwayat penggunaan peralatan medis</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_116_ya" name="t_116" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_116_tidak" name="t_116" value="Tidak">
                </div>
              </td>
              <td>Pasien dengan komplain tinggi</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_122_ya" name="t_122" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_122_tidak" name="t_122" value="Tidak">
                </div>
              </td>
            </tr>
            <tr>
              <td>Dirujuk ke
                <input class="form-check-input" type="checkbox" id="t_124_dirujuk" name="t_124">
                <div class="input">
                  <input class="form-control" type="text" name="v_70" id="v_70" disabled="disabled">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_117_ya" name="t_117" value="Ya" disabled="disabled">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_117_tidak" name="t_117" value="Tidak" disabled="disabled">
                </div>
              </td>
              <td>Pasien butuh kotinuitas pelayanan</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_123_ya" name="t_123" value="Ya">
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="t_123_tidak" name="t_123" value="Tidak">
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