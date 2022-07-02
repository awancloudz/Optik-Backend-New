<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'distributor',
        'distributor/cari',
        'distributor/hapus',
        'karyawan',
        'karyawan/cari',
        'karyawan/hapus',
        'customer',
        'customer/cari',
        'customer/hapus',
        'kategoriproduk',
        'kategoriproduk/cari',
        'kategoriproduk/hapus',
        'merk',
        'merk/kategori',
        'merk/cari',
        'merk/hapus',
        'stok-pusat',
        'stok-pusat/kategori',
        'stok-pusat/cari',
        'stok-pusat/caribarcode',
        'stok-pusat/caribarcodecabang',
        'stok-pusat/hapus',
        'semuatoko',
        'pusat',
        'cabang',
        'cabang/cari',
        'cabang/hapus',
        'cabang/stok',
        'cabang/stok/cari',
        'cabang/transaksi',
        'user',
        'user/login',
        'user/cari',
        'user/hapus',
        'transaksi',
        'transaksi/hapus',
        'transaksi/view',
        'transaksi/cari',
        'transaksi/lunas',
        'transaksi/keranjang',
        'transaksi/keranjang/hapus',
    ];
}
