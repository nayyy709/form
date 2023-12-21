<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function index()
    {
        return view('halamandepan');
    }
    public function halaman()
    {
        return view('halaman_utama');
    }
    public function form1()
    {
        return view('formulir/formulir1');
    }
    public function form2()
    {
        return view('formulir/formulir2');
    }
    public function form3()
    {
        return view('formulir/formulir3');
    }
    public function form4()
    {
        return view('formulir/formulir4');
    }
}
