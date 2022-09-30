<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sessions extends BaseController
{
    protected $request,$session;

    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->session = \Config\Services::session();
    }  

         public function index()
    {
        if ($this->session->get('user_id'))  {
            return redirect()->to('/pages');
       }
           return view('sessions/index');
    }
    
        public function create()
    {
       $email = $this->request->getVar('email');
       $password = $this->request->getVar('password');
       if ($email == 'test@email.com' && $password == '123') {
        $this->session->set('user_id',1);
        return redirect()->to('/pages');
       } else {
        echo "email dan password yang anda masukkan tidak sesuai";
       }
    }

    public function logout()
    {
        $this->session->remove('user_id');
        return redirect()->to('/');
    }

    public function register()
    {
            $data['main_view']='Sessions/register';
            return view('layout',$data);
           
    }
   
    }
