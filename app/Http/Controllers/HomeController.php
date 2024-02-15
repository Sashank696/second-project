<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $blogs=Blog::get();
       
        return view('index',compact('blogs'));
    }
    public function about(){
        
        return view('about');
    }
    public function sample_post(){
        
        return view('post');
    }
    public function contact(){
        
        return view('contact');
    }
    public function add_blog(){

        return view('addblog');
    }
public function login(){

    return view('login');
}
public function add_blo(Request $request){


$blog = new Blog();
$blog->title = $request->title;   
$blog->description = request('description');
$blog->user_id=auth()->user()->id;
$blog->save();
return redirect()->route('home');
}
}
