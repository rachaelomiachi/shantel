<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department=[
            'English',
            'Psychology',
            'Anatomy',
            'Biology',
            'Economics',
            'chemistry',
            'physics',
        ];

        foreach ($department as $name) {
            Department::create([
                'name' => $name,
            ]);
        }
    }
}
