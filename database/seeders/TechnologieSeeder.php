<?php

namespace Database\Seeders;

use App\Models\Technologie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techonologies = [
            'html',
            'css',
            'vue',
            'js',
            'php',
            'laravel 10',
        ];

        foreach ($techonologies as $techonologieName ){
            $newTechonologie = new Technologie();

            $newTechonologie->name = $techonologieName;
            $newTechonologie->save();
        }

        
    }
}
