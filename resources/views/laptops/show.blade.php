@extends('layout')

@section('content')
   <h1>{{$laptop->name}}</h1>
   Brand: {{$laptop->brand}}<br>
   Memory: {{$laptop->memory}}<br>
   Price: {{$laptop->price}}<br>
   <br>
   <a href="/laptops/{{$laptop->id}}/edit">Edit laptop</a>
   <br><br>

   @if ($laptop->prices->count())
      <div>
         <h3>Price history</h3>
         @foreach ($laptop->prices as $price)
            <li>{{$price->startDate}}, {{$price->price}}</li>
         @endforeach
      </div>
   @endif

@endsection