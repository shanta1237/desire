<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Blog;

class employeeblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=Blog::orderby('id','DESC')->get();
        return view('employee.blog.index',compact('blog'));
    }
    public function employeeblogStatus(Request $request){
        if($request->mode=='true'){
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('employee.blog.create');
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
            'photo'=>'required',
            'user_id'=>'nullable|exists:users,id',
            'cat_id'=>'nullable|exists:blogcategories,id',
            'status'=>'nullable|in:active,inactive'
        ]);
        $data= $request->all();
        $slug= Str::slug($request->input('name'));
        $slug_count=Blog::where('slug',$slug)->count();
        if($slug_count>0){
            $slug =time().'-'.$slug;
        }
        $data['slug']=$slug;
        //return $data;
        $status=Blog::create($data);
        if($status){
            return redirect()->route('blog.index')->with('success','Blog Created Successfully');
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
        $blog=Blog::find($id);
        if($blog){
            return view('employee.blog.edit',compact(['blog']));
        }else{
            return back()->with('error','Blog Not Found Make a new Category');
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
        $blog=Blog::find($id);
        if($blog){
            $this->validate($request,[
                'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'required',
            'user_id'=>'required|exists:users,id',
            'cat_id'=>'required|exists:blogcategories,id',
            'status'=>'nullable|in:active,inactive'
            ]);

            $data=$request->all();
            $status=$blog->fill($data)->save();
            if($status){
                return redirect()->route('blog.index')->with('success','Blog successfully updated');
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
        $blog=Blog::find($id);
        if($blog){
            $status=$blog->delete();
            if($status){
                return redirect()->route('blog.index')->with('success','Blog delete Successfully');
            }

        }else{
            return back()->with('error','Something went wrong');
        }
    }
}

