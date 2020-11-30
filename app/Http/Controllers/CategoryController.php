<?php

namespace App\Http\Controllers;
use Redirect;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categories.list', ['categories' => $categories]);
    }

    public function new(){
        return view('categories.formCategories');
    }

    public function add(Request $request){
        $category = new Category;
        $category = $category->create($request->all());
        return Redirect::to('/categories');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories.formCategories', ['category' => $category]);
    }
    

    public function update($id, Request $request){
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return Redirect::to('/categories');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return Redirect::to('/categories');
    }
}
