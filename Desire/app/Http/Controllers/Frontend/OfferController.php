<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurOffers;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function index(){
        $offer=OurOffers::orderBy('id','DESC')->limit('8')->get();
        return view('frontend.ouroffers',compact('offer'));
    }
}
