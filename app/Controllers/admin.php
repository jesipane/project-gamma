<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data['main_view']='admin/login';
        return view('layout',$data);
    }
}
