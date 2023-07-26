<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['student','teacher','lecturer','admin','security'];

        foreach ($names as $name) {
            Type::create([
                'name' => $name,
            ]);
        }
    }
}
