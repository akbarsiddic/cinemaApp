<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex  sm:justify-between items-center pt-6 sm:pt-0 bg-black ">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 m-6 bg-neutral shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>

        {{-- image full half for the login page --}}
        <div class="hidden sm:block sm:w-1/2 h-screen bg-blue-700 ">
            <div style="background-image: url('https://images.unsplash.com/photo-1468657988500-aca2be09f4c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8ZGFya3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60')"
                class="bg-origin-border mix-blend-multiply bg-no-repeat bg-cover p-4 border-4 border-dashed border-black w-full h-full object-cover">

            </div>
        </div>
    </div>

</body>

</html>