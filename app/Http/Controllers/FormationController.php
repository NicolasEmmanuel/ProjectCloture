<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){

        $formations = Formation::all() ;
        return view('formation', compact('formations')) ;
    }

    public function detail(){

        $formationsdetails = Formation::all() ;
        return view('formation-detail', compact('formationsdetails')) ;
    }

    public function admin(){

        $formations = Formation::all() ;
        return view('admin.admin-formation', compact('formations')) ;
        // $this->middleware('auth') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()                                            /* FONCTION DE CR */
    {
        $formations = Formation::all() ;

        return view('admin.admin-create-formation', compact('formations')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formation $formation)           /* FONCTION DE SAUVEGARDE */
    {
        /* champs requis */
        $validate = $request->validate(
            ["nom" => "required",
            "duree" => "required"]
        ) ;

        $saveformation = new Formation() ;

        $saveformation->nom = $request->nom ;

        $saveformation->duree = $request->duree ;

        $saveformation->save() ;

        // $message = 0 ;

        // if(isset($validate)){

        //     $message = 1 ;
        // }

    
        // Redirection vers ma page du formlaire
        
        if (isset($validate)) {

            return redirect()->route('auth-formation', compact('message')) ;

        } else {

            
            return redirect('auth-formation-create',compact('message')) ;
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)                          /* FONCTION D'ÉDITION */
    {
        // $formation = Formation::where('id', $formation)->first() ;

        return view("admin.admin-edit-formation", compact("formation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)              /* FONCTION DE MISE A JOUR */
    {
        /* champs requis */
        $validate = $request->validate(
            ["id" => "required", "nom" => "required",
            "duree" => "required"]
        ) ;

        $formation->nom = $request->nom ;

        $formation->duree = $request->duree ;

        $formation->update() ;

        return redirect()->route('auth-formation') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)               /* FONCTION DE SUPPRESION */
    {
        $formation->delete() ;

        return back() ;
    }
}