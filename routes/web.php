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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/testmodel', function() {
	$a=App\post::all();
	return $a;
});


Route::get('/testmodel1', function() {
	$b=App\post::find(1);
	return $b;
});


Route::get('/testmodel2', function() {
	$c=App\post::where('title','like','%Tips cepet Nikah%')->get();
	return $c;
});

Route::get('/testmodel3', function() {
	$d=App\post::find(1);
	$d->title = "Ciri keluarga sakinah";
	$d->save();
	return $d;
});


Route::get('/test1', function() {
	$aa=App\Siswa::all();
	return $aa;
});


Route::get('/test2', function() {
	$bb=App\Siswa::find(1);
	return $bb;
});


Route::get('/test3', function() {
	$cc=App\Siswa::where('nama','like','%melda%')->get();
	return $cc;
});

Route::get('/tampilan1', function () {
    return view('tamp1');
});
Route::get('/tampilan2', function () {
    return view('tamp2');
});
Route::get('/tampilan3', function () {
    return view('tamp3');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
