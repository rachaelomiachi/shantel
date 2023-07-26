@extends('layouts.filed')

@section('content')
<div class="mt-5">
<div>
<a href="/students.create">
create Your Bio &rarr;
</a>
</div>
<select name='type_id'>
    <option>--select Type--</option>
    @foreach ($type as $type)
        <option value="{{ $type->id }}" >{{ $type->name }}</option>
  @endforeach
</select> 


<select name='user_id'>
    <option>--select User--</option>
    @foreach ($users as $user)
        <option value="{{ $user->id }}" >{{ $user->name }}</option>
  @endforeach
</select> 


<select name='faculty_id'>
    <option>--select--</option>
    @foreach ($faculty as $faculty)
        <option value="{{ $faculty->id }}" >{{ $faculty->name }}</option>
  @endforeach
</select>

<select name='department_id'>
    <option>--select Department--</option>
    @foreach ($department as $department)
        <option value="{{ $department->id }}" >{{ $department->name }}</option>
  @endforeach
</select>
@foreach ($faculty as $faculty )

<div class="">
    {{-- <a href="students/{{ $student->id }}/edit">Edit &rarr;</a> --}}

    {{-- <div class="">
        <form action="/students/{{ $students->id }}" method="post">
            @csrf
            @method('delete')

            <button type="submit" class="text-danger">
                Delete &rarr;
            </button>
        </form>
    </div> --}}
</div>
</div>
@endforeach




<div class="container">
  <h1 class="ms-5">Student List</h1>
  <a href="{{route('students.create')}}" class="btn btn-danger">Home</a>
  <a href="{{route('students.create')}}" class="btn btn-primary">Add Student</a>
  <table class="table" style="border-left:solid">
   <thead>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>Phone</th>
        <th>Age</th>
        <th>type_id</th>
        <th>faculty_id</th>
        <th>department_id</th>
        <th>E-mail</th>
        <th>Address</th>
        
    </tr>
   </thead>

   <tbody>
    @php
        $i = 1;
    @endphp
@foreach ($users as $user)
    

   
   <tr>
    <td>{{$i++}}</td>
        {{ $user->id }}
    <td>{{$user->name}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->age}}</td>
    <td>{{$user->type_id}}</td>
    <td>{{$user->faculty_id}}</td>
    <td>{{$user->department_id}}</td>
    <td>{{$user->email}}</td>
   
    <td><a href="{{route('students.edit',$user->id)}}" class="btn btn-primary">Edit</a>
    |
    {{-- <a href="{{route('students.destroy',$user->id)}}" class="btn btn-danger">Delete</a></td> --}}
   <td>
    <a href="{{ route('students.delete', $user) }}" class="btn btn-primary" >Delete </a>
{{-- 
    <form action="{{ route('students.destroy', $user->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit"  class="btn btn-primary">Delete</button>
    </form> --}}
    </td>
    
   
   
   </tr>
   @endforeach                                        
   </tbody>
  </table>
  </div>
  @endsection
