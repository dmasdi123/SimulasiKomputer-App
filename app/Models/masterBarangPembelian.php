<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangPembelian extends Model
{
    protected $table      = 'master_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'nama_barang', 'qty', 'harga_beli', 'harga_jual', 'power'];

    public function getPembelianBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
