<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){


        return view('admin.admin-user');

    }

    public function edit(){

        return view('admin.admin-useredit');

    }
    
}
