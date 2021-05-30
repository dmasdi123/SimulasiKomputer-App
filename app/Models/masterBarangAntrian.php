<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangAntrian extends Model
{
    protected $table      = 'list_penjualan';
    protected $primaryKey = 'id_listpj';
    protected $allowedFields = ['invoice', 'nama_brg', 'qty', 'harga_jual', 'customer', 'notelp', 'alamat'];

    // public function getAntrianBarang()
    // {
    //     return $this->findAll();
    // }
}
