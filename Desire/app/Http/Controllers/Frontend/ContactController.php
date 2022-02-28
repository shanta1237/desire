<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function ContactForm(Request $request)
    {
        $data = array();
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['general'] = $request->general;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        Contact::insert($data);
        // return $data;
        $notification = array(
            'message' => 'Your Message Sent Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    
    
}
