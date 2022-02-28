<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applynow;

class ApplynowController extends Controller
{
    public function index()
    {
        $applynow=Applynow::orderby('id','DESC')->get();
        return view('admin.applynow',compact('applynow'));
    }
    public function destroy($id)
    {
        $contact=Applynow::find($id);
        if($contact){
           $status=$contact->delete();
           if($status){
               return redirect()->back()->with('success','Apply now Enquery delete Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
