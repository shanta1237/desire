<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applynow;
use App\Models\Enquerynow;
use App\Models\Banner;
use App\Models\Testimonials;
use App\Models\Destination;
use App\Models\Country;
use App\Models\House;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $banners=Banner::where(['status'=>'active','condition'=>'slider'])->orderBy('id','DESC')->limit('5')->get();
        $university=Banner::where(['status'=>'active','condition'=>'university'])->orderBy('id','DESC')->limit('8')->get();
        $accrediation=Banner::where(['status'=>'active','condition'=>'accreditions'])->orderBy('id','DESC')->limit('8')->get();
        $destinations=Destination::where(['status'=>'active'])->orderBy('id','DESC')->limit('8')->get();
        $testimonials=Testimonials::where(['status'=>'active'])->orderBy('id','DESC')->limit('4')->get();
        $houses=House::first();
        return view('frontend.index',compact('banners','university','accrediation','destinations','testimonials','houses'));
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
    public function destinationCategory(Request $request,$id){
        $data =  Destination::find($id);
        return view('frontend.destination',['destination'=>$data]);
    }
    public function logout(){
        Session::forget('admin');
        Auth::logout();
        return redirect()->route('index')->with('success','Successfully logout');
    }
    // public function destinationCategory($id){
    //     $data = Destination::where('category_id', $id)->paginate();
    //     return view('pages.all_category', compact('all_category'));
    // }
    

}
