<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $about=AboutUs::first();
        return view('frontend.aboutus',compact('about'));
    }
}
