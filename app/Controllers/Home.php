<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function index()
    {
        return view('halaman_utama');
    }
    public function form1()
    {
        return view('formulir/form_persetujuan_tindakan');
    }
    public function form2()
    {
        return view('formulir/pengkajian_pra_bedah');
    }
    public function form3()
    {
        return view('formulir/inform_consent');
    }
    public function form4()
    {
        return view('formulir/pengkajian_awal_keperawatan_dan_medis_pasien_rawat_inap_dewasa');
    }
}
