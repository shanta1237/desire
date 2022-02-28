<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applynow;

class applynowController extends Controller
{
    public function index()
    {
        $applynow=Applynow::orderby('id','DESC')->get();
        return view('employee.applynow',compact('applynow'));
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
    }//
}
