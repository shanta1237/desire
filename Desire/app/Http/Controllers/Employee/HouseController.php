<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\House;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HouseController extends Controller
{
    public function index(){
        $house=House::first();
        return view('employee.house',compact('house'));
    }
    public function update(Request $request){
        $house=House::first();
        $status = $house->update([
            'name'=>$request->name,
            'aboutdesc'=>$request->input('aboutdesc'),
            'a1'=>$request->a1,
            'a2'=>$request->a2,
            'a3'=>$request->a3,
            'a4'=>$request->a4,
            'a5'=>$request->a5,
            'a6'=>$request->a6,
            'aphone'=>$request->aphone,
            'applynow'=>$request->applynow,
            'applynowques'=>$request->applynowques,
            'applynowans'=>$request->input('applynowans'),
            'abroadfocus'=>$request->abroadfocus,
            'abroadphoto'=>$request->abroadphoto,
            'abroaddesc'=>$request->input('abroaddesc'),
            'career'=>$request->career,
            'careerphoto'=>$request->careerphoto,
            'careerdesc'=>$request->input('careerdesc'),
            'test'=>$request->test,
            'testphoto'=>$request->testphoto,
            'testdesc'=>$request->input('testdesc'),
            'env'=>$request->env,
            'envphoto'=>$request->envphoto,
            'envdesc'=>$request->input('envdesc'),
        ]);
        if($status){
            return redirect()->back()->with('success','Home Data Updated Successfully');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
    public function userAccount(){
        $user=Auth::user();
        return view('employee.user.account',compact('user'));
    }
    public function updateAccount(Request $request,$id){
        $this->validate($request,[
            'newpassword'=>'nullable|min:4',
            'oldpassword'=>'nullable|min:4',
            'full_name'=>'required|string',
            'name'=>'nullable|string',
            'phone'=>'nullable|min:8',
            'address'=>'nullable|string',
            'facebook'=>'nullable|string',
            'instagram'=>'nullable|string',
            'twitter'=>'nullable|string',
            'photo'=>'nullable|string',
        ]);
    $hashpassword=Auth::user()->password;

        if($request->oldpassword==null &&  $request->newpassword==null){
            User::where('id',$id)->update(['full_name'=>$request->full_name,'name'=>$request->name,'address'=>$request->address,'phone'=>$request->phone,'facebook'=>$request->facebook,'instagram'=>$request->instagram,'twitter'=>$request->twitter,'photo'=>$request->photo]);
            return back()->with('success','Account update successfully');
        }else{
            if(\Hash::check($request->oldpassword,$hashpassword)){
                if(!\Hash::check($request->newpassword,$hashpassword)){
                    User::where('id',$id)->update(['full_name'=>$request->full_name,'name'=>$request->name,'phone'=>$request->phone,'password'=>Hash::make($request->newpassword)]);
                    return back()->with('success','Account update successfully');
                }else{
                    return back()->with('error','New Password can not be saved with old password');
                }
            }else{
                return back()->with('error','old password does not match');
            }
        }
    }
    
}
