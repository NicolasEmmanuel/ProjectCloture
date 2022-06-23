<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){

        return view('index');
    }

    /*

    public function formation(){

        return view('formation');
    }

    public function formation_detail(){

        return view('formation-detail');
    }

    public function blog(){

        return view('blog');
    } */
}