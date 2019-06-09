@extends('layout')

@section('content')
   <h1>All data</h1>
   <table border = "2">
      <tr>
         <th>Brand</th>
         <th>Name</th>
         <th>Memory</th>
         <th>Price</th>
      </tr>
      @foreach ($laptops as $laptop)
         <tr>
         <td>{{$laptop->brand}}</td>
         <td>{{$laptop->name}}</td>
         <td>{{$laptop->memory}}</td>
         <td>{{$laptop->price}}</td>
         </tr>
      @endforeach
   </table>
   <br>
   <form method="GET" action="/filter">
      Minimal memory: <input type="text" name="minmem" value="0"><br>
      Maximal price: <input type="text" name="maxprice" value="1000"><br>
      <button type="submit">Filter</button>
   </form>
@endsection