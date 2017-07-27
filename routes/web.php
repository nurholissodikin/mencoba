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
Route::get('/index', function () {
    return view('index');
});
Route::get('/par/{a}', function ($a) {
    return 'ini halaman status '.$a;
});
Route::get('/para/{a}/{b}', function ($a,$b) {
    return 'Nama Saya : '.$a.'<br>
    Saya Sekolah Di : '.$b;
});
Route::get('/testmodel', function () {
    $query = App\Post::all();
    return $query;
});
Route::get('/testmodel2', function () {
    $query = App\Post::find(1);
    return $query;
});
Route::get('/testmodel3', function () {
    $query = App\Post::where('title','like','%Keluarga%')->get();
    return $query;
});
Route::get('/testmodel4', function () {
    $query = App\Post::find(1);
    $query -> title = "Ciri Keluarga Sakinah";
    $query->save();
    return $query;
});


Route::get('/siswa', function () {
    $query = App\Siswa::all();
    return $query;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
