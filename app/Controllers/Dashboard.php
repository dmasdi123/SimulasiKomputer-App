<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Database\Query;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;
use Config\Exceptions;
use Config\Validation;
use Exception;

class Dashboard extends BaseController
{
	protected $masterBarangPembelian;



	public function __construct()
	{
		$this->masterBarangPembelian = new \App\Models\MasterBarangPembelian();
	}


	public function index()
	{
		$data = [
			'tittle' => 'Form Pembelian',
			'validation' => \Config\Services::Validation()
		];
		return view('dashboard/pembelian', $data);
	}

	public function penjualan()
	{
		return view('dashboard/penjualan');
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

			// $validation = \Config\Services::Validation();
			// return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
			return redirect()->to('/dashboard/pembelian')->withInput();
		}


		// $slug = url_title($this->request->getVar('judul'), '-', true);

		$this->masterBarangPembelian->save([
			'id_barang' => $this->request->getVar('id_barang'),
			'nama_barang' => $this->request->getVar('nama_barang'),
			'qty' => $this->request->getVar('qty'),
			'harga_beli' => $this->request->getVar('harga_beli'),
			'harga_jual' => $this->request->getVar('harga_jual'),
			'power' => $this->request->getVar('power')
		]);

		session()->setFlashData('pesan', 'Data Berhasil Ditambahkan');

		return redirect()->to('/dashboard/pembelian');
	}
}
