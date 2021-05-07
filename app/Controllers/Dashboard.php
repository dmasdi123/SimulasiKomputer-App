<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'master_barang' => $this->masterBarang->getmasterBarang()
		];
		return view('dashboard/pembelian');
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
					'is_unique' => '{field} Ini Sudah Terdaftar'
				]
			],
			'harga_beli' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Harga Beli {field}',
					'is_unique' => '{field} Ini Sudah Terdaftar'
				]
			],
			'harga_jual' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Harga Jual {field}',
					'is_unique' => '{field} Ini Sudah Terdaftar'
				]
			],
			'power' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Masukan Kolom Power {field}',
					'is_unique' => '{field} Ini Sudah Terdaftar'
				]
			]
		])) {

			// $validation = \Config\Services::Validation();
			// return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
			return redirect()->to('/dashboard/pembelian')->withInput();
		}


		$slug = url_title($this->request->getVar('judul'), '-', true);

		$this->masterBarang->save([
			'nama_barang' => $this->request->getVar('judul'),
			'qty' => $this->request->getVar('judul'),
			'harga_beli' => $this->request->getVar('harga_beli'),
			'harga_jual' => $this->request->getVar('harga_jual'),
			'power' => $this->request->getVar('power')
		]);

		session()->setFlashData('pesan', 'Data Berhasil Ditambahkan');

		return redirect()->to('/dashboard/pembelian');
	}
}
