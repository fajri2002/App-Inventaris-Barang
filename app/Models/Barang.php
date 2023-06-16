<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruangan;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'deskripsi_barang',
        'kondisi_barang',
        'image_url',
        'id_ruang'
    ];
    
    public function ruangan(){
        return $this->hasOne(Ruangan::class, 'id', 'id_ruang');
    }
}
