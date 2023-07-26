@extends('layouts.header')

@section('content')

<body style="overflow-x: hidden" class="blog-nav-bar">

  <div class=" text-center mt-4  ">

    <div class="card p-1 text-center" >
  
        <h2 class="card-title text-primary"
          style="font-size:1.4rem;height:3rem; text-transform:capitalize; text-overflow:ellipsis;">{{
          $blog->title }}</h2>

      {{-- <img src="..." class="card-img-top" alt="..."> --}}
      <div>
        <img src="{{ asset('storage/'.$blog->image_path ) }}" height="400" width='400'>
      </div>
      <br>

      <div class="card-body">
        <p class="word-wrap" style=" text-align: justify;object-fit:contain; height:6rem; text-overflow:ellipsis">
          {{ $blog->description }} <br>
          <span class="text-sm text-primary">{{ date('d M',strtotime(' $blog->created_at')) }} </span>
        </p>
  
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
      </div>
    </div>

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