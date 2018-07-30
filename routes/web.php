<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('new_page', function () {
    return view('new_page');
})->name('new_page');
Route::get('2nd_page', function () {
    return view('2nd_page');
})->name('2nd_page');
Route::get('3rd_page', function () {
    return view('3rd_page');
})->name('3rd_page');

Route::get('/shouout/{text}', function ($text) {
    return view('shouout', array('text'=>$text));
});

Route::get('/new-page',function(){
    $name = ["ed", "edd", "eddy"];
    return view('new-page', array('name'=>$names));
})->name ('new-page');

Route::get('/foo', function(){
    return view("foo");
})-> name('foo');
    
Route::get('/bar', function(){
    return view("bar");
})-> name('bar');

//array
  
Route::get('/shouout/{text}', function ($text){
    $colors = array(
        "red" => "for passion",
        "green" => "color of nature",
        "blue" => "it is the color of the sky",
        "white" => "pureness",
        "black" => "being bold",
        "silver" => "authentic",
        "yellow" => "warmth"
    );
    return view ('shouout',
    array(
        'text' => $text,
        'colors' => $colors
    ));
})->name('shouout');  

//array

Route::get('/arithmetic/{operator}/{n1}/{n2}', function($operator,$n1,$n2){
	

	return view('/arithmetic',

					array(

							'n1' => $n1,
							'n2' => $n2,
							'operator' => $operator,

						 )
			  );


	
})->name('arithmetic');

Route::get('/middleware/{age}', function ($age){
    return view ('age', array ('age'=>$age));
})->middleware('age');