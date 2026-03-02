<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sakny') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--aos library-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        .custom-bg-image {
        background-image: url("{{ asset('assets/mobile1.jpeg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    @media (min-width: 768px) {
        .custom-bg-image {
            background-image: url("{{ asset('assets/desktop2.jpeg') }}");
        }
    }
    </style>
    <body class="font-sans overflow-hidden text-gray-900 antialiased" >
        <div
        
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 custom-bg-image">


            <div class="mt-[30px] md:mt-0 "
            data-aos="zoom-in"
            data-aos-duration="1000"
            >
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div 
            data-aos="zoom-in-up"
            data-aos-duration="1500"
            class="w-[95%] lg:w-full sm:max-w-md mt-2 md:mt-0 px-6 py-4 bg-gray-50 shadow-xl overflow-hidden rounded-2xl">
                {{ $slot }}
            </div>
        </div>


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           <script>
                AOS.init();
            </script>
    </body>
</html>
