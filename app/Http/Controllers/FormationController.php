<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index(){

        $formations = Formation::all() ;
        return view('formation', compact('formations')) ;
    }

    public function detail(){

        $formations = Formation::all() ;
        return view('formation-detail', compact('formations')) ;
    }

    public function admin(){

        return view('auth.admin-formation') ;
        // $this->middleware('auth') ;
    }


}