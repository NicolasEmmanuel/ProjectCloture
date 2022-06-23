@extends('layouts.admin')
@section('content')
    
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
          <form action="@if(isset($user)) {{ route('admin-usermodifier',$user) }} @else {{ route('admin-userajouter') }} @endif" enctype="multipart/form-data" method="POST" >
            @csrf
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Nom
              </label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Nom complet"
                value=" {{ $user->name }} "
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="email"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Email Address
              </label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@domain.com"
                value="{{$user->email}}"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            
            <div class="mb-5">
              <label
                for="competence"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Compétences
              </label>
              <input
                type="text"
                name="competence"
                id="competence"
                placeholder="Vos compétences"               
                value="{{$user->competence}}"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="presentation"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Presentation
              </label>
              <textarea
                rows="4"
                name="presentation"
                id="presentation"
                placeholder="Présentez-vous..."
                class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"> 
                {{$user->presentation}}"
              </textarea>
            </div>
            <div class="mb-5">
              <label
                for="facebook"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Facebook
              </label>
              <input
                type="text"
                name="facebook"
                id="facebook"
                placeholder="Lien Facebook"
                value="{{$user->facebook}}"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="linkedin"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Linkedin
              </label>
              <input
                type="text"
                name="linkedin"
                id="linkedin"
                placeholder="Lien Linkedin"
                value="{{$user->linkedin}}"                 
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="instagram"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Instagram
              </label>
              <input
                type="text"
                name="instagram"
                id="instagram"
                placeholder="Lien Instagram"
                value="{{$user->instagram}}"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="role"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Rôles
              </label>
              <input
                type="text"
                name="role"
                id="role"
                placeholder="Votre rôle"
                value="{{$user->role}}"  
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="image"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Photo / Image 
              </label>
              <input
                type="file"
                name="image"
                id="image"
                placeholder="Votre image"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div>
              <button
                type="submit"
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
              >
                Modifier
              </button>
              </a>
            </div>
          </form>
        </div>
      </div>

@endsection