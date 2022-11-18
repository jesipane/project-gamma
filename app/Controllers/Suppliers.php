<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Suppliers extends BaseController
{
    protected $session;

    function __construct()
    {
            $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        $supplier_model = new SupplierModel();
        $data['main_view']='suppliers/index';
        $data['suppliers'] = $supplier_model->get_all_data();
        return view('layout',$data);
    }


    public function new()
    {
        $data['main_view']='suppliers/new';
        return view('layout',$data);   
    }

    public function create()
    {
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'address' => "required|alpha_numeric_space",
            'number' => 'required|integer',
        ])) {
            $data['main_view'] = 'suppliers/new';
            $data['errors'] = $this->validator;
            return view('layout',$data);
        }

        $supplier_model = new SupplierModel();
        $supplier_model->create_data($this->request);
        $this->session->setFlashdata('success','Barang berhasil disimpan');
        return redirect()->to('/suppliers');
    }

    public function delete($id){
        $id = $this->request->getVar('id');
        $supplier_model = new SupplierModel();
        $supplier_model->delete($id);
        $this->session->setFlashdata('success','Barang Berhasil disimpan');
        return redirect()->to('/suppliers');
    }

    public function edit($id){
        $supplier_model = new SupplierModel();
        $data['main_view'] = 'suppliers/edit';
        $data['Supplier'] = $supplier_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id){
        if(!$this->validate([
                'name' => "required|alpha_numeric_space",
                'address' => 'required|alpha_numeric_space',
                'number' => 'required|integer',
        ])) {
                $data['main_view'] = 'suppliers/edit';
                $data['errors'] = $this->validator;
                return view('layout',$data);
        }

        $supplier_model = new SupplierModel();
        $supplier_model->create_data($this->request);
        $this->session->setFlashdata('success','Barang Berhasil diperbarui');
        return redirect()->to('/suppliers');
    }
}
