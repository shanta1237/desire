<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Houses;

class BlogController extends Controller
{
    public function index(){
        $blogi = Blog::all();
        return view('frontend.blog',compact('blogi'));
    }
    // public function details(Request $request,$slug){
    //     $data =  Blog::find($slug);
    //     return view('frontend.details',['Blogs'=>$data]);
    // }
//     public function blog(Request $request, $slug){
//         $blog=Blog::with('blog')->where('slug',$slug)->first();
// //        return $product;
//         if($blog){
//             return view('frontend.details',compact('blog'));
//         }
//         else{
//             return 'Blog details not Found';
//         }
//         //    user Auth

//     }
    public function show($slug){
        
        $blog=Blog::where('slug',$slug)->first();
        if($blog){
            return view('frontend.details',compact('blog'));
        }
        else{
            return 'Blog details not Found';
        }
    }
}
