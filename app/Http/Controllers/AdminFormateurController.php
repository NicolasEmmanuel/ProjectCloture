<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFormateurController extends Controller
{
    //
    public function formateur() {
        return view("admin.admin-formateur");
    }
    public function edit() {
        return view("admin.editFormateur");
    }
}
