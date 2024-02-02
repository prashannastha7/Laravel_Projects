<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    </style>
</head>
<body class="font-roboto bg-gray-100">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Mini Blog') }}
            </h2>
        </x-slot>
        <div class="container mx-auto py-8">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $post->body }}</p>
                </div>
            @endforeach
            @auth <!-- Check if user is authenticated -->
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                <div>{{ Auth::user()->name }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="text-sm text-gray-700 underline" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                </form>
            @endauth
            <div class="mt-8">
                {{ $posts->links()}} <!-- this is used to show the pagination -->
            </div>
        </div>
    </x-app-layout>
</body>
</html>
