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
                placeholder="Full Name"
                @if(isset($user))
                value=" {{ $user->name }} "
                @endif
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
                @if (isset($user))
                value="{{$user->email}}"
                @endif
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="mb-5">
              <label
                for="password"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                Password
              </label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="votre mot de passe"
                @if (isset($user))
                value="{{$user->email}}"
                @endif
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
                @if (isset($user))
                value="{{$user->competence}}"
                @endif
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
                class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              > @if (isset($user))
                {{$user->presentation}}"
                @endif</textarea>
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
                @if (isset($user))
                value="{{$user->facebook}}"
              @endif
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
                @if (isset($user))
                value="{{$user->linkedin}}"
                  
              @endif
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
                @if (isset($user))
                value="{{$user->instagram}}"
              @endif
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
                @if (isset($user))
                value="{{$user->role}}"  
              @endif
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
                @if (isset($user))
                Modifier
                @else
                Ajouter
                @endif
              </button>
              </a>
            </div>
          </form>
        </div>
      </div>

@endsection