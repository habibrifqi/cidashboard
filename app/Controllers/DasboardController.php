<?php

namespace App\Controllers;

class DasboardController extends BaseController
{
    public function index()
    {       
        $data = [
            'active' => 'dashboard'
        ];
        return view('dasboard/index', $data);
    }
}
