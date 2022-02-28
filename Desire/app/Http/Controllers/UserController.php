<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('users'));
    }
    public function userStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('users')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('users')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'full_name' => 'string|required',
            'email' => 'email|required|unique:users,email',
            'password' => 'min:4|required',
            'phone' => 'string|nullable',
            'facebook' => 'string|nullable',
            'instagram' => 'string|nullable',
            'twitter' => 'string|nullable',
            'description' => 'string|nullable',
            'employe_status' => 'string|nullable',
            'photo' => 'required',
            'address' => 'string|nullable',
            'condition' => 'nullable|in:yes,no',
            'role_as' => 'nullable|in:admin,user',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        //return $data;
        $status = User::create($data);
        if ($status) {
            return redirect()->route('user.index')->with('success', 'User or Employee Created Successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('admin.user.edit');
        } else {
            return back()->with('error', 'User Not Found Make a new User');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user=User::find($id);
        if($user){
            $this->validate($request,[
                'name' => 'string|required',
                'full_name' => 'string|required',
                'email' => 'email|required|unique:users,email',
                'password' => 'min:4|required',
                'phone' => 'string|nullable',
                'facebook' => 'string|nullable',
                'instagram' => 'string|nullable',
                'twitter' => 'string|nullable',
                'description' => 'string|nullable',
                'employe_status' => 'string|nullable',
                'photo' => 'required',
                'address' => 'string|nullable',
                'condition' => 'nullable|in:yes,no',
                'role_as' => 'nullable|in:admin,user',
                'status' => 'required|in:active,inactive',
            ]);

            $data= $request->all();
            $status=$user->fill($data)->save();
            if($status){
                return redirect()->route('user.index')->with('success','User Updated Successfully');
            }else{
                return back()->with('error','Something went wrong');
            }

        }else{
            return back()->with('error','Data not Found');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        if ($users) {
            $status = $users->delete();
            if ($status) {
                return redirect()->route('user.index')->with('success', 'Users deleted Successfully');
            }
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }
}
