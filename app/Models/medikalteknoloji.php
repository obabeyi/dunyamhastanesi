<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medikalteknoloji extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'baslik',
        'image',
        'icerik',
        'order',
        'keywords',
        'description',
    ];
}
