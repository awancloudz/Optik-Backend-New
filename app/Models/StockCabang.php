<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockCabang extends Model
{
    protected $table = 'stockcabang';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
    	'id_produk',
    	'id_profile',
        'hargajual',
        'stok',
        'created_at',
        'updated_at'
    ];

    public function produk(){
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }
    public function profile(){
        return $this->belongsTo('App\Models\Profile', 'id_profile');
    }
}
