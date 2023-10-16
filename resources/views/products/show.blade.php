<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW</title>
</head>
<body>
   <center> <h1>{{ $product->title }} ({{ $product->id }})</h1></center>
    <h3>DESCRIPCION: {{ $product->description }}</h3>
    <h3>PRECIO: {{ $product->price }}</h3>
    <h3>STOCK: {{ $product->stock }}</h3>
    <h3>ESTADO: {{ $product->estatus }}</h3>
</body>
</html>
