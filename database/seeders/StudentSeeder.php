<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [1, 1, 'Jonas', 'Jonaitis'],
            [2, 1, 'Vardenis', 'Pavardenis'],
            [3, 2, 'Petras', 'Petraitis'],
            [4, 2, 'Juozas', 'Jonaitis'],
            [5, 3, 'Vardenis2', 'Pavardenis'],
            [6, 3, 'Petras', 'Petrauskas'],
            [7, 4, 'Vardenis', 'Pavardenis2'],
            [8, 4, 'Jonas', 'Pavardenis'],
            [9, 5, 'Vardenis2', 'Pavardenis2'],
            [10, 5, 'Petras', 'Pavardenis'],
        ];

        foreach ($students as $value) {
            Student::create([
                'id' => $value[0],
                'university_id' => $value[1],
                'first_name' => $value[2],
                'last_name' => $value[3],
            ]);
        }
    }
}
