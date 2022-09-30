<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Items extends BaseController
{
        protected $session;

        function _construct()
        {
                $this->session = \config\services::session();
        }
    public function index()
    {
            $data['main_view']='items/index';
            return view('layout',$data);
    }
   
    public function new()
    {
        $data['main_view']='items/new';
        return view('layout',$data);   
    }
    public function create()
    {
        if(!$this->validate([
                'nama Barang' => "required|alpha_numeric_space",
                'Berat' => 'required|alpha_numeric_space',
                'stok' => 'required|integer',
        ])) {
                $data['main_view'] = 'items/new';
                $data['erors'] = $this->validator;
                return view('layout',$data);
        }

        $data['main_view'] = 'item/index';
        $this->session->setFlashdata('succes','Barang Berhasil disimpan');
        return view('layout',$data);
    }
}
                                                        