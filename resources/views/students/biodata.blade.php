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
            <h1>Student Biodata</h1>
            <div class="form">
                <form action="{{route('students.store') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div>
                        <label for="image">Image</label>
                        <input type="file" src="" name="image" alt="student image" required>
                    </div>

                    {{-- <div>
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div> --}}

                    <div class="col-md-6">
                        <label for="firstname">Firstname</label>
                        <input id="name1" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    {{-- <div>
                        <label for="middlename">Middlename</label>
                        <input type="text" name="middlename" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="middlename">Middlename</label>
                        <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>

                        @error('middlename')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    {{-- <div>
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    {{-- <div>
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="age">age</label>
                        <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="email">E-mail</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    {{-- <div>
                        <label for="address">Address</label>
                        <input type="text" name="faddress" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="address">Address/label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    {{-- <div>
                        <label for="faculty">Faculty</label>
                        <input type="text" name="faculty" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="faculty">Faculty</label>
                        <input id="faculty" type="text" class="form-control @error('faculty') is-invalid @enderror" name="faculty" value="{{ old('faculty') }}" required autocomplete="faculty" autofocus>

                        @error('faculty')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    {{-- <div>
                        <label for="department">Department</label>
                        <input type="text" name="deperstment" class="form-control" required>
                    </div> --}}
                    <div class="col-md-6">
                        <label for="depertment">Depertment</label>
                        <input id="depertment" type="text" class="form-control @error('depertment') is-invalid @enderror" name="depertment" value="{{ old('mdepertment') }}" required autocomplete="depertment" autofocus>

                        @error('depertment')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary mt-5" value="Submit">

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
