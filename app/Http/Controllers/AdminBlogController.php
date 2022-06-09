<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{ 

    public function index(){

        return view('admin.admin-blog');

    }
   
    public function edite(){

        return view('admin.admin-blog-edite');
    }

    public function create(){

        return back();
    }

}
