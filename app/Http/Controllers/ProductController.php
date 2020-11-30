<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Redirect;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products.list', ['products' => $products]);
    }

    public function new(){
        return view('products.formProducts');

    }

    public function add(Request $request){
        $product = new Product;
        $product = $product->create($request->all());
        return Redirect::to('/products');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.formProducts', ['product' => $product]);
    }

    public function update($id, Request $request){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return Redirect::to('/products');
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return Redirect::to('/products');
    }
}
