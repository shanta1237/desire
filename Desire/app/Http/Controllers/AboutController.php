<?php

namespace App\Http\Controllers;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about=AboutUs::first();
        return view('admin.aboutpage',compact('about'));
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
