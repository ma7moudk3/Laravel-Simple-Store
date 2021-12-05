<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Store;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request,$id){
        $rate = $request['rating'];
        $username = $request['name'];
        $note = $request['note'];
        $ip = $request->ip();
        $rating = new Rating();
        $rating->username = $username;
        $rating->rate = $rate;
        $rating->note = $note;
        $rating->user_ip = $ip;
        $rating->store_id = $id;
        $rating->save();
        $store = Store::where("id",$id)->first();
        if ($store->rating_avg != 0.0){
            $store->rating_avg = (floatval(($rating->rate)) + $store->rating_avg)/2 ;
            $store->save();
        } else{
            $store->rating_avg = floatval(($rating->rate));
            $store->save();
        }
        return redirect()->back();
    }

}
