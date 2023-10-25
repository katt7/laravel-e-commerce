@extends('layouts.app')

@section ('content')
    <h1>WELCOME</h1>
    @empty($products)
        <div class="alert alert-danger">
            NO HAY PRODUCTOS AQUI!!!
        </div>
        @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3">
                   @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty
@endsection
