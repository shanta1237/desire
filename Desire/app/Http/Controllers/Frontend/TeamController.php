<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TeamController extends Controller
{
    public function index()
    {
        $teams=User::where(['status'=>'active','condition'=>'yes'])->orderBy('id','DESC')->limit('9')->get();
        return view('frontend.ourteam',compact('teams'));
    }
    public function show($id){
        
        $user=User::where('id',$id)->first();
        if($user){
            return view('frontend.teams',compact('user'));
        }
        else{
            return 'User details not Found';
        }
    }
}
