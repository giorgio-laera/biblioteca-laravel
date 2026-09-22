<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Book extends Model
{
    protected $fillable = ['title','cover','author', 'year','description', 'genre', 'available'];

    protected static function booted()
    {
        static::saving(function ($model) {
            // Elenco dei campi che vuoi formattare con l'iniziale maiuscola
            $campi = ['title', 'author', 'genre'];
    
            foreach ($campi as $campo) {
                // Controlliamo che il campo esista nel modello prima di modificarlo
                if (isset($model->$campo) && is_string($model->$campo)) {
                    $model->$campo = ucwords(strtolower($model->$campo));
                }
            }
        });
}

    public function loans(){

        $this->hasMany(Loan::class);
    }
    // Il prestito attivo del libro, se esiste (max uno)
    public function activeLoan(){

    return $this->hasOne(Loan::class)->whereNull('return_date');
    }
}
