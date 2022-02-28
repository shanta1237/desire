<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Blogcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogcategoryController extends Controller
{
    public function index(){
        $blogcategory = Blogcategory::orderby('id')->get();;
        return view('admin.blogcategory.index',compact('blogcategory'));
    }
    public function blogcategoryStatus(Request $request){
        if($request->mode=='true'){
            DB::table('blogcategories')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogcategories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }
    public function blogcreate()
    {
        return view('admin.blogcategory.create');
    }
    public function blogstore(Request $request)
      {
//         return $request->all();
        $this->validate($request,[
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data=$request->all();
//        return $data;
        $slug=Str::slug($request->input('name'));
        $slug_count=Blogcategory::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug']=$slug;
//        return $data;
        $status=Blogcategory::create($data);
        if($status){
            return redirect()->route('list.category')->with('success','Category successfully created');
        }
        else{
            return back()->with('error','Something went wrong!');
        }
    }
    public function blogedit($id)
    {
        $blogcategory=Blogcategory::find($id);
        return view('admin.blogcategory.edit',compact('blogcategory'));
    }
   
    public function blogupdate(Request $request, $id)
    {
        $blogcategory=Blogcategory::find($id);
        if($blogcategory){
            $this->validate($request,[
                'name'=>'string|required',
                'description'=>'string|nullable',
                'photo'=>'required',
                'status'=>'nullable|in:active,inactive'
            ]);
            $data=$request->all();
            $status=$blogcategory->fill($data)->save();
            if($status){
                return redirect()->route('list.category')->with('success','Category successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Category not found');
        }
    }
    public function blogdestroy($id)
    {
        $blogcategory=Blogcategory::find($id);
        if($blogcategory){
            $status=$blogcategory->delete();
            if($status){
                return redirect()->route('list.category')->with('success','Blog Category delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
