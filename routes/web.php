<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'LoginController@getLogin')->name('login');
Route::post('proseslogin','LoginController@postLogin');
Route::get('logout','LoginController@logout');
Route::view('register', 'register');
Route::post('regis', 'MasyarakatController@regis')->name('register');

Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('dashboard','DashboardController@index');

    // Petugas
    Route::resource('petugas', 'PetugasController');

    // Masyarakat
    Route::resource('masyarakat', 'MasyarakatController');
});

Route::group(['middleware'=>'auth:masyarakat'], function(){
    Route::get('masyarakat_depan','MasyarakatController@depan');
    Route::get('masyarakat_pengaduan','MasyarakatController@pengaduan');
    Route::post('prosespengaduan','MasyarakatController@prosespengaduan');
    Route::get('history','MasyarakatController@history');
});
