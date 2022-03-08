<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services=Offer::first();
        return view('admin.services',compact('services'));;
    }
    public function update(Request $request){
        $services=Offer::first();
        $status = $services->update([
            'photo'=>$request->input('photo'),
            'offer_desc'=>$request->input('offer_desc'),
        ]);
        if($status){
            return redirect()->back()->with('success','Services Updated Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
