<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class countryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country=Country::orderby('id','DESC')->get();
        return view('admin.countries.index',compact('country'));
    }
    public function CountryStatus(Request $request){
        if($request->mode=='true'){
            DB::table('countries')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('countries')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|nullable',
            'destination_id'=>'required|exists:users,id',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data= $request->all();
        // return $data;
        $status=Country::create($data);
        if($status){
            return redirect()->route('country.index')->with('success','Country Created Successfully');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.countries.edit');
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
        $count=Country::find($id);
        if($count){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
                'destination_id'=>'required|exists:users,id',
                'status'=>'nullable|in:active,inactive'
            ]);

            $data=$request->all();
            $status=$count->fill($data)->save();
            if($status){
                return redirect()->route('country.index')->with('success','Country successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Category not found');
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
        {
            $country=Country::find($id);
            if($country){
               $status=$country->delete();
               if($status){
                   return redirect()->route('country.index')->with('success','Country delete Successfully');
               }
    
            }else{
                return back()->with('error','Something went wrong');
            }
        }
    }
}
