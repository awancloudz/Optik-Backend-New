<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detailtransaksi';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
    	'id_produk',
        'id_transaksi',
        'harga',
        'jumlah',
        'diskon',
        'total',
        'created_at',
        'updated_at'
    ];

    public function produk(){
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }
    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi', 'id_transaksi');
    }
}
