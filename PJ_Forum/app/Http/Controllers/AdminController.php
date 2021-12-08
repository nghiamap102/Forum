<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\User;

class AdminController extends Controller
{
    public function list_blog()
    {
        $blog = Blog::all();
        return view('admin_blog', compact('blog'));
    }
    
    public function list_tag()
    {
        $tag = Tag::all();
        return view('admin_tag', compact('tag'));
    }   
    
    public function list_user()
    {
        $user = User::all();
        return view('admin_user', compact('user'));
    }   
    public function static()
    {
        $blog = Blog::all();
        return view('admin_static', compact('blog'));
    }   

}
