@extends('layouts.app')
@section('content')
   <center> <h1>EDITANDO PRODUCTO</h1></center>
   <form method="POST" action="{{ route('products.update', ['product'=>$product->id]) }}">
       @csrf
       @method('PUT')
        <div class="form-row">
            <label>Titulo</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') ?? $product->title }}" required>
        </div>
        <div class="form-row">
            <label>Descripcion</label>
            <input class="form-control" type="text" name="description" value="{{ old('description') ?? $product->description }}" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') ?? $product->price }}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') ?? $product->stock }}" required>
        </div>
        <div class="form-row">
            <label>Estado</label>
            <select class="custom-select" name="status" required>
                <option {{ old('status') == 'available' ? 'selected': ($product->status == 'available' ? 'selected' : '') }}
                    value="available">Disponible</option>
                <option {{ old('status') == 'unavailable' ? 'selected': ($product->status == 'unavilable' ? 'selected' : '') }}
                    value="unavilable">No Disponible</option>
            </select>
            <div class="form-row mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Editar Product</button>
            </div>
        </div>
   </form>
@endsection
