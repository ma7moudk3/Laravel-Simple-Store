<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoresRequest;
use App\Models\Category;
use App\Models\Store;

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
        return view('layout.admin.stores.index')->with('stores', $stores);
    }

    public function store(StoresRequest $request)
    {
        $name = $request['name'];
        $category_id = $request['category_id'];
        $details = $request['details'];
        $owner_phone = $request['owner_phone'];
        $owner_name = $request['owner_name'];
        $store = new Store();
        $store->name = $name;
        $store->category_id = $category_id;
        $store->owner_phone = $owner_phone;
        $store->owner_name = $owner_name;
        $store->details = $details;
        $request['image']->store('public/images');
        $imageName= $request->image->hashName();
        $store->image = $imageName;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Store::where('id', $id)->delete();
        return redirect()->back();
    }


    public function edit($id)
    {
        $categories = Category::select('id', 'name', 'details', 'image','created_at')->get();
        $store = Store::select("*")->where('id',$id)->first();
        return view('layout.admin.stores.edit')->with('store',$store)->with('categories',$categories);
    }

    public function update(StoresRequest $request)
    {
        $name = $request['name'];
        $category_id = $request['category_id'];
        $details = $request['details'];
        $owner_phone = $request['owner_phone'];
        $owner_name = $request['owner_name'];
        $store = new Store();
        $store->name = $name;
        $store->category_id = $category_id;
        $store->owner_phone = $owner_phone;
        $store->owner_name = $owner_name;
        $store->details = $details;
        $request['image']->store('public/images');
        $imageName= $request->image->hashName();
        $store->image = $imageName;
        $store->save();
        return redirect()->back();
    }


}
