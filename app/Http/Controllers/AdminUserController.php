<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;


class AdminUserController extends Controller
{
    public function index(){

        $users = User::where('id', '!=', Auth::user()->id)->Paginate(4); 

        return view('admin.admin-user',compact('users'));

    }



    public function edit(User $user){


        return view('admin.admin-useredit', compact('user'));

    }


    public function formajout(){


        return view('admin.admin-useredit');

    }


    public function modifier(User $user, Request $request ) {

        //test de l'existence de l'image
        if ($request->hasFile('image')) {
            
            //enregistre l'image ds la base
            $path = Storage::putFile('public', $request->file('image'));

            //retourne le chemin d'acces ou est stocker l'image
            $user->photo = $path;

        }

        //affectation ds valeurs 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->competence = $request->competence;
        $user->presentation = $request->presentation;
        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->instagram = $request->instagram;
        $user->role = $request->role;
        
        
        // modification de l'utilisateur dans la base
        $user->update();

        return redirect()->route('admin-user');
    }



    public function ajouter(Request $request){


        $user = new User;

        $request->validate([ 
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]

        ]);

     
        if ($request->hasFile('image')) {
            
            //enregistre l'image ds la base
            $path = Storage::putFile('public', $request->file('image'));

            //retourne le chemin d'acces ou est stocker l'image
            $user->photo = $path;

        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->competence = $request->competence;
        $user->presentation = $request->presentation;
        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->instagram = $request->instagram;
        $user->role = $request->role;
        $user->photo = $request->photo;

        dd($user);
        // event(new Registered($user));
        $user->save();


        return redirect()->route('admin-user');

    }
       



    public function supprimer(User $user){

        if(Auth::user()->admin) {

            $user->delete();

        }


        return back();

    }
    
}
