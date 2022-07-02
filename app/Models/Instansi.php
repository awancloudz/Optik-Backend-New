<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = 'instansi';

    protected $fillable = [
    	'nama_instansi',
    	'alamat',
        'notelp',
        'harga',
        'keterangan',
        'created_at',
        'updated_at'
    ];
}
