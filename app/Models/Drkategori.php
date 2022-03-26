<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drkategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'baslik',

    ];
}
