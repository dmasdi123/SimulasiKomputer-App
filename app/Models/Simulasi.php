<?php

namespace App\Models;

use App\Controllers\View_simulasi;
use CodeIgniter\Model;

class Simulasi extends Model
{
    protected $table = 'nota_simulasi';
    protected $allowedFields = ['id_notas', 'no_nota', 'nama_brg', 'qty', 'harga_jual', 'tgl_input', 'customer', 'notelp', 'alamat'];


    public function insertsm($barang, $qty, $harga, $inv, $tgl, $cust, $hp, $alamat)
    {
        $filter = array_filter($barang); //untuk filter array kosong
        $id = $this->selectMax('id_notas', 'id')->findAll(); //get value terbesar
        foreach ($id as $key) {
            $id_n = $key['id'] + 1;
        }
        for ($i = 0; $i < count($filter); $i++) {
            $result[] = array(
                'id_notas' => $id_n + $i,
                'no_nota' => $inv,
                'nama_brg' => $barang[$i],
                'qty' => $qty[$i],
                'harga_jual' => $harga[$i],
                'tgl_input' => $tgl,
                'customer' => $cust,
                'notelp' => $hp,
                'alamat' => $alamat


            );
            // dd($result);
        }
        $this->insertBatch($result);
    }

    public function autoinvsm()
    {
        return $this->selectMax('id_notas', 'inv_sm')->findAll();
    }
}
