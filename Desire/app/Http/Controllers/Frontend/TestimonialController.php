<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialController extends Controller
{
    public function index(){
        $testimonial=Testimonials::where(['status'=>'active'])->orderBy('id','DESC')->limit('8')->get();
        return view('frontend.testimonial',compact('testimonial'));
    }
}
