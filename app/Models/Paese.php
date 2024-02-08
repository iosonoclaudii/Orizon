<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paese extends Model
{
    protected $table = 'paesi'; // Assicurati che il nome della tabella corrisponda al nome nel database

    protected $fillable = [
        'nome_nazione',
    ];
}
