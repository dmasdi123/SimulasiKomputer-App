<?php

namespace App\Controllers;

use App\Models\MasterBarangModel;



class Simulasi extends BaseController
{
    // jika model ingin dipakai banyak method, buat contruct
    // protected $barang;
    // public function __construct()
    // {
    //     $this->barang = new MasterBarangModel();
    // }

    public function index()
    {
        $barang = new MasterBarangModel();

        $f_barang = $barang->findAll();

        $data = [
            'title' => 'Simulasi Rakitan | Cipta Mandiri Komputer',
            'barang' => $f_barang
        ];
        return view('pages/simulasi', $data);
    }
}
