<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [1, 'Diskrečioji matematika', 'discrete_mathematics'],
            [2, 'Objektinis programavimas', 'object_oriented_programming'],
            [3, 'Filosofija', 'philosophy'],
            [4, 'Anglų k.', 'english'],
            [5, 'Projektų valdymas', 'project_management'],
        ];

        foreach ($subjects as $value) {
            Subject::create([
                'id' => $value[0],
                'name' => $value[1],
                'code' => $value[2],
            ]);
        }
    }
}
