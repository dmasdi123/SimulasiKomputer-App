<?php

namespace App\Controllers;

use App\Models\MasterBarangPenjualan;

class Print_nota extends BaseController
{
	protected $penjualan;

	public function __construct()
	{
		$this->penjualan = new MasterBarangPenjualan();
	}

	public function index($inv)
	{
		if (session()->get('username', 'password') == null) {
			return redirect()->to('/simulasi');
		}

		$arr = 'INV/MTK/' . $inv;
		$nota_inv = $this->penjualan->where('invoice', $arr)->findAll();
		$data = [
			'title' => 'Print Nota | Cipta Mandiri Komputer',
			'detail' => $nota_inv

		];
		return view('pages/print_nota', $data);
	}
}
