<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('employee.settings.settings',compact('setting'));
    }
    public function settingsUpdate(Request $request ){
        $setting = Setting::first();
        $status = $setting->update($request->all());
        if($status){
            return back()->with('success','Settings updated successfully');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }
}
