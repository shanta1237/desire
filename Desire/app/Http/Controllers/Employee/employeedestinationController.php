<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class employeedestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination=Destination::orderby('id','DESC')->get();
        return view('employee.destination.index',compact('destination'));
    }
    public function employeedestinationStatus(Request $request){
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
    public function employeecreatedestination()
    {
        return view('employee.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function employeedestinationstore(Request $request)
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
            return redirect()->route('employee.destination')->with('success','Destination Created Successfully');
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
    public function employeedestinationedit($id)
    {
        $destination=Destination::find($id);
        if($destination){
            return view('employee.destination.edit',compact('destination'));

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
    public function employeedestinationupdate(Request $request, $id)
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
                return redirect()->route('employee.destination')->with('success','Destination Updated Successfully');
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
    public function employeedestinationdestroy($id)
    {
        {
            $destination=Destination::find($id);
            if($destination){
               $status=$destination->delete();
               if($status){
                   return redirect()->route('employee.destination')->with('success','Destination delete Successfully');
               }
    
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }
}
