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

//vista para un index
Route::get('/index', function () {
    return view('base.index');
})->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//para renta gravada
Route::get('/rentagravada/lista', 'RentaGrabadaController@index')->name('rentagravada.lista');