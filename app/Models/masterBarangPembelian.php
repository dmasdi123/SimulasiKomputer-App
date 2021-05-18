<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangPembelian extends Model
{
    protected $table = 'master_barang';
    // protected $primaryKey = 'id_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'id_kategori', 'nama_barang', 'qty', 'harga_beli', 'harga_jual', 'power'];

    public function getPembelianBarang()
    {
        $id = $this->selectMax('id_barang')->findAll();
        foreach ($id as $key) {
            $id_n = $key['id_barang'] + 1;
        }
        return $id_n;
    }

    public function showBarang()
    {
        return $this->findAll();
    }
}
