@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <div class="row page-header justify-content-center pb-4"><h1>Search Results</h1></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            
            <tr>
                
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>
<a href="/profile/{{ $user->id }}"><button class="btn btn-info">Visit Profile</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection