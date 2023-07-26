{{-- @extends('layouts.filed')

@section('content') --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body style="overflow-x: hidden">
    <nav class="navbar navbar-expand-lg text-light " id="navbar">
        <div class="container-fluid text-light row">
            <div class="col-3">
                <a class="navbar-brand text-light lead-text display-2" href="#">Shantel</a>
            </div>
            <div class="col-2"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent col-7">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link active text-light text-end" aria-current="page"
                            href="{{ asset('home') }}">Home</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link active text-light text-end" aria-current="page"
                            href="{{ route('students.create') }}">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-light text-end" aria-current="page"
                            href="{{ asset('login') }}">Login</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link active text-light text-end" aria-current="page"
                            href="{{ asset('assignment') }}">Submit Assignment</a>
                    </li> --}}

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light text-end" href="{{asset ('pay') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pay Your Fees
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">masters</a></li>
                            <li><a class="dropdown-item" href="#">PGD Students</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Undergraduate</a></li>
                        </ul>
                    </li> --}}


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('students.create') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre> welcome dear
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </ul>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->


    <h1 class="mt-5">REGISTER</h1>
    <div class="">
        <form action="{{route('students.store') }}" method="post" class="mt- justify-content-center">
            @csrf

            <div class="row mb-3 justify-content-center">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                {{-- <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label> --}}

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" name="phone"
                        value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-3 justify-content-center">
                {{-- <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label> --}}

                <div class="col-md-6">
                    <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" placeholder="Age" name="age"
                        value="{{ old('age') }}" required autocomplete="age" autofocus>

                    @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3 mt-1 justify-content-center">
                {{-- <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label> --}}

                <div class="col-md-6 justify-content-center">
                <select name='type_id' class="form-control form-select form-select-md "  aria-label=".form-select-sm example">
                    <option>--select Type--</option>
                    @foreach ($type as $type)
                    <option class="form-control" value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-3 justify-content-center ">
                {{-- <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Faculty') }}</label> --}}

                <div class="col-md-6 justify-content-center">
                <select name='faculty_id' class="form-control form-select form-select-md " aria-label=".form-select-sm example">
                    <option>--select--</option>
                    @foreach ($faculty as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                {{-- <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Departmet') }}</label>
                --}}
                <div class="col-md-6">
                <select name='department_id' class="form-control form-select form-select-md " aria-label=".form-select-sm example">
                    <option>--select Department--</option>
                    @foreach ($department as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-3 ">
                {{-- <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Departmet') }}</label>
                --}}
                {{-- <div class="col-md-6">
                <select name='department_id' class="form-control form-select form-select-md " aria-label=".form-select-sm example">
                    <option>--Course--</option>
                    @foreach ($course as $course)
                    <option value="{{ $course->id }}">{{ $courses->name }}</option>
                    @endforeach
                </select>
                </div>
            </div> --}}

            <div class="row mb-3 justify-content-center">
                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password')
                    }}</label> --}}

                <div class="col-md-6 ">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="confirm password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
    </div>
    {{-- @endsection --}}