<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'nama_alat',
        'category_id',
        'jumlah_stok',
        'deskripsi',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function loanDetail()
    {
        return $this->hasMany(LoanDetail::class);
    }
}
