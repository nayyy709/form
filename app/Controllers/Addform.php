<?php

namespace App\Controllers;

use App\Models\Addform_model;


class Addform extends BaseController
{
    protected $Addform_model;

    public function __construct()
    {
        $this->Addform_model = new Addform_model();
    }

    public function add_aksi()
    {
        $add_aksi['test'] = $this->Addform_model->simpandata();

        return redirect()->to('formulir/index');
    }
}
