<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\StoresRequest;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{

    public function index()
    {
        $stores = Store::paginate(5);
        return response()->json($stores);
    }


    public function store(CategoryRequest $request)
    {
        $name = $request['name'];
        $details = $request['details'];
        $category = new Category();
        $category->name = $name;
        $category->details = $details;

        $request['image']->store('public/images');
        $imageName = $request->image->hashName();
        $category->image = $imageName;
        $result = $category->save();
        if ($result)
            $status = true;
        else
            $status = false;


        return response()->json(['status' => $status, 'messages' => $request->messages()]);


    }

}
