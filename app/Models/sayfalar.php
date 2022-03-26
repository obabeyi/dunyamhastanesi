<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sayfalar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
            'baslik',
            'icerik',
            'keywords',
            'description',
        ];
}
