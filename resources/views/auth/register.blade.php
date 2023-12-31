<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" class="label-text text-white" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full input input-bordered text-white" type="text" name="name"
                :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- username --}}
        <div class="mt-4">
            <x-input-label for="username" class="label-text text-white" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full input input-bordered text-white" type="text"
                name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        {{-- Age --}}
        <div class="mt-4">
            <x-input-label for="age" class="label-text text-white" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full input input-bordered text-white" type="number" name="age"
                :value="old('age')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="label-text text-white" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full input input-bordered text-white" type="email" name="email"
                :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="label-text text-white" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full input input-bordered text-white" type="password"
                name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="label-text text-white" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full input input-bordered text-white"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>