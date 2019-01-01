<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'judul', 'kategori','deskripsi'
    ];
    protected $dates = ['deleted_at'];
}