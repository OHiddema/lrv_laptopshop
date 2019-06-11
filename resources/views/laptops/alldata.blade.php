@extends('layout')

@section('content')
   <h1>Filter laptops on price and memory</h1>
   <br>
   <form method="GET" action="/getfiltereddata">
      Minimal memory: <input type="number" name="minmem" value="{{$minmem}}" 
      min="4" max="32" step="4" onchange="this.form.submit()"><br>
      Maximal price: <input type="number" name="maxprice" value="{{$maxprice}}" 
      min="100" max="1000" step="100" onchange="this.form.submit()"><br>
   </form>
   <br>
   There are {{$count}} laptops matching your criteria.<br><br>
   <table class='table table-striped table-sm'>
      <thead class='thead-dark'>
         <tr>
            <th>Brand</th>
            <th>Name</th>
            <th>Memory</th>
            <th>Price</th>
         </tr>
      </thead>
      @foreach ($laptops as $laptop)
         <tr>
         <td>{{$laptop->brand}}</td>
         <td>{{$laptop->name}}</td>
         <td>{{$laptop->memory}}</td>
         <td>{{$laptop->price}}</td>
         </tr>
      @endforeach
   </table>
@endsection