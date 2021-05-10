<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universities = [
            [1, 'Vilniaus universitetas'],
            [2, 'Kauno technikos univesitetas'],
            [3, 'Vilniaus Gedimino technikos universitetas'],
            [4, 'Vytauto Didžiojo universitetas'],
            [5, 'Didžiojo universitetas'],
        ];

        foreach ($universities as $value) {
            University::create([
                'id' => $value[0],
                'name' => $value[1]
            ]);
        }
    }
}
