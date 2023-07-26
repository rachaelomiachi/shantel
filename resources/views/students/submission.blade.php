<div class="submission-page">
@extends('layouts.header')

@section('content')


 <div class="container mt-5">
    <h2 class="text-center mb-4">Submission</h2>
    <div class="row justify-content-center">
        <form action="{{ route('submission.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-5 mt-1 justify-content-center">
                <div class="col-md-6">
                <select name='student_id' class="form-control form-select form-select-md "  aria-label=".form-select-sm example">
                    <option>--Student_id--</option>
                    @foreach ($users as $user)
                    <option class="form-control" value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-5 mt-1 justify-content-center">
                <div class="col-md-6">
                <select name='assignment_id' class="form-control form-select form-select-md "  aria-label=".form-select-sm example">
                    <option>--Assignment_id--</option>
                    @foreach ($assignments as $assignment)
                    <option class="form-control" value="{{ $assignment->id }}">{{ $assignment->body }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-5 mt-1 justify-content-center">
                <div class="col-md-6">
                <input type="file"  name="file_url" id="file-url">
                </div>
            </div>
            
            <div class="row mb-5 mt-1 justify-content-center">
                <div class="col-md-6">
            <input  class="btn btn-outline-primary  ms- " type="submit" value="assignments">
                </div>
            </div>
                            
            </form> 

    </div>
    </div> 
</div>
    {{-- <footer>
        <div class="row justify-content-between ">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 justify-content-center">
              <div class="copyright text-primary ">
                <span class="row justify-content-center mt-5"> © Copyright Shantel College . All Rights Reserved</span>
              </div>
  
    </footer> --}}
@endsection