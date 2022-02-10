<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Produk;

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
        $data = [
            'active' => 'produk'
        ]; 
        // return 'asdasd';
        return view('produk/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar()); 
        $produk = new Produk();
        $produk->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'merek' => $this->request->getVar('merek')
        ]);
        
        return redirect()->to('/produk');
    }

}
