<x-detail-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Details') }}
        </h2>
    </x-slot>

    <div class="p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <img src="{{ $movies->poster_url }}" class="rounded-md" alt="{{ $movies->title }}" />
            </div>
            <div class="bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 text-white space-y-4">
                    <h1 class="text-3xl">Movie Details</h1>
                    <h1 class="text-2xl font-bold">{{ $movies->title }}</h1>
                    <p class="text-white">{{ $movies->genre }}</p>
                    <p class="text-white">{{ $movies->release_date }}</p>
                    <p class="text-white">{{ $movies->duration }}</p>
                    <p class="text-white tracking-wide">{{ $movies->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-detail-layout>