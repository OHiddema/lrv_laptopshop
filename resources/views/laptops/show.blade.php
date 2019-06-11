@extends('layout')

@section('content')
   <h1>{{$laptop->name}}</h1>
   Brand: {{$laptop->brand}}<br>
   Memory: {{$laptop->memory}}<br>
   Price: {{$laptop->price}}<br>
   <br>
   <!-- BEGIN Show price history -->
   @foreach ($laptop->prices as $price)
      <li>{{$price->startDate}}, {{$price->price}}</li>
   @endforeach
   <!-- END Show price history -->
   <br>
   
   <a href="/laptops/{{$laptop->id}}/edit">Edit laptop</a>
@endsection