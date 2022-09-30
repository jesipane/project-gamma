<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Purchases extends BaseController
{
    public function index()
    {
        $data['main_view']='purchases/pembelian';
        return view('layout',$data);
    }

    public function form_pembelian()
    {
        $data['main_view']='purchases/form_pembelian';
        return view('layout',$data);
    }
}
