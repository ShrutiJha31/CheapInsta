@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pr-5 pl-5 pt-5 ">
          <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100 " >
         
        </div>
        <div class="col-md-8 pt-5">
   
          <div class="d-flex justify-content-between align-text-bottom">
          <div class="d-flex align-items-center pb-2">
        <div class="h4">{{ $user->username }}</div>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
          </div>
          @can ('update',$user->profile)
          <a href="/p/create">Add New Post</a>
          @endcan
          
          </div>

         

          @can ('update',$user->profile)
          <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
          @endcan
          <div class="d-flex">
             <div class="pr-5"><strong>{{$postCount}}  </strong>posts</div>
             <div class="pr-5 "><strong>{{$followersCount}} </strong>followers </div>
             <div class="pr-5"> <strong>{{$followingCount}}  </strong>following</div>
            
          </div>
          <div class="pt-3" ><strong>{{$user->name}}</strong></div>
          <div><strong>{{  $user->profile->title }}</strong></div>
          <div>{{ $user->profile->description }}</div>
          <a href="#">{{$user->profile->url}}</a></div>
    </div>
</div>

<div class="row p-5 mt-5" >
   
   @foreach($user->posts as $post)
      <div class="col-md-4 ustify-content-between pb-4">
          <a href="/p/{{ $post->id }}">
          <img src="/storage/{{$post->image}}" class="w-100">
          </a>
      </div>

   @endforeach
    
</div>
@endsection
