@extends('layouts.admin')
@section('content') 
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
          @if (isset($blog))
          <form action="{{route('admin-blog-modifier',$blog)}}" method="POST" enctype="multipart/form-data">

          @else
            <form action="{{route('admin-blog-create')}}" method="POST" enctype="multipart/form-data">

          @endif

            @csrf

            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                TITRE
              </label>
              <input
                type="text"
                name="titre"
               value="{{$blog->titre}}"
                placeholder="Choisissez un titre"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="form-group">
                <label
                  for="subject"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Description
                </label>
                <textarea class="ckeditor form-control" name="description">{{$blog->description}}</textarea>
            </div>

            {{-- <label for="category">Selectionner votre categorie</label> --}}
            <div class="form-group mt-5">
              
              <select name="category" id="category">
              <option value="">Selectionnez une categorie</option>
              @foreach ( $categories as $categorie )
                       
              
                  @if ($categorie->id == $blog->category_id)

                    <option value="{{$categorie->id}}" selected>{{$categorie->nom}}</option>

              
                  @else

                    <option value="{{$categorie->id}}" >{{$categorie->nom}}</option>

              
                  @endif

                      
              @endforeach
                                        






            </select>
          </div>
    
            
            <div>
              <button
                type="submit" class="hover:shadow-form rounded-md bg-[#aadf9c] py-3 px-8 text-base font-semibold text-black outline-none mt-7"
              >
               Ajouter
              </button>
            </div>
          </form>
        </div>
      </div>

            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script type="text/javascript">
                CKEDITOR.replace('description', {
                    filebrowserUploadUrl: "{{route('admin-blog-create', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });
            </script>
  @endsection

