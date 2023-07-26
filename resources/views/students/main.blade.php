<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" > --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
  <body>
    <nav class="navbar navbar-expand-lg " id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Shantel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ asset('main') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('students.create') }}">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ asset('login') }}">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ asset('assignment') }}">Submit Assignment</a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ ('pay') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Pay Your Fees
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">masters</a></li>
                <li><a class="dropdown-item" href="#">PGD Students</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Undergraduate</a></li>
              </ul>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li> --}}
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <h1>WELCOME</h1>

    <div class="container-fluid" class="hero-slide">
        <div class="row">
            {{-- <div class="col"> --}}
                {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active"> --}}
                        {{-- <img  style="background-image: url('assets/img/post-slide-1.jpg');"  class=" w-15% h-100%" alt="...">
                        <a href="single-post.html"  style="background-image: url('assets/img/post-slide-1.jpg');">
                                --}}
                                {{-- <div class="carousel-item">
                                    <img src="{{ asset('assets/img/happy.jpeg') }}" class=" h-10"  alt="...">
                                  </div> --}}
                      {{-- </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/2students.jpg') }}" class=" h-10" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/black&white.jpeg') }}" class="  h-10" alt="...">
                      
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> --}}
                    {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus aliquid nisi facere provident molestias inventore dolore, harum, corporis totam ab, autem facilis! Repellendus blanditiis sint alias repellat consectetur odit dolorem.</p>
                  --}}
                  {{-- </div> --}}
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('assets/img/library.jpg') }}" class="d-block w-100" alt="...">
                          
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/pexels-students.jpeg') }}"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/lecture.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            
        </div>

    </div>

    <div class="sty">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint amet maxime quam impedit atque illo dolore neque animi quasi commodi cumque at, molestiae rerum ab? Rerum facilis laudantium labore sint?
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
