<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container bg-secondary">
        <div class="row">
            <div class="col">

    
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h1>Update Your Biodata</h1>
            <div class="form">
                <form action="/students/{{ $user->id }}"
                 method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')


                    <div class="col-md-6">
                        <label for="name">name</label>
                        <input id="name" type="text" 
                        class="form-control 
                        @error('name') is-invalid @enderror"
                         name="name" value="{{ $user->name }}"
                          required autocomplete="name" autofocus 
                          value="{{ $user->firstname}}">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    
                    <div class="col-md-6">
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" 
                        class="form-control @error('phone') is-invalid @enderror"
                         name="phone" 
                          required autocomplete="phone" autofocus 
                          value="{{ $user->phone }}">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    
                    <div class="col-md-6">
                        <label for="age">Age</label>
                        <input id="age" type="text" 
                        class="form-control 
                        @error('age') is-invalid @enderror"
                         name="age" value="{{$user->age  }}"
                          required autocomplete="age" autofocus
                           value="{{ $user->age }}">

                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    
                    <div class="col-md-6">
                        <select name='type_id'>
                            <option>--select Type--</option>
                            @foreach ($types as $type)
                                <option class="form-control" value="{{ $type->id }}" >{{ $type->name }}</option>
                        @endforeach
                        </select> <br>
                        {{-- <label for="age">age</label>
                        <input id="age" type="text"
                         class="form-control 
                         @error('age') is-invalid @enderror" 
                         name="age" value="{{ old('age') }}"
                          required autocomplete="age" autofocus value="{{ $student->age }}">

                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                    </div>


                    {{-- <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input id="mobile" type="text" 
                        class="form-control 
                        @error('mobile') is-invalid @enderror"
                         name="mobile" value="{{ old('mobile') }}"
                          required autocomplete="mobile" autofocus
                           value="{{ $student->mobile }}">

                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                    <div class="row mb-3 p-5">
                        <select name='faculty_id'>
                            <option>--select--</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}" >{{ $faculty->name }}</option>
                        @endforeach
                        </select><br>
                        </div>


                        <div class="row mb-3 p-5">
                            <select name='department_id'>
                                <option>--select Department--</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" >{{ $department->name }}</option>
                            @endforeach
                            </select>
                            </div>

                    <div class="col-md-6">
                        <label for="email">E-mail</label>
                        <input id="email" type="text" class="form-control
                         @error('email') is-invalid @enderror" name="email" 
                          required autocomplete="email" 
                         autofocus value="{{ $user->email }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input id="password" type="text" class="form-control
                         @error('password') is-invalid @enderror" name="password" 
                          required autocomplete="password" 
                         autofocus value="{{ $user->password }}">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    


                    
                    

                    <input type="submit" class="btn btn-primary mt-5" value="update">

                </form>
            </div>
        </div>
      </div>
    </div>
    </div>
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
