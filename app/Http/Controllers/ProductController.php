<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //->except(['index', 'create']);
    }
    public function index()
    {
       //$products = DB::table ('products')->get();
       //$products = Product::all();
       //dd($products);
        return view ('products.index')->with([
            'products' => Product::all(),
        ]);
    }
    public function create()
    {
        return view ('products.create');
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        return redirect()->route('products.index')->withSuccess("El producto con ID {$product->id} fue creado exitosamente");

    }
    public function show(Product $product)
    {
            return view("products.show")->with([
            'product' => $product,
        ]);
    }
    public function edit(Product $product)
    {
        return view ("products.edit")->with([
            'product'=>$product,
            //=> Product::findOrFail($product),
        ]);
    }
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.index')->withSuccess("El producto con ID {$product->id} fue Editado exitosamente");

    }
    public function destroy(Product $product)
    {
        //$product = Product::findOrFail($product);
        $product->delete();

        return redirect()->route('products.index')->withSuccess("El producto con ID {$product->id} fue Eliminado exitosamente");

    }
}
