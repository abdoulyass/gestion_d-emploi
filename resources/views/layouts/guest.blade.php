<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="padding: 20px;display: flex;flex-direction: row;justify-content: center;align-items: center;">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  "  style="width: 428px;" >
                @yield('content')
               
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg" style=" margin-bottom: 6%;  z-index: 200;   ">
                    @if(request()->routeIs('login'))
                    <h3 class="font-bold text-blue-500 to-blue-600" style="text-align: center;font-size: 21px;">Welcome back</h3>
                    <p class="mb-0" style="text-align: center">Sign in with these credentials:<br></p>
                    <p class="mb-0" style="text-align: center">Or Create a <a class="mb-0" style="text-align: center color: #2c6cee" href="{{route('register')}}">new account </a> </p>
                    @elseif(request()->routeIs('register'))
                    <h2 class="font-bold text-blue-500 to-blue-600" style="text-align: center;font-size: 21px;">Welcome!</h2>
                    <h4 class="text-center">Register with your real information</h5>
                @endif
                  
                   @yield('auth')
                
                </div>
                
            </div>
           
        </div>
    </body>
</html>
