<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function index()
    {       
        $data = [
            'active' => 'produk'
        ];
        return view('produk/index', $data);
    }
}
