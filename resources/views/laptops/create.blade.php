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
      Brand: <input type="text" name='brand'><br><br>
      Name: <input type="text" name='name'><br><br>
      Memory: <input type="number" name="memory"><br><br>
      Price: <input type="number" name="price"><br><br>
      <button type="submit">Add new laptop</button>
   </form>
</body>
</html>