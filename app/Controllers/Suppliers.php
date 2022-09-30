<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Suppliers extends BaseController
{
    public function index()
    {
        $data['main_view']='suppliers/supplier';
        return view('layout',$data);
    }

    public function form_supplier()
    {
        $data['main_view']='suppliers/form_supplier';
        return view('layout',$data);
    }
}
