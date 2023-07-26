<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" > --}}
    <link rel="stylesheet" href="{{ asset('sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==') }}"> 
  
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   
   <script src="https://cdn.tiny.cloud/1/9a2segmyfd2c2xxpsty6xn21ybd57o2m9fjlyf4gy8f97gtp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
  </script>

  <body style="overflow-x: hidden">
    <nav class="navbar navbar-expand-lg text-light " id="navbar">
      <div class="container-fluid text-light row" >
        <div class="col-3">
          <a class="navbar-brand text-light lead-text display-2" href="#">Shantel</a>
        </div>
        <div class="col-2"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent col-7">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light text-end" aria-current="page" href="{{ asset('/home') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-light text-end" aria-current="page" href="{{ route('blog.index') }}">Blog</a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link active text-light text-end" aria-current="page" href="{{ asset('login') }}">Login</a>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link active text-light text-end" aria-current="page" href="{{ asset('assignment') }}">Submit Assignment</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-light text-end" aria-current="page" href="{{ asset('submission') }}">Submission</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light text-end" href="{{ ('pay') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Pay Your Fees
              </a>
              <ul class="dropdown-menu"><li><a class="dropdown-item" href="{{ asset('pay') }}">Undergraduate</a></li>
                <li><a class="dropdown-item" href="{{ asset('pay') }}">masters</a></li>
                <li><a class="dropdown-item" href="{{ asset('pay') }}">PGD Students</a></li>
                <li><a class="dropdown-item" href="{{ asset('pay') }}">Undergraduate</a></li>
                <li><hr class="dropdown-divider"></li>
                
              </ul>
            </li>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                              <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link text-light" href="{{ route('students.create') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> welcome dear
                              {{ Auth::user()->name  }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
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
          {{-- <form class="d-flex" role="search">
            <input class="btn btn-outline-warning form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button> --}}
          </form>
        </div>
      </div>
    </nav>
    @yield('content')

     <!-- footer starts here -->
     <div class="container-fluid mt-5">
        <div class="row bg-dark" class="">
          <div class="col-4">
            <h6 class="text-light mt-4">FAQ</h6>
          <p class="text-light">
             
            <a class="text-light mt-" style="text-decoration: none" href="#"> <h6>&rarr;Where's Shantel School Located?</h6></a><br>
            <a class="text-light mt" style="text-decoration: none" href="#"><h6>&rarr; When is 2023\2024 Session Starting?</h6></a><br>
            <a class="text-light mt-" style="text-decoration: none" href="#"><h6>&rarr; What Programmes Do They Run</h6></a> <br>
            <a class="text-light mt-" style="text-decoration: none" href="#"><h6>&rarr; How Much Is School Fees </h6>
              &rarr;For Under Graduates
            </a>
          </p>
          </div>


          <div class="col-4">
            <p class="text-light">
              <h6 class="text-light mt-4">Quick Links</h6>
              <a class="text-light" style="text-decoration: none" href="#"> <h6>&rarr;Where's Shantel School Located?</h6></a><br>
              <a class="text-light" style="text-decoration: none" href="#"><h6>&rarr; When is 2023\2024 Session Starting?</h6></a><br>
              <a class="text-light" style="text-decoration: none" href="#"><h6>&rarr; What Programmes Do They Run</h6></a> <br>
              <a class="text-light" style="text-decoration: none" href="#"><h6>&rarr; How Much Is School Fees </h6>
                &rarr;For Under Graduates
              </a>
            </p>
            </div>


            <!-- FONT ICONS -->
            <div class="col-4">
              <p class="text-light">
               <h6 class="text-light mt-4"> Visit Us On Social Media</h6>
                <i class="fa fa-facebook-square bg-light"  aria-hidden="true"></i> <br>

                <img  class="text-light" style="height:3vh; width:3vw;" src="{{ asset('assets/img/5296499_fb_facebook_facebook logo_icon.png') }}"  alt=""> <span class="text-light ms-3">shantel school </span><br>shantel school <br> 
                <img class="text-light" style="height:4vh; width:3vw;" src="{{ asset('assets/img/4102580_applications_media_social_twitter_icon.png') }}" class="ms-" alt=""><span class="text-light ms-3">shantelschool247</span> <br><br>
                <img style="height:3vh; width:3vw;" src="{{ asset('assets/img/6929232_logo_whatsapp_icon(3).png') }}" alt=""><span class="text-light ms-3">realshantelschool </span><br> <br>
                <img style="height:3vh; width:3vw;" src="{{ asset('assets/img/3225191_app_instagram_logo_media_popular_icon.png') }}" alt=""><span class="text-light ms-3">@shantelschool</span> <br><br>
                <img style="height:3vh; width:3vw;" src="{{ asset('assets/img/5296501_linkedin_network_linkedin logo_icon.png') }}" alt=""><span class="text-light ms-3">shantel school</span> 
              </p>
              </div>


              <div class="copyright text-primary lead-text ms-5 text-sm text-center">
                © Copyright <strong class="text-primary text-center">Shantel College</strong>. All Rights Reserved
              </div>

            <div class="">
             sasaqsas
              
            </div>

        </div>

      </div>
<script src="{{  asset('assets/js/card.js') }}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> 

