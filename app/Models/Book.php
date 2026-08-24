<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Book extends Model
{
    protected $fillable = ['title','author', 'year', 'genre', 'available'];

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
}
