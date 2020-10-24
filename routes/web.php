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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/index', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');

Route::get('/products/index', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/store', 'ProductController@store')->name('products.store');

Route::get('/orders/index', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders/store', 'OrderController@store')->name('orders.store');

Route::get('/users/cari','UserController@cari')->name('users.cari');

Route::get('/laporan/topcustomer', 'LaporanController@laptopcustomer')->name('laporan.topcustomer');
Route::get('/laporan/topproduk', 'LaporanController@laptopproduct')->name('laporan.topproduk');
Route::get('/laporan/laporder', 'LaporanController@laporder')->name('laporan.laporder');
Route::get('/laporan/carilaporder', 'LaporanController@carilaporder')->name('laporan.carilaporder');

Route::get('/laporan/lapcustomer', 'LaporanController@lapcustomer')->name('laporan.lapcustomer');
Route::get('/laporan/carilapcustomer', 'LaporanController@carilapcustomer')->name('laporan.carilapcustomer');

Route::get('/laporan/laporderkeagen', 'LaporanController@laporderkeagen')->name('laporan.laporderkeagen');

Route::get('/laporan/laporanlabaagent', 'LaporanController@laporanlabaagent')->name('laporan.laporanlabaagent');
Route::get('/laporan/carilaporanlabaagent', 'LaporanController@carilaporanlabaagent')->name('laporan.carilaporanlabaagent');

Route::get('/laporan/laporanitemproduk', 'LaporanController@laporanitemproduk')->name('laporan.laporanitemproduk');
Route::get('/laporan/carilaporanitemproduk', 'LaporanController@carilaporanitemproduk')->name('laporan.carilaporanitemproduk');

Route::get('/laporan/laporancategoryproduk', 'LaporanController@laporancategoryproduk')->name('laporan.laporancategoryproduk');
Route::get('/laporan/carilaporancategoryproduk', 'LaporanController@carilaporancategoryproduk')->name('laporan.carilaporancategoryproduk');