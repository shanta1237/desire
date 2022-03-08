<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class ServiceController extends Controller
{
    public function index(){
        $services=Offer::first();
        return view('employee.services',compact('services'));;
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