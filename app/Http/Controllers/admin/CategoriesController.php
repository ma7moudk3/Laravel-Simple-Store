<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('layout.admin.categories.create');
    }

    public function index()
    {
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        //dd($categories[0]->created_at);
        return view('layout.admin.categories.index')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $image = $request['image'];
        $details = $request['details'];
        $category = new Category();
        $category->name = $name;
        $category->details = $details;
        $category->image = asset('a2.jpg');
        $category->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::select('id', 'name', 'details', 'image')->where('id', $id)->first();
        //  dd($category);
        return view('layout.admin.categories.edit')->with("category", $category);
    }

    public function update(Request $request, $id)
    {

        $name = $request['name'];
        $details = $request['details'];
        $image = $request['image'];
        $category = Category::where('id', $id)->first();
        $category->name = $name;
       // $category->image = $image;
        $category->details = $details;
        $category->save();
        return redirect()->back();

    }
}
