@extends('layout')

@section('content')

<h1>{{$heading}}</h1>
@if(count($listings)==0)
<h1> NO listing available</h1>
@endif
@foreach($listings as $listing)
    <h2><a href = "/listings/{{$listing['id']}}"> {{$listing['title']}}</h2> </a>
    <p>{{$listing['id']}}</p>
 @endforeach

 @endsection