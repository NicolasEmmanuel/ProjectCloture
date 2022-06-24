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

        
        $items = Formation::first() ;
        // Faire un dd des variables pour détecter les erreurs
        // dd($items->detail_formation);
        return view('formation-detail', compact('items')) ;
    }

    public function admin(){

        $total = Formation::count() ;
        $formations = Formation::cursorPaginate(5) ;
        return view('admin.admin-formation', compact('formations','total')) ;
        // $this->middleware('auth') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()                                            /* FONCTION DE CR */
    {

        return view('admin.admin-create-formation') ;
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
            ["id" => "required",
            "duree" => "required"]
        ) ;

        $saveformation = new Formation() ;

        $saveformation->id = $request->id ;

        $saveformation->duree = $request->duree ;

        $saveformation->save() ;
    
        // Redirection vers ma page du formlaire
        
        if (isset($validate)) {

            return redirect()->route('auth-formation') ;

        } else {

            return redirect('auth-formation-create') ;
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
            ["id" => "required",
            "duree" => "required"]
        ) ;

        $formation->id = $request->id ;

        $formation->duree = $request->duree ;

        $formation->description = $request->description ;

        $formation->description = $request->description ;

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