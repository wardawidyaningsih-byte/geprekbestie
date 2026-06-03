<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'nama_toko',
        'alamat',
        'whatsapp',
        'latitude',
        'longitude',
        'gambar',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}