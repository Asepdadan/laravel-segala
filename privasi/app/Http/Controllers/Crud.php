<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;


class Crud extends Controller
{
    //

	public function index(){

		return View::make('home/home');

	}

}
