@extends('layout')

@section('content')
   <h1>Laptops</h1>
   <ul>
      @foreach ($laptops as $laptop)
         <li>
            <a href="/laptops/{{$laptop->id}}">
               {{$laptop->name}}
            </a> 
         </li>
      @endforeach
   </ul>

   <br>
   <a href="/laptops/create">Create new laptop</a>
@endsection