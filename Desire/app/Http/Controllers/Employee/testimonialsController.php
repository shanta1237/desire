<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class testimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonials::orderby('id','DESC')->get();
        return view('employee.testimonials.index',compact('testimonials'));
    }
    public function TestimonialsStatus(Request $request){
        if($request->mode=='true'){
            DB::table('testimonials')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('testimonials')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->all();
       $this->validate($request,[
            'name'=>'string|required',
            'desc'=>'string|nullable',
            'photo'=>'required',
            'status' => 'nullable|in:active,inactive',
       ]);

        $data= $request->all();
        //return $data;
        $status=Testimonials::create($data);
        if($status){
            return redirect()->route('employeetestimonials.index')->with('success','Testimonials Created Successfully');
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
        $testimonials=Testimonials::find($id);
        if($testimonials){
            return view('employee.testimonials.edit',compact('testimonials'));

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
        $testimonials=Testimonials::find($id);
        if($testimonials){
            $this->validate($request,[
                'name'=>'string|required',
                'desc'=>'string|nullable',
                'photo'=>'required',
                'status' => 'nullable|in:active,inactive',
            ]);

            $data= $request->all();
            $status=$testimonials->fill($data)->save();
            if($status){
                return redirect()->route('employeetestimonials.index')->with('success','Testimonials Updated Successfully');
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
        $testimonials=Testimonials::find($id);
        if($testimonials){
           $status=$testimonials->delete();
           if($status){
               return redirect()->route('employeetestimonials.index')->with('success','testimonials delete Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
