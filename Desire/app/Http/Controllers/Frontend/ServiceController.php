<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(){
        $service=Offer::first();
        return view('frontend.services',compact('service'));
    }
}
