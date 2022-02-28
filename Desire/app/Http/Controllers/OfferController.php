<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OurOffers;
class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer=OurOffers::orderby('id','DESC')->get();
        return view('admin.offers.index',compact('offer'));
    }
    public function offerStatus(Request $request){
        if($request->mode=='true'){
            DB::table('our_offers')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('our_offers')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('admin.offers.create');
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
            'title'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
         ]);
  
          $data= $request->all();
          //return $data;
          $status=OurOffers::create($data);
          if($status){
              return redirect()->back()->with('success','Offer Created Successfully');
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
        $offer=OurOffers::find($id);
        if($offer){
            return view('admin.offers.edit',compact('offer'));

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
        $offer=OurOffers::find($id);
        if($offer){
            $this->validate($request,[
                'title'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
            ]);

            $data= $request->all();
            $status=$offer->fill($data)->save();
            if($status){
                return redirect()->route('offer.index')->with('success','Slider Updated Successfully');
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
        $offer=OurOffers::find($id);
        if($offer){
           $status=$offer->delete();
           if($status){
               return redirect()->route('offer.index')->with('success','Offers deleted Successfully');
           }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
