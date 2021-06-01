<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Fillable = kolom yang harus diisi saat menyimpan ataupun mengedit data pada model
     * 
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];
}
