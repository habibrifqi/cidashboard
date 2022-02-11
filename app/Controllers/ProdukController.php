<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Produk;
use CodeIgniter\HTTP\Request;

class ProdukController extends BaseController
{
    public function index()
    {       
        $produkmodel = new Produk();
        $produk = $produkmodel->findAll();
        
        $data = [
            'active' => 'produk',
            'produk' => $produk
        ];
        return view('produk/index', $data);
    }

    public function create()
    {
        session();
        $data = [
            'active' => 'produk',
            'validation' =>  \Config\Services::validation()
        ]; 
        // return 'asdasd';
        return view('produk/create', $data);
    }

    public function save()
    {
        // validasi biar unique sayang 
        if(!$this->validate([
            'nama_produk' => [
                'rules' => 'required|is_unique[produk.nama_produk]',
                'errors' => [
                    'required' => '{field} harus di isi sayang',
                    'is_unique' => 'nama produk sudah terdaftar'
                    ]
                ]
            ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('produk/create')->withInput()->with('validation', $validation);
        }


        $produk = new Produk();
        $produk->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'merek' => $this->request->getVar('merek')
        ]);
        
        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $produkmodel = new Produk();
        // $produk = $produkmodel->find(['id' , $id]);
        $produk = $produkmodel->delete($id);

        // dd($produk);
        return redirect()->to('/produk');
    }

    public function edit($id)
    {
        session();
        $produkmodel = new Produk();
        // $produk = $produkmodel->where('id', $id)->findAll();
        $produk = $produkmodel->where('id', $id)->first();
        $data = [
            'active' => 'produk',
            'validation' =>  \Config\Services::validation(),
            'produk' => $produk
        ];
        // return 'asdasd';
        return view('produk/edit', $data);
    }

    public function update($id)
    {
        // cek judul
        $produkmodel = new Produk();
        $produk_lama = $produkmodel->where('id', $id)->first();
        if ($produk_lama['nama_produk'] == $this->request->getVar('nama_produk')) {
            $rule_nama_produk = 'required';
        }else{
            $rule_nama_produk = 'required|is_unique[produk.nama_produk]';
        }


        if(!$this->validate([
            'nama_produk' => [
                'rules' => $rule_nama_produk,
                'errors' => [
                    'required' => '{field} harus di isi sayang',
                    'is_unique' => 'nama produk sudah terdaftar'
                    ]
                ]
            ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('produk/edit/'.$id)->withInput()->with('validation', $validation);
        }

        $produk = new Produk();
        $produk->save([
            'id' => $id,
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'merek' => $this->request->getVar('merek')
        ]);
        
        return redirect()->to('/produk');
    }
}