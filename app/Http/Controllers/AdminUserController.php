<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminUserController extends Controller
{
    public function index(){

        $users = User::all()->where('id', '!=', Auth::user()->id); 

        return view('admin.admin-user',compact('users'));

    }



    public function edit(){

        return view('admin.admin-useredit');

    }
    
}
