<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangPenjualan extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'id_pj';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pj', 'id_barang', 'id_notas', 'invoice', 'nama_brg', 'qty', 'harga_jual', 'cutomer', 'notelp', 'alamat'];

    public function getPenjualanBarang()
    {
        return $this->findAll();
    }

    public function insertPjFromSm($id_sm, $inv_pj, $barang, $idbarang, $qty, $harga, $cust, $hp, $alamat)
    {

        for ($i = 0; $i < count($barang); $i++) {
            $result[] = array(
                'id_barang' => $idbarang[$i],
                'id_notas' => $id_sm[$i],
                'invoice' => $inv_pj,
                'nama_brg' => $barang[$i],
                'qty' => $qty[$i],
                'harga_jual' => $harga[$i],
                'cutomer' => $cust,
                'notelp' => $hp,
                'alamat' => $alamat


            );
            // dd($result);
        }
        $this->insertBatch($result);
    }

    public function getinvPJ()
    {
        $id = $this->selectMax('id_pj')->findAll();
        foreach ($id as $key) {
            $id_n = $key['id_pj'] + 1;
        }
        return $id_n;
    }
}
