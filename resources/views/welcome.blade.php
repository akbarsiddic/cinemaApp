<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600&display=swap" rel="stylesheet" />


</head>

<body class="antialiased">
    <div>
        <nav>
            {{-- <div class="max-w-5xl mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <a href="/" class="text-2xl text-gray-900 font-semibold">SEA Cinema</a>
                    <div class="flex space-x-4 text-gray-900">
                        <a href="#">Login</a>
                        <a href="#">Register</a>

                    </div>
                </div>
            </div> --}}
            <div class="navbar bg-base-100">
                <a href="/" class="btn btn-ghost normal-case text-xl">SEA Cinema</a>
            </div>
        </nav>

        {{-- hero --}}
        <section>
            <div class="hero min-h-screen" style="background-image: url(/public/cinema.jpg);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <a href="/movies#movie" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="rounded-md flex justify-between flex-wrap" id="movie">
            @yield('content')
        </section>



    </div>
</body>

</html>