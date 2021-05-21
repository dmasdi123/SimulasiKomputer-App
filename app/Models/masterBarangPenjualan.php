<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangPenjualan extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'id_pj';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pj', 'id_barang', 'invoice', 'nama_brg', 'qty', 'harga_jual', 'cutomer', 'notelp', 'alamat'];

    public function getPenjualanBarang()
    {
        return $this->findAll();
    }

    public function insertPjFromSm($barang, $idbarang, $qty, $harga)
    {

        for ($i = 0; $i < count($barang); $i++) {
            $result[] = array(
                'id_barang' => $idbarang[$i],
                'nama_brg' => $barang[$i],
                'qty' => $qty[$i],
                'harga_jual' => $harga[$i]


            );
            // dd($result);
        }
        $this->insertBatch($result);
    }
}
