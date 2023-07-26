<?php

namespace App\Http\Controllers;

use \App\Models\Students;
use \App\Models\User;
use \App\Models\Type;
use \App\Models\Faculty;
use \App\Models\Department;
use \App\Models\course;
use \App\Models\assignment;
use \App\Models\submission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TO SELECT ALL FROM TABLES
        //  $student = Students::all();
        $users = User::all();
         $type = Type::all();
         $faculty = Faculty::all();
          $department = Department::all();
         $course = Course::all();
        //  $assignment = Assignment::all();
        return view('students.index',compact('type', 'faculty', 'department', 'users'));
    }

    /**
     * Show the form for creating a new resource.ss
     */
    public function create()
    {
        $user = User::all();
         $type = Type::all();
         $faculty = Faculty::all();
         $department = Department::all();
         $course = Course::all();
        //  $assignment = Assignment::all();
        //  $submission = Submission::all();
        // pass 
      return view('students.create',compact('user','type', 'faculty', 'department'));
    }

    // public function submitassignment($request){
    //     return view(app('StudentServices')->createAssignment($request)
    // );
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'age' => ['required','numeric'],
            'name'=> 'required',
            'phone'=>['required','numeric'],
            'email'=>['required','unique:users,email']
            
            
        ]);
        

    $user = User::create([
        
        'name'      =>  $request->name,
        'phone'     =>  $request->phone,
        'age'       =>  $request->age,
        'email'     =>  $request->email,
        'type_id'   =>  $request->type_id,
        'faculty_id'=>  $request->faculty_id,
        'department_id'=> $request->department_id,
        'course'    => $request->course,
        // 'assignment' => $request->assignment,
        'submission'=> $request->submission,
        'password' => Hash::make($request->password),
        
    ]);

    // app('StudentServices')->createAssignment($request,$user->id);

    return redirect('login');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    
    {
        $user       =  User::all();
        $types      =  Type::all();
        // $departments= Department::all();
        $faculties  = Faculty::all();
        $course     = Course::all();
        $assignment = Assignment::all();
        $submission = Submission::all();
    

        $user = User::find($id)->first();

        return view('students.edit',[
           
            'faculties'   => $faculties,
            // 'departments' => $departments,
            'types'       => $types,
            'user'        => $user,
            'course'      => $course,
            'assignment'  => $assignment,
            'submission'  => $submission,
        
            
            
        ]);
        // ->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $users = User::where('id',$id)
        ->update([
            'name'      =>   $request->name,
            'phone'     =>   $request->phone,
            'age'       =>  $request->age,
            'email'     =>  $request->email,
            'type_id'   =>  $request->type_id,
            'faculty_id'=>  $request->faculty_id,
            // 'department_id'=> $request->department_id,
            'course'    =>  $request->course,
            'assignment'=>  $request->assignment,
            'submission'=>  $request->submission,
        
            // 'password' => Hash::make($request->password),
            
        ]);
             return redirect('/students');

        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $user = User::findorFail($id);
        
        $user->delete();

        // return redirect('/students');
        return redirect()->route('students.index')
        ->with('success', 'Record deleted successfully');
    }
}
