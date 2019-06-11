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

   <!-- BEGIN Add a new price -->
   <br>
   <h3>Add a new price</h3>
   <form method="POST" action="/laptops/{{$laptop->id}}/prices">
      @csrf
      Price: <input type="number" name="price"><br>
      Start date: <input type="date" name="startDate"><br>
      <button type="submit" class="btn btn-primary">Add price</button>
   </form>
   <!-- END Add a new price -->

@endsection