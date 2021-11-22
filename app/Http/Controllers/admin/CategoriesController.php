<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create(){
        return view('layout.admin.categories.create');
    }

    public function index(){
        $categories = Category::select('id','name','details','image')->get();
        return view('layout.admin.categories.index')->with('categories', $categories);
    }

    public function store(Request $request){
        $name = $request['name'];
        $image = $request['image'];
        $details = $request['details'];
        $category = new Category();
        $category->name = $name;
        $category->details	= $details;
        $category->image = asset('a2.jpg');
        $result = $category->save();
        return redirect()->back();
    }

    public function destroy($id){
        $result = Category::where('id',$id)->delete();
           return redirect()->back();

    }

}
