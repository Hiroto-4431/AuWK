<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="min-h-screen bg-gray-100">
            {{-- @if(auth('admins')->user())
                @include('layouts.admin-navigation')
            @elseif(auth('users')->user())
                @include('layouts.user-navigation')
            @endif --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            @if(auth('admins')->user())
                <div class="min-h-screen flex">
                    @include('layouts.admin-navigation')
                    @include('layouts.admin-content')
                    {{-- {{ $slot }} --}}
                </div>
            @elseif(auth('users')->user())
                <div class="min-h-screen flex">
                    @include('layouts.user-navigation')
                    @include('layouts.user-content')
                </div>
            @endif
            
        {{-- </div> --}}
    </body>
</html>
