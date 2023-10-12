<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW</title>
</head>
<body>
    <h1>{{ $product->title }} ({{ $product->id }})</h1>
    <h3>{{ $product->description }}</h3>
    <h3>{{ $product->price }}</h3>
    <h3>{{ $product->stock }}</h3>
    <h3>{{ $product->estatus }}</h3>
</body>
</html>
