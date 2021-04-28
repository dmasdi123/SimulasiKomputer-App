<?php

namespace App\Controllers;

class Simulasi extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Simulasi Rakitan | Cipta Mandiri Komputer'];
        return view('pages/simulasi', $data);
    }
}
