<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_barang';

    //function shorting data kategori by model
    //shorting kat proc
    public function KatProc($kategori = false)
    {

        if ($kategori == false) {
            return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Prosessor')->findAll();
            // return $this->where('id_kategori', 0)->findAll();
        }
        $arr = array('Prosessor', $kategori);
        $kat = join(" ", $arr);
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', $kat)->findAll();
        // return $this->where('id_kategori', 0)->findAll();
    }


    public function KatMb($kategori = false)
    {

        if ($kategori == false) {
            return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Motherboard')->findAll();
        }
        $arr = array('Motherboard', $kategori);
        $kat = join(" ", $arr);
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', $kat)->findAll();
    }


    //shorting kat ram
    public function KatRam()
    {
        // if ($kategori == false) {
        //     return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Ram')->findAll();
        // }
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Ram')->findAll();
    }

    //shorting kat vga
    public function KatVGA()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'VGA')->findAll();
    }

    //shorting kat psu
    public function KatPSU()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'PSU')->findAll();
    }

    //shorting kat hdd
    public function KatHDD()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'HDD')->findAll();
    }

    //shorting kat ssd
    public function KatSSD()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'SSD')->findAll();
    }

    //shorting kat case
    public function KatCase()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Case')->findAll();
    }

    //shorting kat cooler
    public function KatCooler()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Cooler')->findAll();
    }

    //shorting kat peripheral
    public function Katphral()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Peripheral')->findAll();
    }

    //shorting kat Monitor
    public function KatMonitor()
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->like('nama_kat', 'Monitor')->findAll();
    }



    // get price item pc
    public function getPriceItem($key_id)
    {
        return $this->table('kategori')->select('harga_jual')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->where('id_barang', $key_id)->findAll();
    }

    // get name item pc
    public function getNameItem($key_id)
    {
        return $this->table('kategori')->select('*')->join('master_barang', 'master_barang.id_kategori = kategori.id_kategori')->where('id_barang', $key_id)->findAll();
    }
}
