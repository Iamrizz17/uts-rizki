<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Izinkan mass assignment pada kolom berikut
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
