<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\assignment as Assignment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Validation\Validator;

class SubmissionController extends Controller
{
    // creating new resource

    public function create()
    {
        $submission = Submission::all();
        $users = User::all();
        $assignments = Assignment::all();
        return view('students.submission', compact('submission','users','assignments'));
    }

        // STORE SUBMISSION
        public function store(Request $request)
        {
            $validated =  $request->validate([
            'student_id'    =>   'required',
            'assignment_id' =>  'required',
                'file_url'  =>   'required',
            ]);

            $submission = Submission::create([
                'student_id'    =>    $request->student_id,
            'assigment_id'     =>    $request->assignment_id,
                'file_url'     =>    $request->file_url,
            ]);

            // dd($submission);
            return redirect('submission');
    }

}
