<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Anggota;
use App\Models\Buku;

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
Route::get('/',function(){
    return view('0111home');
});
Route::get('/0111/barang',function(){
    return view('barang');
});
Route::get('/0111/pelanggan',function(){
    return view('pelanggan');
});
Route::get('/0111/transaksi',function(){
    return view('transaksi');
});
Route::resource('barang', 'app\Http\Controllers\BarangController::class');
Route::resource('pelanggan', 'app\Http\Controllers\BarangController::class');
Route::resource('transaksi', 'app\Http\Controllers\BarangController::class');
Route::get('/barang/cari','p_ganjilController@cari');
