<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    protected $fillable = [
    	'nama',
    	'alamat',
        'notelp',
        'gajipokok',
        'status',
        'created_at',
        'updated_at'
    ];

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi', 'id_karyawan');
    }
    public function keranjang(){
        return $this->hasMany('App\Models\Keranjang', 'id_karyawan');
    }
}
