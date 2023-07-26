<?php

namespace App\Http\Controllers;
use \App\Models\assignment;
use \App\Models\Faculty;
use \App\Models\Type;
use \App\Models\Department;
use \App\Models\User;
use \App\Models\course;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class AssignmentController extends Controller
{


   public function createAssignment()
   {
    $assignment = Assignment::all();
    $user = User::all();
         $types = Type::all();
         $faculties = Faculty::all();
         $departments = Department::all();
         $courses = Course::all();
    
    return view('students.assignment', compact('types','faculties', 'departments', 'courses'));
   }

   public function storeAssignment(Request $request)
   {
    $validated = $request->validate([
        'user_id' => ['required'],
        'type_id'=> 'required',
        'faculty_id'=>['required','numeric'],
        'department_id'=>['required'],
        'course_id' =>'required',
        'body'  => 'required',
        'file_url'  =>  'required',
    ]);

    // dd($validated);


$assignment = Assignment:: create([
    'user_id'       =>     $request->user_id,
    'type_id'       =>      $request->type_id,
    'faculty_id'    =>      $request->faculty_id,
    'department_id' =>      $request->department_id,
    'course_id'     =>      $request->course_id,
    'body'          =>      $request->body,
    'file_url'      =>      $request->file_url,

    
]);
return redirect('assignment');

   }



   public function main()
   {
    return view('students.main');
   }

}
