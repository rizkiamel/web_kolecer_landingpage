<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        `<!--<img class="h-20" src="{{ url('/img/Bumble_logo.svg') }}"/>-->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-3">
                <h1 class=" font-sans text-3xl text-white text-center font-bold">Masuk</h1>
            </div>

            {{-- Login with Google --}}
            <div class="items-center justify-end mt-4">
                <a class="btn" href="{{ url('login/google') }}"
                    style="background: #DA1111; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Google
                </a>
            </div>

            <div class="mt-5 mb-8">
                <p class="font-sans text-gray-300 text-center text-xs">Atau dengan akun</p>
            </div>

            <div>
                <!-- <x-jet-label for="email" value="{{ __('Email') }}" class="text-white"/> -->
                <input id="email" type="email" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="email" :value="old('email')" placeholder="Masukan email" required autofocus />
            </div>

            <div class="mt-4">
                <!--<x-jet-label for="password" value="{{ __('Password') }}" />-->
                <input id="password" type="password" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="password" placeholder="Kata sandi" required autofocus />
                <!--<x-jet-input id="password" class="block mt-1 w-full rounded-lg" type="password" name="password" placeholder="Kata sandi" required autocomplete="current-password" />-->    
            </div>

            <!--<div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>-->
            
            <!--<div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>-->
            <div class="mt-3">
                <button class="bg-[#FF3087] w-full rounded-lg text-white p-2 hover:bg-pink-400">Log in</button>
                <!--<x-jet-button class="bg-[#FF3087] rounded-lg">
                        {{ __('Log in') }}
                </x-jet-button>-->
            </div>
            
        </form>
    </x-jet-authentication-card>
</x-guest-layout>