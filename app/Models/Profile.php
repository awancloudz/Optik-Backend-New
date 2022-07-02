<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = [
    	'nama',
    	'alamat',
    	'kota',
        'notelp',
        'promosi',
        'statustoko',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->hasMany('App\Models\User', 'id_profile');
    }
    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi', 'id_profile');
    }
    public function pengiriman(){
        return $this->hasMany('App\Models\Pengiriman', 'id_profile');
    }
    public function stockcabang(){
        return $this->hasMany('App\Models\StockCabang', 'id_profile');
    }
}
