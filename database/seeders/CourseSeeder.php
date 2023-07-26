<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $courses=[
            [
                'id'=>'1',
                'course_title'=> 'psychology of the mind',
                'course_code' =>  'psy 101',
                'course_unit' =>   '2',
            ],

            [
                'id' => '2',
                'course_title' => 'Learning process',
                'course_code'  =>  'psy 107',
                'course_unit'  => '2',
            ],

            [
                'id' => '3',
                'course_title' => 'cultural Psychology',
                'course_code'  =>  'psy 103',
                'course_unit'  =>   '3',

            ]
    
        
        ];

        foreach ($courses as  $course) {
            course::create([
                'id' => $course['id'],
                'course_title' => $course['course_title'],
                'course_code'  => $course['course_code'],
                'course_unit'  => $course['course_unit'],

            ]);

        }
    }
}
