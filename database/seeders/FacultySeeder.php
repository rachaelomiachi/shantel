<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            'natural science',
            'medical science',
            'management science',
            'social science',
            'art',
            'environmental science',
            'engineering',
            'law',
        ];

        foreach ($faculties as $name) {
            Faculty::create([
                'name' => $name,
            ]);
        }
    }
}
