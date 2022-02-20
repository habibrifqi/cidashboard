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
        // $produk = $produkmodel->findAll();
        

        $curentPage = $this->request->getVar('page_produk') ?  $this->request->getVar('page_produk') : 1;

        $keyowrd = $this->request->getVar('keyword');

        if($keyowrd){

            $produkkey = $produkmodel->search($keyowrd)->paginate(5,'produk');
        }else{
            $produkkey = $produkmodel->paginate(5,'produk');
        }
        $produk = $produkkey;
        
        $data = [
            'active' => 'produk',
            'produk' => $produk,
            'pager' => $produkmodel->pager,
            'curentPage' => $curentPage
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
                ],
            'gambar1' => [
                'rules' =>'uploaded[gambar1]|max_size[gambar1,5000]|is_image[gambar1]|mime_in[gambar1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                        'uploaded' => 'wajib upload gambar sayang',
                        'max_size' => 'ukuran gambar terlalu besar',
                        'is_image' => 'bukan gambar sayang',
                        'mime_in' => 'bukan gambar sayang'
                        
                    ]
                ]
            ])) {
            // $validation = \Config\Services::validation();

         
            // return redirect()->to('produk/create')->withInput()->with('validation', $validation);
            return redirect()->to('produk/create')->withInput();
        }
        // dd( );
        //deklarasi file gambar1
        $filegambar1 = $this->request->getFile('gambar1');
        //generat nama gambar rendom
        $namagambar1 = $filegambar1->getRandomName();
        $filegambar1->move('img/produk' , $namagambar1);

        $produk = new Produk();
        $produk->save([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'merek' => $this->request->getVar('merek'),
            'gambar1' => $namagambar1
        ]);
        
        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $produkmodel = new Produk();
        // $produk = $produkmodel->where(['id' , $id]);

        //tangkap data perdasarkan id
        $produk = $produkmodel->find($id);

        unlink('img/produk/'.$produk['gambar1']);


        $produkmodel->delete($id);

        //  dd($produk);
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
                ],
            'gambar1' => [
                'rules' =>'max_size[gambar1,5000]|is_image[gambar1]|mime_in[gambar1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'wajib upload gambar sayang',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'bukan gambar sayang',
                    'mime_in' => 'bukan gambar sayang'  
                    ]
                ]
            ])) {
            // $validation = \Config\Services::validation();

            // return redirect()->to('produk/edit/'.$id)->withInput()->with('validation', $validation);
            return redirect()->to('produk/edit/'.$id)->withInput();
        }

        $filegambar1 = $this->request->getFile('gambar1');
        // cek apakah gambar tetap gambar lama
        if($filegambar1->getError() == 4 ){
            $namagambar1 = $this->request->getVar('gambar1save');
        }elseif(empty($this->request->getVar('gambar1save'))){
            $namagambar1 = $filegambar1->getRandomName();
            // upload gambar
            $filegambar1->move('img/produk/', $namagambar1);
        }
        else{
            // generit nama file rendem
            $namagambar1 = $filegambar1->getRandomName();
            // upload gambar
            $filegambar1->move('img/produk/', $namagambar1);

            unlink('img/produk/'.$this->request->getVar('gambar1save'));
        }

        $produk = new Produk();
        $produk->save([
            'id' => $id,
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'merek' => $this->request->getVar('merek'),
            'gambar1' => $namagambar1
        ]);
        
        return redirect()->to('/produk');
    }
}