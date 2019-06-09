@extends('layout')

@section('content')
   <h1>{{$laptop->name}}</h1>
   Brand: {{$laptop->brand}}<br>
   Memory: {{$laptop->memory}}<br>
   Price: {{$laptop->price}}<br>
   <br>
   <a href="/laptops/{{$laptop->id}}/edit">Edit laptop</a>
@endsection