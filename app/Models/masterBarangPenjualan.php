<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangPenjualan extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'id_pj';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pj', 'invoice', 'nama_brg', 'qty', 'harga_beli', 'harga_jual', 'cutomer', 'notelp', 'alamat'];

    public function getPenjualanBarang()
    {
        return $this->findAll();
    }

    // public function getidBarang() {
    //     $query = $this->db->query("SELECT MAX(id_barang)")

    // }
}
