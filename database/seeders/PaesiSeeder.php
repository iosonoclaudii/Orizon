<?php

namespace Database\Seeders;

// Importa la classe Seeder di Laravel per la creazione dei dati di prova
use Illuminate\Database\Seeder;
// Importa il modello Paese per creare istanze di Paese
use App\Models\Paese;

// Definizione del seeder PaesiSeeder per popolare la tabella dei paesi con dati di prova
class PaesiSeeder extends Seeder
{
    // Metodo run che viene eseguito quando si esegue il seeder
    public function run()
    {
        // Array contenente i nomi dei paesi da inserire nel database
        $nazioni = [
            'Italia',
            'Francia',
            'Spagna',
            'Germania',
            'Regno Unito',
            'Stati Uniti',
            'Giappone',
            'Cina',
            'Brasile',
            'India'
        ];

        // Itera attraverso ogni elemento dell'array $nazioni
        foreach ($nazioni as $nazione) {
            // Crea un nuovo record nel database utilizzando il modello Paese e il nome della nazione corrente
            Paese::create(['nome_nazione' => $nazione]);
        }
    }
}
