<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    
</body>
</html>
<section class="h-screen w-screen bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
    <h1 class="text-center font-bold text-2xl text-indigo-500">Nos Articles ! </h1>


<div class="grid justify-center md:grid-cols-2 lg:grid-cols-2 gap-5 lg:gap-7 my-10">
    
    {{-- Card 1 --}}

    @forelse ($posts as $post)
    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
        <img class="h-56 lg:h-60 w-full object-cover" src="https://images.unsplash.com/photo-1523289217630-0dd16184af8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d29tZW4lMjBlbXBvd2VybWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" />
        <div class="p-3">
            <span class="text-sm text-primary">{{$post->created_at}}</span>
            <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                {{$post->titre}}
            </h3>
            <p class="paragraph-normal text-gray-600">
                {{$post->description}}
            </p>
            <a class="mt-3 block" href="#">En savoir plus >></a>
        </div>
    </div>
    
    @empty
        <h1>Désolé revenez plus tard ! les bloggers sont fatigués !</h1>
    @endforelse