<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('halaman_utama');
    }
    public function form1(): string
    {
        return view('formulir/form_persetujuan_tindakan');
    }
    public function form2(): string
    {
        return view('formulir/pengkajian_pra_bedah');
    }
    public function form3(): string
    {
        return view('formulir/inform_consent');
    }
    public function form4(): string
    {
        return view('formulir/pengkajian_awal_keperawatan_dan_medis_pasien_rawat_inap_dewasa');
    }
}
