<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
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
    public function store()
    {
        if(request()->status == 'available' && request()->stock == '0'){
            //session()->put('error', 'Si esta disponible, debe tener stock');
            session()->flash('error', 'Si esta disponible, debe tener stock');

            return redirect()->back();
        }

        $product = Product::create(request()->all());

        // return redirect()->back();
        // return redirect()->action('MainController@index');
           return redirect()->route('products.index');

    }
    public function show($product)
    {
        //$product = DB::table('products')->where('id', $product)->first();
        //$product = DB::table('products')->find($product);
        $product = Product::findOrfail($product);
        //dd($product);
        return view("products.show")->with([
            'product' => $product,
        ]);
    }
    public function edit($product)
    {
        return view ("products.edit")->with([
            'product' => Product::findOrFail($product),
        ]);
    }
    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());

        return redirect()->route('products.index');

    }
    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();

        return redirect()->route('products.index');

    }
}
