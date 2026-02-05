<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnItem extends Model
{
    protected $fillable = [
        'borrowing_id',
        'tanggal_kembali',
        'kondisi',
        'catatan',
    ];

    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }
}
