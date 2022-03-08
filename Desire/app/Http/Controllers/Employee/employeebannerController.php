<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class employeebannerController extends Controller
{
    public function index()
    {
        $employeebanners=Banner::orderby('id','DESC')->get();
        return view('employee.banner.index',compact('employeebanners'));
    }
    public function employeebannerStatus(Request $request){
        if($request->mode=='true'){
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       //return $request->all();
       $this->validate($request,[
          'title'=>'string|required',
           'description'=>'string|nullable',
           'photo'=>'required',
           'slug'=>'string|nullable',
           'condition' => 'nullable|in:slider,accreditions,university,popup',
           'status' => 'nullable|in:active,inactive',
       ]);

        $data= $request->all();
        //return $data;
        $status=Banner::create($data);
        if($status){
            return redirect()->route('employeebanner.index')->with('success','Banner Created Successfully');
        }else{
            return back()->with('error','Something went wrong');
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
        $employeebanners=Banner::find($id);
        if($employeebanners){
            return view('employee.banner.edit',compact('employeebanners'));

        }else{
            return back()->with('error','Data not Found');
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
        $employeebanners=Banner::find($id);
        if($employeebanners){
            $this->validate($request,[
                'title'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'slug'=>'string|nullable',
                'condition' => 'nullable|in:slider,accreditions,university,popup',
                'status' => 'nullable|in:active,inactive',
            ]);

            $data= $request->all();
            $status=$employeebanners->fill($data)->save();
            if($status){
                return redirect()->route('employeebanner.index')->with('success','Slider Updated Successfully');
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
        $banner=Banner::find($id);
        if($banner){
           $status=$banner->delete();
           if($status){
               return redirect()->route('employeebanner.index')->with('success','Banner delete Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}