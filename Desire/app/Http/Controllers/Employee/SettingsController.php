<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function employeeindex()
    {
        $setting = Setting::first();
        return view('employee.settings.settings',compact('setting'));
    }
    public function employeesettingsUpdate(Request $request ){
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
