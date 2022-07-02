<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    //Hanya jika semua data disimpan tanpa seleksi
    protected $fillable = [
    	'kodeproduk',
        'id_kategoriproduk',
        'id_merk',
        'namaproduk',
        'seriproduk',
        'hargajual',
        'hargagrosir',
        'hargadistributor',
        'diskon',
        'stok',
        'foto',
        'created_at',
        'updated_at'
    ];

    //Relasi One to Many ke 
    public function merk(){
        return $this->belongsTo('App\Models\Merk', 'id_merk');
    }
    public function kategoriproduk(){
        return $this->belongsTo('App\Models\Kategoriproduk', 'id_kategoriproduk');
    }

    //Relasi One to many dari
    public function stockcabang(){
        return $this->hasMany('App\Models\StockCabang', 'id_produk');
    }
    public function detailtransaksi(){
        return $this->hasMany('App\Models\DetailTransaksi', 'id_produk');
    }
    public function keranjang(){
        return $this->hasMany('App\Models\Keranjang', 'id_produk');
    }
    //Relasy Many to Many ke transaksi
    /*public function transaksi()
    {
    return $this->belongsToMany('App\Models\Transaksi', 'detailtransaksi', 'id_produk', 'id_transaksi')->withPivot('jumlahbeli');
    }*/
}
