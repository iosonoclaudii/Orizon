<?php

namespace Database\Seeders;

// PaesiSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Paese;

class PaesiSeeder extends Seeder
{
    public function run()
    {
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

        foreach ($nazioni as $nazione) {
            Paese::create(['nome_nazione' => $nazione]);
        }
    }
}
