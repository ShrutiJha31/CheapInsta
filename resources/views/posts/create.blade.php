@extends('layouts.app')

@section('content')
<div class="container">
       
       <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
       <div class="row page-header justify-content-center"><h1>Add New Post</h1></div>
       <div class="row">
           <div class="col-8 offset-2">
               
           <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

              
                                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror"  value="{{ old('username') }}" required autocomplete="username">

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <div class="row p-4">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                         <input type="file",class="form-control-file" id="image" name="image">
                         @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
                     </div>
                  <div class="row justify-content-center  p-3">
                  
                       <button class="btn btn-primary ">Add Post</button>
                  
                  </div>   
              
           </div>
           </div>
        </form>   
     
     
</div>
@endsection
