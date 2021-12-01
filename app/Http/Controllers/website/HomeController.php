<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        $stores = Store::get();

        return view('layout.website.index')->with('categories', $categories)->with('stores',$stores);

    }

    public function storesIndex($id){
        $stores = Store::where('category_id',$id)->select('*')->get();
        return view('layout.website.stores')->with('stores',$stores);
    }
}
