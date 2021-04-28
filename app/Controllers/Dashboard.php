<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		return view('dashboard/pembelian');
	}

	public function penjualan()
	{
		return view('dashboard/penjualan');
	}
}
