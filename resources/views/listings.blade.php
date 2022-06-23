@extends('layout')

@section('content')

@if(count($listings)==0)
<h1> NO listing available</h1>
@endif
@foreach($listings as $listing)
    <h2><a href = "/listings/{{$listing['id']}}"> {{$listing['title']}}</h2> </a>
    <p>{{$listing['description']}}</p>
 @endforeach

 @endsection