
    {{-- <h1>WELCOME</h1> --}}

    @extends('layouts.header')

    @section('content')

    <div class="container-fluid mb-5 mt-5" class="hero-slide">
        <div class="row">
            
                  <div class="hero">
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    {{-- <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div> --}}
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img style="height:100vh; width:100vw; object-fit:cover" src="{{ asset('assets/img/brooke-cagle-g1Kr4Ozfoac-unsplash.jpg') }}" class="d-block w-100 h-10" alt="...">
                          
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="display-6">Shantel Students Working As A Team</h5>
                          <p>Shantel school is A place Where students learn together <br>to bring the best out of them</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img style="height:100vh; width:100vw; object-fit:cover" src="{{ asset('assets/img/alexandre-van-thuan-mr9FouttLGY-unsplash.jpg') }}"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Shantel Main Library</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img style="height:100vh; width:100vw; object-fit:cover" src="{{ asset('assets/img/halle-parks-o30YiK5XKKs-unsplash.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="text-dark display-6">Shantel Senate Building</h5>
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
  </div>

  <div class="sty">
<h6 class="display-6 mt-5"><span style="font-style: normal">Shantel College, A Home  Home Of Accademic Excellence</span></h6>

<h5 >"True education means more than the pursual of a certain course 
  of study. It means more than a preparation for the life that now is. 
  It has to do with the whole being, and with the whole period of 
  existence possible to man. It is the harmonious development of
   the physical, the mental, and the spiritual powers. It prepares
    the student for the joy of service in this world and for the higher 
    joy of wider service in the world to come."
   <br>
   Ellen G. White, </h5>
    </div>

    <div class="container- text-center mt-5">
      <div class="row">
        <div class="col-4">
          {{-- Column --}}
         
          <img src="{{ asset('assets/img/backgroundst.jpg') }}" alt="">
          <h5 class="mt-3">The Newly Mtriculated Students <br> on Friday, July 3<sup>rd</sup>,</h5>
        
        </div>
        {{-- <div class="col-3"> --}}
          {{-- Column
          <h2 class="uni">24th Matriculation Ceremony</h2> --}}
          
          {{-- <img src="{{ asset('assets/img/library.jpg') }}" class="w-10%" alt=""> --}}
           {{-- <h5>
            The 24th <br> undergraduate <br>
             matriculation <br>
             ceremony of Shantel <br>
              University was held 
          </h5> --}}
          {{-- <h5>
            The 24th <br> undergraduate <br>
             matriculation <br>
             ceremony of Shantel <br>
              University was held 
          </h5> --}}
        {{-- </div> --}}
        
        <div class="col-4">
          {{-- Column --}}
          <img src="{{asset('assets/img/matric.jpg') }}" alt="">
          <h5 class="mt-3">The Newly Mtriculated Students <br> on Friday, July 3<sup>rd</sup>,</h5>
        </div>

        <div class="col-4">
          {{-- Column --}}
          <img src="{{ asset('assets/img/converg.jpg') }}" alt="">
          
          <h5 class="mt-3"> collaboration/converged on Shantel University</h5>
        </div>

      </div>
    </div>
    <hr class="bg-primary">


            <!-- card carousel starts here -->

        <div class="container-fluid">
          <div class="row mb-5">

            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img class="img-fluid" src="{{ asset('assets/img/dayold.JPG') }}">
                <div class="card-body">
                  <h5 class="card-title mt-1">AGRICULTURE</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="bg-primary text-light p-2 ms-5" id="card-buttons">Read More &rarr;</a>
                </div>
              </div>
           </div> 

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/innovation.JPG') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mt-1">INNOVATION AND TECHNOLOGY</h5>
              <p class="card-text">Some quick text  up the bulk of the card's ciontent.</p>
              <a href="#" class="bg-primary text-light p-2 ms-5" id="card-buttons">Read More &rarr;</a>
            </div>
            </div>
          </div> 

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/medical students.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mt-1">MEDICAL STUDENTS</h5>
              
              <p class="card-text">Some quick example text to build the buijhdgilm cbfghdirteuwbsjddd on the card title and make up the bulk of the conttent.</p>
              <a href="#" class="bg-primary text-light p-2 ms-5" id="card-buttons" id="card-buttons">Read More &rarr;</a>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/community.JPG') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mt-1">COMMUNITY SERVICES</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              <a href="#" class="bg-primary text-light p-2 ms-5" id="card-buttons">Read More &rarr;</a>
            </div>
          </div>
        </div>
      </div>  
    </div>
    </div> 
    </div>
    </div>  
    </div>
    </div>
    </div>
          <!-- container -->
          <div class="container-fluid">
            <div class="row" style="background-color: white smoke">
              <div class="">
                {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex nesciunt, dolore sit velit at ad deleniti reprehenderit enim! Quod modi, esse deleniti aliquam magni laboriosam repellendus quos nostrum ipsam delectus.</p>
                --}}
                <i class="fa fa-facebook-square bg-light"  aria-hidden="true"></i>
              </div>
              
            </div>

          </div>

             
  @endsection
          
                

    
                