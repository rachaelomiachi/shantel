@extends('layouts.header')

@section('content')

<body style="overflow-x: hidden" class="blog-nav-bar">
  

  <div class="container-fluid">
    <div class="row" style="background-color: aliceblue">
      @foreach ($blogs as $blog)
      <div class="col-lg-3 col-sm-12 text-center mt-4  ">

        <div class="card p-1"  id="display-image" style="width: 18rem;height:25rem ">
          <h5 class="card-title"><h2 class=" text-primary" style="font-size:1.4rem;height:3rem; text-transform:capitalize; text-overflow:ellipsis;" >{{
            $blog->title }}</h2></h5>
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <img src="{{ asset('storage/'.$blog->image_path ) }}" class="card-img-top"  style="width: 100%; height:9rem"  alt=""> <br>
       
          <div class="card-body">
            <p class="word-wrap" style=" text-align: justify;object-fit:contain; height:6rem; text-overflow:ellipsis">{{ substr($blog->description, 0, 120)  }} ... <br>
              <span class="text-sm text-primary">{{ date('d M',strtotime(' $blog->created_at')) }} </span> </p>
              <a href="{{ route('blog.show',$blog->id) }}"   class="btn btn-primary btn-sm border-0">&rAarr;read more...</a>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
          </div>
        </div>

      </div>

      @endforeach
    </div>
    @endsection








    <script src="{{  asset('assets/js/card.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>