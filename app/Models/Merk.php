<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merk';

    protected $fillable = [
        'nama',
        'id_kategoriproduk',
        'keterangan',
        'created_at',
        'updated_at'
    ];

    public function kategoriproduk(){
        return $this->belongsTo('App\Models\Kategoriproduk', 'id_kategoriproduk');
    }
    
    public function produk(){
    	return $this->hasMany('App\Models\Produk', 'id_merk');
    }
}
