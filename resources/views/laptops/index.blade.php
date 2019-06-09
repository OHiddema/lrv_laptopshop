<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
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
</body>
</html>