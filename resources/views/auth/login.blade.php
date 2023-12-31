<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="tousLeLogin">
        <h1 class="titreAjoutProduit">Connexion</h1>
        <form method="POST" action="{{ route('login') }}" class="formAjoutProduit">
            @csrf

            <!-- Email Address -->
            {{-- <div> --}}
                {{-- <x-label for="email" :value="__('Email')" /> --}}

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
            {{-- </div> --}}

            <!-- Password -->
            {{-- <div class="mt-4"> --}}
                {{-- <x-label for="password" :value="__('Password')" /> --}}

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="Password"
                                />
            {{-- </div> --}}

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="rememberMeStyle">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div  class="inputStyle">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="buttonLogin">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>
