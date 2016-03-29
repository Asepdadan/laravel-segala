<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use AsepHelper;
use DB;


class Crud extends Controller
{
    //

	public function index(){

		return View::make('home/home');

	}

	public function Helper(){

		echo AsepHelper::err_msg('test');
		$data = AsepHelper::Helperquery(9);

		print_r($data);

	}

}
