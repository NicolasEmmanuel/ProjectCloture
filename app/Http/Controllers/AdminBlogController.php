<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Blog::latest()->get();
        

        return view('admin.admin-blog',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edite(Blog $blog)
    { 
        
        $categories = Category::All();

        
     
        return view('admin.admin-blog-edite', compact('categories','blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'bail|required|string|max:255',
           // "image" => 'bail|required|image|max:1024',
            "description" => 'bail|required',
            //"user_id" => 'bail|required',
            //"category_id" => 'bail|required',
        ]);
      
        $auth_user = auth()->user();
    // 2. On upload l'image dans "/storage/app/public/posts"
    //$chemin_image = $request->picture->store("blogs");

    // 3. On enregistre les informations du Post
   
    $auth_user->blogs()->create([
        "titre" => $request->titre,
       // "image" => $chemin_image,
        "description" => $request->description,
        "category_id" => $request->category,
        
    ]);

    // 4. On retourne vers tous les posts : route("posts.index")
    return back();
}
        //
        

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
        {
            
         $rules = $request->validate([
        "titre" => 'bail|required|string|max:255',
        "description" => 'bail|required',
        ]);

        
      $blog->update([
            "titre" => $request->titre,
            "description" => $request->description
        ]);


        return  redirect('admin/blog-lister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //

        $blog->delete();

        return back();
    }
}
