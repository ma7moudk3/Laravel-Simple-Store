<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function create()
    {
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        return view('layout.admin.stores.create')->with('categories',$categories);
    }

    public function index()
    {
        $stores = Store::get();
        dd($stores[0]->toArray());
        return view('layout.admin.stores.index')->with('stores', $stores);
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $image = $request['image'];
        $category_id = $request['category_id'];
        $details = $request['details'];
        $owner_phone = $request['owner_phone'];
        $owner_name = $request['owner_name'];
        $store = new Store();
        $store->name = $name;
        $store->category_id = $category_id;
        $store->owner_phone = $owner_phone;
        $store->owner_name = $owner_name;
        $store->image = asset('a2.jpg');
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Store::where('id', $id)->delete();
        return redirect()->back();
    }


}
