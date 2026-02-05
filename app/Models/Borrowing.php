<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'persetujuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loanDetail()
    {
        return $this->hasMany(LoanDetail::class);
    }

    public function returnItem()
    {
        return $this->hasOne(ReturnItem::class);
    }
}
