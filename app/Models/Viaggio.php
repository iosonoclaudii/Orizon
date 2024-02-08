<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaggio extends Model
{
    protected $table = 'viaggi'; // Assicurati che il nome della tabella corrisponda al nome nel database

    protected $fillable = [
        'nome_destinazione',
        'nazione_destinazione',
        'posti_disponibili',
        'descrizione',
    ];
}
