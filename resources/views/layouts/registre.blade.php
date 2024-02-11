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
    <body class="font-sans text-gray-900 antialiased"  style="padding:123">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  " style='display:flex; flex-direction:row; ' >
            <div >
                <div class="img-box" style="margin-left: 119px ">
                    <img src="images/slider-img.png" alt="">
                  </div>
            </div>
            <div style='width: 50%;
            display: flex;
            justify-content: center;
            align-items: center'>
               <p style="
              text-align: center;
    font-weight: bold;
    font-size: 33px;
    margin: 20px;
    position: absolute;
    top: 139px;
                
           ">registre</p>
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            
                    {{ $slot }}
                </div>
                
            </div>
           
        </div>
    </body>
</html>
