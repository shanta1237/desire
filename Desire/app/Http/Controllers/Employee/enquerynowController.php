<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnqueryNow;

class enquerynowController extends Controller
{
    public function index()
    {
        $enquery=Enquerynow::orderby('id','DESC')->get();
        return view('employee.enquery',compact('enquery'));
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
