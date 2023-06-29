<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="flex flex-wrap justify-center">
        @foreach ($movies as $movie)
        <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url('{{ $movie->image }}')">
                </div>
                <div class="p-4">
                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">
                        {{ $movie->title }}
                    </p>
                    <p class="text-3xl text-gray-900">${{ $movie->price }}</p>
                    <p class="text-gray-700">{{ $movie->description }}</p>
                </div>
            </div>
        </div>
        @endforeach

        <h1>Hello</h1>
    </div>
</body>

</html>