<?php

namespace App\Controllers;

use App\Models\MasterBarangModel;
use App\Models\Simulasi;

class View_simulasi extends BaseController
{
	protected $barang;
	protected $simulasi;

	public function __construct()
	{
		$this->barang = new MasterBarangModel();
		$this->simulasi = new Simulasi();
	}

	public function index()
	{
		// untuk hitung harga dari simulasi ke nota
		$harga = [
			$this->request->getVar('out_proc'),
			$this->request->getVar('out_mobo'),
			$this->request->getVar('out_ram'),
			$this->request->getVar('out_vga'),
			$this->request->getVar('out_psu'),
			$this->request->getVar('out_hdd'),
			$this->request->getVar('out_ssd'),
			$this->request->getVar('out_case'),
			$this->request->getVar('out_cooler'),
			$this->request->getVar('out_per'),
			$this->request->getVar('out_mon')
		];
		$filter = array_filter($harga);
		$total = array_sum($filter);


		$data = [
			'title' => 'Preview Simulasi Rakitan | Cipta Mandiri Komputer',
			'autoinv' => $this->simulasi->autoinvsm(),
			'g_total' => $total,

			'proc1' => $this->barang->getNameItem($this->request->getVar('proc')),
			'mobo' => $this->barang->getNameItem($this->request->getVar('mobo')),
			'ram' => $this->barang->getNameItem($this->request->getVar('ram')),
			'vga' => $this->barang->getNameItem($this->request->getVar('vga')),
			'psu' => $this->barang->getNameItem($this->request->getVar('psu')),
			'hdd' => $this->barang->getNameItem($this->request->getVar('hdd')),
			'ssd' => $this->barang->getNameItem($this->request->getVar('ssd')),
			'case' => $this->barang->getNameItem($this->request->getVar('case')),
			'cooler' => $this->barang->getNameItem($this->request->getVar('cooler')),
			'peri' => $this->barang->getNameItem($this->request->getVar('per')),
			'monitor' => $this->barang->getNameItem($this->request->getVar('monitor')),

			'qtyprc' => $this->request->getVar('qty_proc'),
			'qtymb' => $this->request->getVar('qty_mobo'),
			'qtyram' => $this->request->getVar('qty_ram'),
			'qtyvga' => $this->request->getVar('qty_vga'),
			'qtypsu' => $this->request->getVar('qty_psu'),
			'qtyhdd' => $this->request->getVar('qty_hdd'),
			'qtyssd' => $this->request->getVar('qty_ssd'),
			'qtycase' => $this->request->getVar('qty_case'),
			'qtycooler' => $this->request->getVar('qty_cooler'),
			'qtyperi' => $this->request->getVar('qty_per'),
			'qtymonitor' => $this->request->getVar('qty_mon'),

			'hrgprc' => $this->request->getVar('out_proc'),
			'hrgmb' => $this->request->getVar('out_mobo'),
			'hrgram' => $this->request->getVar('out_ram'),
			'hrgvga' => $this->request->getVar('out_vga'),
			'hrgpsu' => $this->request->getVar('out_psu'),
			'hrghdd' => $this->request->getVar('out_hdd'),
			'hrgssd' => $this->request->getVar('out_ssd'),
			'hrgcase' => $this->request->getVar('out_case'),
			'hrgcooler' => $this->request->getVar('out_cooler'),
			'hrgperi' => $this->request->getVar('out_per'),
			'hrgmonitor' => $this->request->getVar('out_mon'),

			'nama' => $this->request->getVar('nama'),
			'hp' => $this->request->getVar('hp'),
			'alamat' => $this->request->getVar('alamat'),



		];
		return view('pages/view_simulasi', $data);
	}

	public function simpan()
	{
		// dd($this->request->getVar());
		$barang = $this->request->getVar('s_barang[]');
		$qty = $this->request->getVar('qs_barang[]');
		$harga = $this->request->getVar('hs_barang[]');
		$inv = $this->request->getVar('inv');
		$tgl = $this->request->getVar('tgl');
		$cust = $this->request->getVar('nama');
		$hp = $this->request->getVar('hp');
		$alamat = $this->request->getVar('alamat');

		$this->simulasi->insertsm($barang, $qty, $harga, $inv, $tgl, $cust, $hp, $alamat);
		session()->setFlashdata('pesan', 'Data berhasil disimpan!!, mohon nota simulasi segera di bawa ke toko untuk dilakukan prosess penjualan');
		return redirect()->to('/view_simulasi');
	}
}
