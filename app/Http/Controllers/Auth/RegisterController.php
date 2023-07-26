<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use \App\Models\assignment;
use \App\Models\Faculty;
use \App\Models\Type;
use \App\Models\Department;
use \App\Models\submission;
use \App\Models\course;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => 'required',
            'age'   =>  'required',
            'type_id'   =>   'required',
            'faculty_id' =>  'required',
            'department_id'  => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)

    public function show()
    {
        $user = User::all();
         $type = Type::all();
         $faculty = Faculty::all();
         $department = Department::all();
         $course = Course::all();
        //  $assignment = Assignment::all();
        //  $submission = Submission::all();
        // pass 
     return view ('auth.register', compact( 'user', 'type', 'faculty', 'department'));
    }

    public function store(array $data)
   {
        return User::create([
            'name' => $data['name'],
            // 'phone' => $data['phone'],
            // 'age'  =>  $data['age'],
            // 'type_id' =>  $data['type'],
            // 'faculties_id' =>$data['faculty'],
            // 'department_id' =>$data ['department'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
