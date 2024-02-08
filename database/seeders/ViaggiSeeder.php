<?php

namespace Database\Seeders;

// ViaggiSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Viaggio;

class ViaggiSeeder extends Seeder
{
    public function run()
    {
        Viaggio::create([
            'nome_destinazione' => 'Roma',
            'nazione_destinazione' => 1, // Supponiamo che l'Italia abbia l'ID 1
            'posti_disponibili' => 3,
            'descrizione' => 'Tour della città di Roma'
        ]);

        
        Viaggio::create([
            'nome_destinazione' => 'Parigi',
            'nazione_destinazione' => 2, // Supponiamo che la Francia abbia l'ID 2
            'posti_disponibili' => 50,
            'descrizione' => 'Viaggio romantico a Parigi'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Madrird',
            'nazione_destinazione' => 3, // Supponiamo che l'Italia abbia l'ID 1
            'posti_disponibili' => 100,
            'descrizione' => 'Tour della città di Madrid'
        ]);


        Viaggio::create([
            'nome_destinazione' => 'Berlino',
            'nazione_destinazione' => 4,
            'posti_disponibili' => 30,
            'descrizione' => 'Esplorazione culturale a Berlino'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Londra',
            'nazione_destinazione' => 5,
            'posti_disponibili' => 25,
            'descrizione' => 'Tour storico a Londra'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'New York',
            'nazione_destinazione' => 6,
            'posti_disponibili' => 40,
            'descrizione' => 'Esperienza metropolitana a New York'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Tokyo',
            'nazione_destinazione' => 7,
            'posti_disponibili' => 35,
            'descrizione' => 'Esplorazione culturale a Tokyo'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Pechino',
            'nazione_destinazione' => 8,
            'posti_disponibili' => 20,
            'descrizione' => 'Tour storico a Pechino'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Rio de Janeiro',
            'nazione_destinazione' => 9,
            'posti_disponibili' => 15,
            'descrizione' => 'Esperienza tropicale a Rio de Janeiro'
        ]);

        Viaggio::create([
            'nome_destinazione' => 'New Delhi',
            'nazione_destinazione' => 10,
            'posti_disponibili' => 50,
            'descrizione' => 'Esplorazione culturale a New Delhi'
        ]);

    }
}
