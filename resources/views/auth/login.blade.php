<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}"
        class="max-w-md mx-auto bg-neutral p-8 border shadow-md rounded-lg">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block font-medium label-text ">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="username"
                class="mt-1 px-4 py-2 block w-full input input-bordered text-white rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block label-text font-medium ">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 px-4 py-2 block w-full text-white input input-bordered rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        {{-- <div class="flex items-center mb-4">
            <input id="remember_me" type="checkbox" name="remember"
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <label for="remember_me" class="ml-2 text-sm ">{{ __('Remember me') }}</label>
        </div> --}}
        <div class="form-control">
            <label class="cursor-pointer label">
                <span class="label-text ">Remember me</span>
                <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
            </label>
        </div>

        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
            <a class="text-sm label-text text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <button type="submit"
                class="btn btn-primary text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>