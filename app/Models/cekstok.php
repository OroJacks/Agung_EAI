<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cekstok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $fillable = ['kode_barang', 'nama_barang', 'stok', 'quality'];
    protected $primaryKey = 'kode_barang';
    protected $hidden = [];
    public $incrementing = false;
    public $timestamps = false;
}
