<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function tool()
    {
        return $this->hasMany(Tool::class);
    }

    
}
