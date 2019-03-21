<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_test extends Controller
{
    public function list()
    {
    	$nama = [
		'ilham',
		'bayu',
		'media',
		'adit'
	];

		return view('page.data', [
			'data' => $nama,
		]);
    }
}
