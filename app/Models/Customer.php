<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
    	'nama',
    	'alamat',
        'notelp',
        'jenis',
        'created_at',
        'updated_at'
    ];

    //Relasi One to One ke telepon
    public function resep(){
    	return $this->hasOne('App\Models\Resep', 'id_customer');
    }
}
