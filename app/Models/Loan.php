<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['book_id', 'user_id', 'loan_date', 'return_date'];

    // Rende le date nel formato corretto e non in una stringa
    protected $casts = [
        'loan_date' => 'datetime',
        'return_date' => 'datetime',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Per richiamare la funzione senza dover riscrivere il blocco per intero
    public function scopeAttivi($query){
    return $query->whereNull('data_restituzione');
}
}
