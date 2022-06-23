<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{ 
    
    
        public function index(){

            $posts = Blog::All();
            return view('leblog', compact('posts'));
        }
   
        public function detail(){


            return view('leblog-detail');

        }
}
