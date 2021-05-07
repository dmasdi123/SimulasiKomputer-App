<?php

namespace App\Models;

use CodeIgniter\Model;

class masterBarang extends Model
{
    protected $table      = 'master_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_barang', 'qty', 'harga_beli', 'harga_jual', 'power'];

    public function getBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
