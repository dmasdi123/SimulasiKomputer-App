<?php

namespace App\Controllers;

use App\Models\MasterBarangModel;



class Simulasi extends BaseController
{
    // jika model ingin dipakai banyak method, buat contruct
    protected $barang;
    public function __construct()
    {
        $this->barang = new MasterBarangModel();
    }

    public function index($kategori = '')
    {

        //jika param null
        if ($kategori == '') {
            $data = [
                'title' => 'Simulasi Rakitan | Cipta Mandiri Komputer',
                'barangproc' => $this->barang->KatProc(),
                'barangmb' => $this->barang->KatMb(),
                'barangram' => $this->barang->KatRam()
            ];
            //kirim param ke model masterbarang
        } else {
            $data = [
                'title' => 'Simulasi Rakitan | Cipta Mandiri Komputer',
                'barangproc' => $this->barang->KatProc($kategori),
                'barangmb' => $this->barang->KatMb($kategori),
                'barangram' => $this->barang->KatRam()
            ];
        }

        return view('pages/simulasi', $data);
        // } 

        // $f_barang = $this->barang->findAll();

        // 'barang' => $this->barang->KatProc()
    }

    public function getItem()
    {
        $key_id = $_POST['id']; //menerima data dari ajax
        $result = $this->barang->getPriceItem($key_id); //input value dari ajax ke model
        return json_encode($result);
    }
}
