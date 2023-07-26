@extends('layouts.header')

@section('content')
        <div style="background-color: aliceblue">
        <div class="container justify-content-center text-center p-5 mt-0" >
            <div class="row">
        <div class="assignment-form">
        @if(count($errors))
            @foreach ($errors->all() as $error )
                <span class="text-danger text-sm">{{ $error }}</span> <br>
            @endforeach
        @endif

        <h1 class="ms-5 mt-1">Submit Assignment</h1>
        <form action="{{ route('storeAssignment') }}" enctype="multipart/form-data" method="post" class="assignment-body">
            @csrf

            <input  type="hidden" name="user_id" value="{{ auth()->id() }}">
            


            <div class="row mb-4 justify-content-center">
                <div class="col-md-6 mt-4">
                <select class="form-control form-select form-select-md text-center" aria-label=".form-select-sm example" name='type_id'>
                    <option >----select Type----</option>
                    <option class="form-control"  value="{{ old('type_id') }}" id="one" >--select -- </option>
                    @foreach ($types as $type)
                        <option class="form-control" value="{{ $type->id }}" >{{ $type->name }}</option>
                @endforeach
                </select> 
                @error('type_id')
                <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
                </div>
            </div>

                
                <div class="row mb-4 justify-content-center">
                    <div class="col-md-6">
                    <select  name='faculty_id' class="form-control form-select form-select-md text-center" aria-label=".form-select-sm example">
                        <option value="{{ old('faculty_id') }}" >--select faculty--</option>
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}" >{{ $faculty->name }}</option>
                    @endforeach
                    </select>
                    @error('faculty_id')
                    <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                    <div class="row mb-4 justify-content-center">
                        <div class="col-md-6">
                        <select class="form-control form-select form-select-md text-center"  aria-label=".form-select-sm example" name='department_id'>
                            <option value="{{ old('department_id') }}" >--select Department--</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" >{{ $department->name }}</option>
                        @endforeach
                        </select>
                        @error('department_id')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                        <div class="row mb-4 justify-content-center">
                            <div class="col-md-6">
                            <select class="form-control form-select form-select-md text-center"  aria-label=".form-select-sm example" name='course_id'>
                                <option value="{{ old('course_id') }}" >--select Courses--</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" >{{ $course->course_title }}</option>
                            @endforeach
                            </select>
                            @error('course_id')
                            <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                    </div>
            </div>
                            {{-- <p class="ms-5">Dear Student, pls take to go through your work before submitting as there would be
                                <br> no room for corrections after submission
                            </p> --}}
                            {{-- <label for="body">Body</label> <br> --}}
                            <div class="row mb-4 justify-content-center">
                                <div class="col-md-6">
                           <textarea name="body" class=" form-control text-dark bg-light text-center " id="body" value="{{ old('body') }}" cols="70" rows="10" placeholder="Type your assignment"></textarea>
                           @error('body')
                           <span class="text-danger text-sm">{{ $message }}</span>
                           @enderror
                            
                            <div class="row mb-4 justify-content-center">
                                <div class="col-md-6 mt-4">
                           <input  class=" form-control ms-5 mt-3 col-md-9" type="file" name="file_url" id="file" value="{{ old('file_url') }}" placeholder="file"><br>
                           @error('file_url')
                           <span class="text-danger text-sm">{{ $message }}</span>
                           @enderror
                                </div>
                            </div>

                {{-- <div class="row mb-5 mt-1 justify-content-center">
                <div class="col-md-6">
                <input type="file"  name="file_url" id="file-url">
                </div>
            </div>
                             --}}

                            <input  class="btn btn-outline-primary  ms-5 " type="submit" value="submit assignment">
                            
                            
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
               
                    @endsection