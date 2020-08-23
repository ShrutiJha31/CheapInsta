@extends('layouts.app')

@section('content')
<div class="container">
<div class=" d-flex ">
<a href="/profile/{{ $userId }}">
<strong class="btn btn-primary">My Profile</strong>
</a>
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
</div>
   @foreach($posts as $post)
   <div class="row">
        <div class="col-4 offset-4">
        <a href="/profile/{{$post->user->id}}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
        </div>
    </div>
    <div class="row">  
        <div class="col-4 offset-4 pb-5">
       
        <hr>
        <p >   <a href="/profile/{{$post->user->id}}"><strong style="color:black">{{$post->user->username}}{{' '}}  </strong></a>{{$post->caption}}</p>
        </div>
   @endforeach
   <div class="row">
         <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
         </div>
   </div>
</div>
@endsection