<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doktorlar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'isim',
        'image',
        'icerik',
        'egitimler',
        'telefon',
        'mail',
        'randevulink',
        'dogumyeri',
        'dogumtarihi',
        'uzmanlikalani',
        'deneyim',
        'uyelikler',
        'kongreler',
        'kategori',
        'keywords',
        'description',
    ];
}
