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

    public function index()
    {
        return view('halaman_utama');
    }

    public function datapasien()
    {

        $datatabel['daftarpasien'] = $this->mdata->tampilsemuadata();

        return view('dashboard/datapasien', $datatabel);
    }
}
