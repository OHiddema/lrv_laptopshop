<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1>New laptop</h1>
   <form method="POST" action="/laptops">
      {{ csrf_field() }}
      Brand: <input type="text" name='brand' value='{{old('brand')}}'><br><br>
      Name: <input type="text" name='name' value='{{old('name')}}'><br><br>
      Memory: <input type="number" name="memory" value='{{old('memory')}}'><br><br>
      Price: <input type="number" name="price" value='{{old('price')}}'><br><br>
      <button type="submit">Add new laptop</button>

      @if($errors->any())
      <div style="background-color:red">
         <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
         </ul>
      </div>
      @endif
   </form>
</body>
</html>