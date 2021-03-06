@extends('layout')

@section('content')
   <h1>Edit laptop</h1>
   <form method="POST" action="/laptops/{{$laptop->id}}">
      @method('PATCH')
      @csrf
      Brand: <input type="text" name='brand' value='{{$laptop->brand}}'><br><br>
      Name: <input type="text" name='name' value='{{$laptop->name}}'><br><br>
      Memory: <input type="number" name="memory" value='{{$laptop->memory}}'><br><br>
      Price: <input type="number" name="price" value='{{$laptop->price}}'><br><br>
      <button class="btn btn-primary" type="submit">Update</button>
   </form>
   <br>
   <form method="POST" action="/laptops/{{$laptop->id}}">
      @method('DELETE')
      @csrf
      <button class="btn btn-primary" type="submit">Delete</button>
   </form>
@endsection