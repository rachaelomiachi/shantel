@extends('layouts.header')

@section('content')

    <div class="container  justify-content-center">
        <div class="row">
            <div class="col ">
                <h2>New Blog</h2>
                <form action="{{ route('blog.store') }}" method="post" class="mt- justify-content-center" enctype="multipart/form-data">
                    @csrf

                    <div class="card text-bg-light mb-3" style="max-width: 50rem;">
                        <div class="card-header h4 text-center text-light" style="background-color:blue">Create Post</div>
                        <div class="card-body">
                          
                          <p class="card-text">
                            <input type="hidden" name="user_id">

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title"
                                        value="{{ old('title') }}" required autocomplete="title" autofocus="danger">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('file-path') is-invalid @enderror"  name="file_path"
                                        value="{{ old('file-path') }}" required autocomplete="file-path" autofocus>
                                    @error('file-path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <textarea name="description" id="" class="form-control" cols="10" rows="5" value="{{ old('description') }}" placeholder="Post Description" required autocomplete="descriptin" autofocus></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                            <input class="btn btn-lg btn-outline-primary" type="submit" value="submit">
                                </div>
                            </div>



                          </p>
                        </div>
                      </div>
    
                   
                </form>


                
                  
               
            </div>
    
        </div>
    
    </div>
@endsection