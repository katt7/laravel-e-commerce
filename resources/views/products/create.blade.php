@extends('layouts.master')
@section('conten')
   <center> <h1>CREANDO UN PRODUCTO</h1></center>
   <form method="POST" action="{{ route('products.store') }}">
       @csrf
        <div class="form-row">
            <label>Titulo</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-row">
            <label>Descripcion</label>
            <input class="form-control" type="text" name="description" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" required>
        </div>
        <div class="form-row">
            <label>Estado</label>
            <select class="custom-select" name="status" required>
                <option value="" selected>Selecciona...</option>
                <option value="available">Disponible</option>
                <option value="unavilable">No Disponible</option>
            </select>
            <div class="form-row">
                <button type="submit" class="btn btn-primary btn-lg">Crear Product</button>
            </div>
        </div>
   </form>
@endsection
