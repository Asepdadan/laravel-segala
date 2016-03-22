<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use Illuminate\Support\Facades\Input;
use DB;

class Eloqu extends Controller
{
    //

    public function index(){

    	
        $data = DB::table('articles')
                ->orderBy('created_at', 'asc')
                ->get();

    	return view('datatable/datatable')->with('data', $data);


    }

    public function create(){

    	
	$title = Input::get('title');
	$body = Input::get('body');

	echo $body;

    	$article = new Article;
    	$data = $article::all()->toArray();
    	
    	$article->title = $title;
    	$article->body = $body;
    	$article->save();

    	return redirect('show')->with('message', 'insert data success');

    }

    
}
