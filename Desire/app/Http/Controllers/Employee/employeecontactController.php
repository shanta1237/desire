<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class employeecontactController extends Controller
{
    public function index()
    {
        $contact=Contact::orderby('id','DESC')->get();
        return view('employee.contact',compact('contact'));
    }
    public function destroy($id)
    {
        $contact=Contact::find($id);
        if($contact){
           $status=$contact->delete();
           if($status){
               return redirect()->back()->with('success','Contact delete Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
