<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormationController extends Controller
{
    public function index(){

        return view('formation') ;
    }

    public function admin(){

        return view('auth.admin-formation') ;
        // $this->middleware('auth') ;
    }
}