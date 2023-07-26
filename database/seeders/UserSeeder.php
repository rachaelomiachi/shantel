<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
           'id' =>'1',
            'name' => 'Grace Paul',
           'phone' => '090876543',
            'age' =>'23',
            'type_id' =>'1', 
            'department_id' => '2',
            'faculty_id' =>'4',
            'email' =>'grace@gmail.com',
            'password' =>'11111111'

        ];

        // foreach ($users as $user) {
        //     Users::create([
        //         'id' => $id,
        //         'name' => $name,
        //         'phone' =>$phone,
        //         'age' => $age,
        //     'type_id' =>$type_id, 
        //     'department_id' => $department_id,
        //     'faculty_id' => $faculty_id,
        //     'email' => $email,
        //     'password' => $password,
        //     ]);
        // }
    }
}
