<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    public function index(){
        $about=AboutUs::first();
        return view('employee.aboutpage',compact('about'));
    }
    public function update(Request $request){
        $about=AboutUs::first();
        $status = $about->update([
            'about'=>$request->about,
            'desc'=>$request->input('desc'),
            'mission'=>$request->mission,
            'descmission'=>$request->input('descmission'),
            'choose'=>$request->choose,
            'descchoose'=>$request->input('descchoose'),
            'message'=>$request->message,
            'photo'=>$request->photo,
            'photo1'=>$request->photo1,
            'descmessage'=>$request->input('descmessage'),
        ]);
        if($status){
            return redirect()->back()->with('success','About us Updated Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
}