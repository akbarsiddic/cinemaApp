<x-detail-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movie Details') }}
        </h2>
    </x-slot>

    {{-- booking form --}}
    <div class="p-4">
        <form action="{{route('bookings.store')}}">
            <div class="form-group">
                <label for="movie_id">Movie</label>
                <select class="select w-full max-w-xs cursor-default" disabled id="movie_id" name="movie_id">

                    <option value="{{ $movies->id }}">{{ $movies->title }}</option>

                </select>

            </div>
            {{-- <div class="form-group">
                <label for="user_id">User</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group">
                <label for="seat_id">Seat</label>
                <div class="card w-96 bg-neutral text-neutral-content">
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">Select Seat</h2>

                        <div class="seat-grid">
                            @foreach ($bookings as $seat)
                            <label for="seat{{ $seat->id }}" class="seat-label">
                                <input type="checkbox" id="seat{{ $seat->id }}" name="seats[]" value="{{ $seat->id }}">
                                <span class="seat">{{ $seat->seat_number }}</span>
                            </label>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="showtime_id">Showtime</label>
                <select class="form-control" id="showtime_id" name="showtime_id">
                    @foreach ($showtimes as $showtime)
                    <option value="{{ $showtime->id }}">{{ $showtime->showtime }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group">
                <label for="price">Price</label>
                <input class="input w-full max-w-xs" disabled type="number" name="price" id="price" placeholder="Price"
                    value="{{$movies->ticket_price}}">
            </div>

            {{-- <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <input class="form-control" type="text" name="payment_method" id="payment_method"
                    placeholder="Payment Method">
            </div>
            <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <input class="form-control" type="text" name="payment_status" id="payment_status"
                    placeholder="Payment Status">
            </div> --}}
        </form>

</x-detail-layout>