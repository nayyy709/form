<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Assessment_model;



class Formulir extends BaseController
{


    protected $mdata;
    public function __construct()
    {
        $this->mdata = new Assessment_model();
    }

    public function index(): string
    {
        return view('halaman_utama');
    }
    public function form1(): string
    {

        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform1' => $tampildata,
        );

        return view('formulir/form_persetujuan_tindakan', $info);
    }
    public function form2(): string
    {

        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform2' => $tampildata,
        );

        return view('formulir/pengkajian_pra_bedah', $info);
    }
    public function form3(): string
    {

        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform3' => $tampildata,
        );

        return view('formulir/inform_consent', $info);
    }
    public function form4(): string
    {

        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform4' => $tampildata,
        );

        return view('formulir/pengkajian_awal_keperawatan_dan_medis_pasien_rawat_inap_dewasa', $info);
    }
}
