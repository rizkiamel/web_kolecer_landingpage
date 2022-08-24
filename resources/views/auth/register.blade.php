<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!--<x-jet-authentication-card-logo />-->
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="mt-3 mb-4">
            @csrf
            <div class="mt-3">
                <h1 class=" font-sans text-3xl text-white text-center font-bold">Daftar</h1>
            </div>

            {{-- Login with Google --}}
            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('login/google') }}"
                    style="background: #DA1111; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Google
                </a>
            </div>

            <div class="mt-4 mb-4">
                <p class="font-sans text-gray-300 text-center text-xs">Atau dengan email</p>
            </div>

            <div class="mt-4">
                <input id="name" type="text" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="name" :value="old('name')" placeholder="Nama" required autofocus autocomplete="name" />   
            </div>

            <div class="mt-5">
                <!--<x-jet-label for="email" value="{{ __('Email') }}" />-->
                <input id="email" type="email" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="email" :value="old('email')" placeholder="Masukan email" required />   
                <!--<x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /> -->
            </div>

            <div class="mt-4">
                <!--<x-jet-label for="password" value="{{ __('Password') }}" />-->
                <input id="password" type="password" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="password" placeholder="Kata sandi" required />   
                <!--<x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />-->
            </div>

            <div class="">
                <!--<x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />-->
                <input id="password_confirmation" type="password" class="block mt-1 w-full rounded-lg bg-[#35414B] text-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" name="password_confirmation" placeholder="Konfirmasi kata sandi" required  autocomplete="new-password" />   
                <!--<x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />-->
            </div>
            <!--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif-->
            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <!--                
                <x-jet-button class="ml-4 bg-[#FF3087]">
                    {{ __('Register') }}
                </x-jet-button>-->

            <div class="mt-3">
                <button class="bg-[#FF3087] mt-1 w-full rounded-lg text-white p-2 hover:bg-pink-400">Register</button>
                <!--<x-jet-button class="bg-[#FF3087] rounded-lg">
                        {{ __('Log in') }}
                </x-jet-button>-->
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
