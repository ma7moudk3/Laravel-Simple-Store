<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        $stores = Store::with('category')->get();
        //dd($stores);
        return view('layout.website.index')->with('categories', $categories)->with('stores',$stores);

    }

    public function storesIndex($id){
        $stores = Store::where('category_id',$id)->select('*')->get();
        return view('layout.website.stores')->with('stores',$stores);
    }

    public function storesIndexPeerCategory($id){
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        $stores = Store::where('category_id',$id)->select('*')->get();
        return view('layout.website.index')->with('stores',$stores)->with('categories', $categories);
    }

    public function productDetails($id){
        $store = Store::select("*")->where('id',$id)->with('category')->first();
        $ratings = Rating::select('*')->where('store_id', $id)->paginate(3);
        return view('layout.website.product-detail')->with('ratings',$ratings)->with('store',$store);
    }
    public function search(Request $request){
        $search = $request['search'];
        $stores = Store::where('name','like',"%".$search."%")->get();
        return view('layout.website.stores')->with('stores',$stores);

    }
}
