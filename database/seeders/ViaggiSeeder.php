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
            'descrizione' => 'Visita la città eterna per 3 giorni a 125euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        
        Viaggio::create([
            'nome_destinazione' => 'Parigi',
            'nazione_destinazione' => 2, // Supponiamo che la Francia abbia l'ID 2
            'posti_disponibili' => 50,
            'descrizione' => 'Esplora la città dell\'amore per una settimana a 200 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Madrird',
            'nazione_destinazione' => 3,
            'posti_disponibili' => 100,
            'descrizione' => 'Scopri la città della movida per un weekend a 150 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);


        Viaggio::create([
            'nome_destinazione' => 'Berlino',
            'nazione_destinazione' => 4,
            'posti_disponibili' => 30,
            'descrizione' => 'Esplora la città dell\'arte moderna per un weekend a 180 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Londra',
            'nazione_destinazione' => 5,
            'posti_disponibili' => 25,
            'descrizione' => 'Tour della città storica per 5 giorni a 220 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'New York',
            'nazione_destinazione' => 6,
            'posti_disponibili' => 40,
            'descrizione' => 'Esplora la Grande Mela per una settimana a 250 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Tokyo',
            'nazione_destinazione' => 7,
            'posti_disponibili' => 35,
            'descrizione' => 'Scopri la città tradizionale per 4 giorni a 200 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Pechino',
            'nazione_destinazione' => 8,
            'posti_disponibili' => 20,
            'descrizione' => 'Esplora la Città Proibita per 3 giorni a 150 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'Rio de Janeiro',
            'nazione_destinazione' => 9,
            'posti_disponibili' => 15,
            'descrizione' => 'Esperienza tropicale per una settimana a 230 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

        Viaggio::create([
            'nome_destinazione' => 'New Delhi',
            'nazione_destinazione' => 10,
            'posti_disponibili' => 50,
            'descrizione' => 'Tour della città antica per 4 giorni a 180 euro',
            'consumo_carburante' => (float)rand(0, 10) / 10,
            'emissioni_co2' => (float)rand(0, 5),
            'energia_rinnovabile' => (bool)rand(0, 1),
            'trasporto_pubblico' => (bool)rand(0, 1),
            'uso_biciclette' => (bool)rand(0, 1),
        ]);

    }
}
