<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangAntrian extends Model
{
    protected $table      = 'antrian';
    protected $primaryKey = 'id_pj';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pj', 'invoice', 'nama_brg', 'qty', 'harga_beli', 'harga_jual', 'cutomer', 'notelp', 'alamat'];

    public function getAntrianBarang()
    {
        return $this->findAll();
    }
}
