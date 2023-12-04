<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller;
use App\http\Controllers\logincontroller;
use App\http\Controllers\produkcontroller;
use App\http\Controllers\pelanggancontroller;
use App\http\Controllers\penjualancontroller;
use App\http\Controllers\AuthControll;

//home
Route::get('/home', [Controller::class, 'index']);

//register
Route::get('/register', [AuthControll::class, 'register']);
Route::post('/register', [AuthControll::class, 'store']);

//logout
Route::get('/logout', [logincontroller::class, 'logout']);

//login admin&petugas
Route::get('/login', [logincontroller::class, 'login']);
Route::post('/login', [logincontroller::class, 'proseslogin']);

//DATA PRODUK
Route::get('/produk', [produkcontroller::class, 'tampilproduk']);
Route::get('/delete/{id}', [produkcontroller::class, 'deleteproduk']);
Route::get('/tambah', [produkcontroller::class, 'tambahproduk']);
Route::post('/tambah', [produkcontroller::class, 'prosesproduk']);

Route::post('/update/{id}', [produkcontroller::class, 'proses_update_produk']);
Route::get('/update/{id}', [produkcontroller::class, 'update_produk']);

//DATA PELANGGAN
Route::get('/pelanggan', [pelanggancontroller::class, 'tampilpelanggan']);
Route::get('/delete/{id}', [pelanggancontroller::class, 'deletepelanggan']);
Route::get('/tambah', [pelanggancontroller::class, 'tambahpelanggan']);
Route::post('/tambah', [pelanggancontroller::class, 'prosespelanggan']);
Route::post('/update/{id}', [pelanggancontroller::class, 'proses_update_pelanggan']);
Route::get('/update/{id}', [pelanggancontroller::class, 'update_pelanggan']);

//DATA PENJUALAN
Route::get('/penjualan', [penjualancontroller::class, 'tampilpenjualan']);  
Route::get('/detail-penjualan/{id}', [penjualancontroller::class, 'detailpenjualan']);
Route::get('/detailpenjualan/{id}', [penjualancontroller::class, 'detailpenjualan']);

//register
// Route::get('/register', [Controller::class, 'register']);
// Route::post('/register', [Controller::class, 'register']);


Route::get('/', function () {
    return view('welcome');
});





