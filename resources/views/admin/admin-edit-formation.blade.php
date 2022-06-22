@extends('layouts.admin')

@section('content')
    
<!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
       
      {{-- formulaire d'édition --}}
      <form action="{{route('auth-formation-update', $formation)}}" method="POST">
        @csrf
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Titre
          </label>
          <input
            type="text"
            name="nom"
            id="nom"
            value="{{ $formation->nom }}"
            placeholder="Titre de la formation"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="email"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Durée
          </label>
          <input
            type="text"
            name="duree"
            id="duree"
            value="{{ $formation->duree }}"
            placeholder="Durée de la formation"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="subject"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Niveau
          </label>
          <input
            type="text"
            name="niveau"
            id="niveau"
            value="{{ $formation->niveau }}"
            placeholder="Niveau de la formation"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="subject"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Détails
          </label>
          <textarea class="w-full h-40 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"  
            cols="30" rows="10"
            type="text"
            name="details"
            id="details"
            placeholder="Contenu de la formation">
            {{-- class="w-full h-40 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"   --}}
        </textarea>
        </div>

        <div>
          {{-- Boutton édition --}}
            <button
            type="submit"
            class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
           >
           <div class="flex flex-row items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
              </svg>
              <h1 class="text-lg">Modifier la formation</h1>
              </div>
          </button>
        </div>
      </form>
      {{-- FIN formulaire d'édition --}}

        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif

    </div>
  </div>

@endsection