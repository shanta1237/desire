<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnqueryNow;

class EnqueryNowController extends Controller
{
    public function index()
    {
        $enquery=Enquerynow::orderby('id','DESC')->get();
        return view('admin.enquery',compact('enquery'));
    }
    public function destroy($id)
    {
        $enquery=Enquerynow::find($id);
        if($enquery){
           $status=$enquery->delete();
           if($status){
               return redirect()->back()->with('success','Enquery deleted Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
