<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\KategoriprodukController;

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

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Requested-With, x-xsrf-token');

//A. DATA MASTER
//DISTRIBUTOR
Route::get('distributor', [DistributorController::class, 'index']);
Route::post('distributor', [DistributorController::class, 'store']);
Route::put('distributor', [DistributorController::class, 'update']);
Route::post('distributor/cari',[DistributorController::class, 'cari']);
Route::delete('distributor/hapus/{id}', [DistributorController::class, 'destroy']);

//CUSTOMER
Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer', [CustomerController::class, 'store']);
Route::put('customer',[CustomerController::class, 'update']);
Route::post('customer/cari',[CustomerController::class, 'cari']);
Route::delete('customer/hapus/{id}', [CustomerController::class, 'destroy']);

//KATEGORI PRODUK
Route::get('kategoriproduk',[KategoriprodukController::class, 'index']);
Route::post('kategoriproduk',[KategoriprodukController::class, 'store']);
Route::put('kategoriproduk',[KategoriprodukController::class, 'update']);
Route::post('kategoriproduk/cari',[KategoriprodukController::class, 'cari']);
Route::delete('kategoriproduk/hapus/{id}', [KategoriprodukController::class, 'destroy']);

//MERK
Route::get('merk',[MerkController::class, 'index']);
Route::get('merk/{id}',[MerkController::class, 'merk']);
Route::get('merk/kategori/{cat}',[MerkController::class, 'kategorimerk']);
Route::post('merk',[MerkController::class, 'store']);
Route::put('merk',[MerkController::class, 'update']);
Route::post('merk/cari',[MerkController::class, 'cari']);
Route::delete('merk/hapus/{id}', [MerkController::class, 'destroy']);

//KARYAWAN
Route::get('karyawan',[KaryawanController::class, 'index']);
Route::post('karyawan',[KaryawanController::class, 'store']);
Route::put('karyawan',[KaryawanController::class, 'update']);
Route::post('karyawan/cari',[KaryawanController::class, 'cari']);
Route::delete('karyawan/hapus/{id}', [KaryawanController::class, 'destroy']);

//PRODUK
Route::get('stok-pusat',[ProdukController::class, 'index']);
Route::get('stok-pusat/kategori/{cat}',[ProdukController::class, 'category']);
Route::post('stok-pusat',[ProdukController::class, 'store']);
Route::put('stok-pusat',[ProdukController::class, 'update']);
Route::post('stok-pusat/cari',[ProdukController::class, 'cari']);
Route::post('stok-pusat/caribarcode',[ProdukController::class, 'caribarcode']);
Route::post('stok-pusat/caribarcodecabang',[ProdukController::class, 'caribarcodecabang']);
Route::delete('stok-pusat/hapus/{id}', [ProdukController::class, 'destroy']);

//PUSAT
Route::get('pusat',[ProfileController::class, 'indexpusat']);
Route::get('semuatoko',[ProfileController::class, 'indexall']);
//CABANG
Route::get('cabang',[ProfileController::class, 'index']);
Route::post('cabang',[ProfileController::class, 'store']);
Route::put('cabang',[ProfileController::class, 'update']);
Route::post('cabang/cari',[ProfileController::class, 'cari']);
Route::delete('cabang/hapus/{id}', [ProfileController::class, 'destroy']);
//STOK CABANG
Route::get('cabang/transaksi/{id}',[ProfileController::class, 'transaksi']);
Route::get('cabang/stok/{id}',[ProfileController::class, 'stok']);
Route::get('cabang/stok/{id}/kategori/{idcat}',[ProfileController::class, 'stokkategori']);
Route::get('cabang/stok/{id}/merk/{idmerk}',[ProfileController::class, 'stokmerk']);
Route::post('cabang/stok/cari',[ProfileController::class, 'caristok']);
Route::put('cabang/stok',[ProfileController::class, 'updatestok']);

//PENGGUNA
Route::get('user',[UserController::class, 'index']);
Route::post('user',[UserController::class, 'store']);
Route::post('user/login',[UserController::class, 'login']);
Route::put('user',[UserController::class, 'update']);
Route::post('user/cari',[UserController::class, 'cari']);
Route::delete('user/hapus/{id}', [UserController::class, 'destroy']);

//TRANSAKSI
Route::get('transaksi/{jenis}/profile/{idprofile}',[TransaksiController::class, 'index']);
Route::get('transaksi/view/{idtrans}',[TransaksiController::class, 'view']);
Route::post('transaksi',[TransaksiController::class, 'store']);
Route::post('transaksi/cari',[TransaksiController::class, 'cari']);
Route::put('transaksi/lunas',[TransaksiController::class, 'lunas']);
Route::delete('transaksi/hapus/{id}', [TransaksiController::class, 'destroy']);
Route::get('transaksi/keranjang/{idkaryawan}/jenis/{jenis}',[TransaksiController::class, 'cart']);
Route::post('transaksi/keranjang',[TransaksiController::class, 'addcart']);
Route::put('transaksi/keranjang',[TransaksiController::class, 'updatecart']);
Route::delete('transaksi/keranjang/hapus/{id}', [TransaksiController::class, 'destroycart']);
