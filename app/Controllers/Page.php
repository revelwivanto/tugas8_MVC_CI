<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about(){
    $data_diri = [
      'nama' => 'Daud Dhiya Rozaan',
      'nrp' => '5025211021',
    ];
		return view('about', $data_diri);
	}
  public function contact(){
		return view('contact');
	}
  public function faqs(){
		return view('faqs');
	}
	
	public function tos() {
    echo "Halaman Term of Service";
  }
}