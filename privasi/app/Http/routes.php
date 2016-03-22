<?php



Route::group(['middleware' => ['web']], function () {
    //
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'Crud@index');

Route::get('/data',function(){

return view('datatable/datatable');

});

Route::get('/eloq', 'ArticleController@city');

Route::get('/show',function(){

	$article = new App\Article;
	$show = $article::all();
	
	return view('datatable/datatable')->with('data', $show);
});

Route::get('/shower', 'Eloqu@index' );
Route::get('/input', function(){

	return view('datatable/input');
} );

Route::post('/action','Eloqu@create');

Route::post('/action_input',function(){

	$title = Input::get('title');
	$body = Input::get('body');


	$article = new App\Article;
	$article->title = $title;
	$article->body = $body;
	$article->save();

	return redirect('show')->with('message', 'insert data success');
    	

});

Route::get('/hapus/{id}',function($id){

	$article = App\Article::find($id);
	$article->delete();
	return redirect('show')->with('message', 'Delete data success');
	
});

Route::get('/query',function(){

$article = DB::table('articles')->get();

return view('datatable/datatable')->with(array('data' => $article));

});


Route::get('/where/{id}',function($id){

$user = DB::table('articles')->where('id', $id)->get();

return view('datatable/edit')->with(array('data' => $user));



});

Route::post('/update',function(){

$id = Input::get('id');
$title = Input::get('title');
$body = Input::get('body');


$article = App\Article::find(7);
$article->title = $title;
$article->body = $body;
$article->save();
return redirect('show')->with('message', 'edit data success');

});


/*raw sql query*/

Route::get('/showedit/{id}',function($id){

	$data = DB::select('select * from articles where id = ?', [$id]);

	return view('datatable/edit')->with(array('data' => $data));
});


Route::post('/actionupdate',function(){

$id = Input::get('id');
$title = Input::get('title');
$body = Input::get('body');

DB::table('articles')
            ->where('id', $id)
            ->update(['title' => $title,'body' => $body]);

return redirect('show')->with('message', 'edit data success');

});


Route::get('/pagination',function(){

$article = DB::table('articles')->Paginate(3);

return view('pagination')->with(array('data' => $article));

});


Route::get('/excel',function(){

$article = DB::table('articles')->get();

$data = App\Article::all()->toArray();



Excel::create('article', function($excel) use($data) {

		
	

    $excel->sheet('asdan', function($sheet) use($data) {


    	$sheet->row(2, array('test header t2'));
	
		$sheet->setFontBold(true);
		


		$sheet->mergeCells('A2:D2');

    	

		$sheet->setAutoSize(true);
       

		$sheet->setFontSize(12);

		

        $sheet->row(4, array(
		     'no', 'title', 'body'
		));



		

       
$no = 5;

foreach ($data as $key) {
	 $sheet->setBorder('A4:C'.$no.'', 'thin');

	 $sheet->setAutoFilter('A4:C'.$no.'');
	
		// Manipulate 2nd row
		$sheet->row($no++, array(
		   $key['id'], $key['title'], $key['body']
		));

		

		}

		
    });



})->export('xls');

});




Route::get('/between',function(){

$article = DB::table('articles')
                    ->whereBetween('created_at', ['2016-03-12','2016-03-22'] )->paginate(2);

return view('pagination')->with(array('data' => $article));

});


});
