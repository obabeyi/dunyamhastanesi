<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class haberler extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'baslik',
        'image',
        'icerik',
        'keywords',
        'description',
    ];
}
