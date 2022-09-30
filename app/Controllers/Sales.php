<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sales extends BaseController
{
    public function index()
    {
        $data['main_view']='sales/List_sale';
        return view('layout',$data);
    }
    public function form_sale()
    {
        $data['main_view']='sales/form_sale';
        return view('layout',$data);
    }
    
}
