@extends('layouts.app')
@section('content')
   <center> <h1>{{ $product->title }} ({{ $product->id }})</h1></center>
    <h3>DESCRIPCION: {{ $product->description }}</h3>
    <h3>PRECIO: {{ $product->price }}</h3>
    <h3>STOCK: {{ $product->stock }}</h3>
    <h3>ESTADO: {{ $product->estatus }}</h3>
@endsection

