@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4 ">
        <div class="d-flex align-items-center">
        <div>
        <img src ="/storage/{{ $post->user->profile->image}}" class="rounded-circle  w-50" style="max-width:55px">
        </div>
        <div>
          <p class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="font-weight-bold" style="color:black">{{$post->user->username}}</span></a></h5>
         <a href="#" class="pl-3">Follow</a>
        </div>
        </div>
        <hr>
        <p >{{$post->caption}}</p>
        </div>
</div>
@endsection