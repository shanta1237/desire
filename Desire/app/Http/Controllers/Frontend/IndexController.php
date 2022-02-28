<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applynow;
use App\Models\Enquerynow;
class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function ApplyForm(Request $request)
    {
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['Qualification'] = $request->Qualification;
        $data['ieltsscore'] = $request->ieltsscore;
        $data['country'] = $request->country;
        Applynow::insert($data);
        // return $data;
        $notification = array(
            'message' => 'Your Message Sent Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
    public function EnqueryForm(Request $request)
    {
        $data = array();
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['Qualification'] = $request->Qualification;
        $data['ieltsscore'] = $request->ieltsscore;
        $data['country'] = $request->country;
        Enquerynow::insert($data);
        //return $data;
        $notification = array(
            'message' => 'Your Message Sent Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
