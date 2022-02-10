<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
    protected $table         = 'produk';
    protected $allowedFields = [
        'nama_produk', 'harga', 'merek','gambar1','gambar2','gambar3','gambar4'
    ];
    protected $useTimestamps = true;
    
}