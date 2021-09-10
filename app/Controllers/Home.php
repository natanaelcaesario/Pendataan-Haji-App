<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->has('admin')) {
			session_destroy();
		}
		$productModel = new \App\Models\ProductModel();
		$produk = $productModel->findAll();
		return view('index', ['produk' => $produk]);
	}
	public function contact()
	{
		echo view('contactus');
	}
	public function about()
	{
		echo view('about');
	}
	//--------------------------------------------------------------------

}
