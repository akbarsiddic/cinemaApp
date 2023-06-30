@extends('welcome')

@section('content')
@foreach ($movies as $movie)
<div class="card w-96 bg-base-100 shadow-xl image-full m-8">
    <figure><img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}" /></figure>
    <div class="card-body">
        <h2 class="card-title">{{ $movie->title }}</h2>
        <p>{{ $movie->release_date }}</p>
        <div class="card-actions justify-end">
            {{-- redirect to selected movie --}}
            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-outline">View Details</a>
            {{-- redirect to booking page --}}

        </div>
    </div>
</div>
@endforeach
@endsection