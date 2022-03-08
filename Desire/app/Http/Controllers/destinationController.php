<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class destinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination=Destination::orderby('id','DESC')->get();
        return view('admin.destination.index',compact('destination'));
    }
    public function destinationStatus(Request $request){
        if($request->mode=='true'){
            DB::table('destinations')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('destinations')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createdestination()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destinationstore(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required',
            'slug'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data= $request->all();
        // return $data;
        $status=Destination::create($data);
        if($status){
            return redirect()->route('list.destination')->with('success','Destination Created Successfully');
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
    public function destinationedit($id)
    {
        $destination=Destination::find($id);
        if($destination){
            return view('admin.destination.edit',compact('destination'));

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
    public function destinationupdate(Request $request, $id)
    {
        $destination=Destination::find($id);
        if($destination){
            $this->validate($request,[
                'title'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'slug'=>'string|nullable',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data= $request->all();
            $status=$destination->fill($data)->save();
            if($status){
                return redirect()->route('list.destination')->with('success','Destination Updated Successfully');
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
    public function destinationdestroy($id)
    {
        {
            $destination=Destination::find($id);
            if($destination){
               $status=$destination->delete();
               if($status){
                   return redirect()->route('list.destination')->with('success','Destination delete Successfully');
               }
    
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }
}
