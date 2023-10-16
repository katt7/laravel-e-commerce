@extends('layouts.master')

@section('conten')
    <h1>LISTA DE PRODUCTOS</h1>
        @empty($products)
            <div class="alert alert-warning">
                LA LISTA DE PRODUCTOS ESTA VACIA
            </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>DESCRIPTION</th>
                                <th>PRECIO</th>
                                <th>STOCK</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        @endempty
@endsection

