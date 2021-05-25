<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Database\Query;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;
use Config\Exceptions;
use Config\Validation;
use Exception;
use App\Models\MasterBarangModel;
use App\Models\Simulasi;

class Dashboard extends BaseController
{
	protected $masterBarangPembelian;
	protected $masterBarangPenjualan;
	protected $masterBarangAntrian;
	protected $kategorimodel;
	protected $simulasi;


	public function __construct()
	{
		$this->masterBarangPembelian = new \App\Models\MasterBarangPembelian();
		$this->masterBarangPenjualan = new \App\Models\masterBarangPenjualan();
		$this->masterBarangAntrian = new \App\Models\MasterBarangAntrian();
		$this->kategorimodel = new MasterBarangModel();
		$this->simulasi = new Simulasi();
	}


	public function index()
	{
		$databrg =  $this->masterBarangPembelian->showBarang();
		$data = [
			'title' => 'Dashboard - Master Barang',
			'validation' => \Config\Services::Validation(),
			'autoinv' => $this->masterBarangPembelian->getPembelianBarang(),
			'master' => $databrg,
			'kategori' => $this->kategorimodel->getKategori()
		];
		return view('dashboard/masterbarang', $data);
	}

	public function penjualan()
	{
		$simulasi = $this->simulasi->showSimulasi();
		//menghilangkan duplicate data
		$sm_filter = array_map("unserialize", array_unique(array_map("serialize", $simulasi)));
		$data = [
			'title' => 'Dashboard - Penjualan',
			'autoinv' => $this->masterBarangPembelian->getPembelianBarang(),
			'simulasi' => $sm_filter,

		];
		return view('dashboard/penjualan', $data);
	}

	public function save()
	{

		if (!$this->validate([
			'nama_barang' => [
				'rules' => 'required|is_unique[master_barang.nama_barang]',
				'errors' => [
					'required' => 'Masukan Barang {field}',
					'is_unique' => '{field} Ini Sudah Terdaftar'
				]
			],
			'qty' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Kolom QTY {field}',
				]
			],
			'harga_beli' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Harga Beli {field}',
				]
			],
			'harga_jual' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Harga Jual {field}',
				]
			],
			'power' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Kolom Power {field}',
				]
			]
		])) {


			return redirect()->to('/dashboard/masterbarang')->withInput();
		}


		$this->masterBarangPembelian->save([
			'id_barang' => $this->masterBarangPembelian->getPembelianBarang(),
			// 'id_barang' => $this->request->getAutoNumber('master_barang', 'id_barang', '000', 11),
			'id_kategori' => $this->request->getVar('power'),
			'nama_barang' => $this->request->getVar('nama_barang'),
			'qty' => $this->request->getVar('qty'),
			'harga_beli' => $this->request->getVar('harga_beli'),
			'harga_jual' => $this->request->getVar('harga_jual'),

		]);
		// dd($this->request->getVar());
		session()->setFlashData('pesan', 'Data Pembelian Berhasil Ditambahkan');

		return redirect()->to('/dashboard/masterbarang');
	}


	public function insertPenjualan()
	{
		$this->masterBarangPenjualan->insert([
			'invoice' => $this->request->getVar('invoice'),
			'nama_brg' => $this->request->getVar('nama_brg'),
			'qty' => $this->request->getVar('qty'),
			'harga_jual' => $this->request->getVar('harga_jual'),
			'cutomer' => $this->request->getVar('cutomer'),
			'notelp' => $this->request->getVar('notelp'),
			'alamat' => $this->request->getVar('alamat')
		]);

		$this->masterBarangAntrian->insert([
			'invoice' => $this->request->getVar('invoice'),
			'nama_brg' => $this->request->getVar('nama_brg'),
			'qty' => $this->request->getVar('qty'),
			'harga_jual' => $this->request->getVar('harga_jual'),
			'cutomer' => $this->request->getVar('cutomer'),
			'notelp' => $this->request->getVar('notelp'),
			'alamat' => $this->request->getVar('alamat')
		]);

		session()->setFlashData('pesan', 'Data Penjualan Berhasil Ditambahkan');

		return redirect()->to('/dashboard');
	}

	public function showsimulasi()
	{
		$id = $this->request->getVar('id'); //menerima data dari ajax
		$result = $this->simulasi->showSimulasibyId($id); //input value dari ajax ke model
		return json_encode($result);
	}

	public function insertData()
	{

		$barang = $this->request->getVar('barang[]');
		$idbarang = $this->request->getVar('idbarang[]');;
		$qty = $this->request->getVar('qty[]');
		$harga = $this->request->getVar('harga[]');
		$this->masterBarangPenjualan->insertPjFromSm($barang, $idbarang, $qty, $harga);
		return redirect()->to('/dashboard');
	}
}
