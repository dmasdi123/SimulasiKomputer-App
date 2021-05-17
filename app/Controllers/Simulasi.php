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
                'barangram' => $this->barang->KatRam(),
                'barangvga' => $this->barang->KatVGA(),
                'barangpsu' => $this->barang->KatPSU(),
                'baranghdd' => $this->barang->KatHDD(),
                'barangssd' => $this->barang->KatSSD(),
                'barangcase' => $this->barang->KatCase(),
                'barangcooler' => $this->barang->KatCooler(),
                'barangperiperal' => $this->barang->Katphral(),
                'barangmonitor' => $this->barang->KatMonitor()
            ];
            //kirim param ke model masterbarang
        } else {
            $data = [
                'title' => 'Simulasi Rakitan | Cipta Mandiri Komputer',
                'barangproc' => $this->barang->KatProc($kategori),
                'barangmb' => $this->barang->KatMb($kategori),
                'barangram' => $this->barang->KatRam(),
                'barangvga' => $this->barang->KatVGA(),
                'barangpsu' => $this->barang->KatPSU(),
                'baranghdd' => $this->barang->KatHDD(),
                'barangssd' => $this->barang->KatSSD(),
                'barangcase' => $this->barang->KatCase(),
                'barangcooler' => $this->barang->KatCooler(),
                'barangperiperal' => $this->barang->Katphral(),
                'barangmonitor' => $this->barang->KatMonitor()
            ];
        }

        return view('pages/simulasi', $data);
        // } 

        // $f_barang = $this->barang->findAll();

        // 'barang' => $this->barang->KatProc()
    }

    public function getItem()
    {
        $key_id = $this->request->getVar('id'); //menerima data dari ajax
        $result = $this->barang->getPriceItem($key_id); //input value dari ajax ke model
        return json_encode($result);
    }
}
