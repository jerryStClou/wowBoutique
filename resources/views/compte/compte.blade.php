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

        <div class="BoutonsGroupe">
            <button class="loginActiveStyle" id="loginButton">login</button>
            <button class="loginActiveStyle2" id="registerButton">register</button>
        </div>
    <div class="loginDiv" id="loginDiv">
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
            {{-- <div class="block mt-4">
                <label for="remember_me" class="rememberMeStyle">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div  class="inputStyle"> --}}
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="buttonLogin">
                    {{ __('Log in') }}
                </x-button>
            {{-- </div> --}}
        </form>
    </div>



  <div class="invisible" id="registerDiv">
    <h1 class="titreAjoutProduit">S'inscrire</h1>
    <form method="POST" action="{{ route('register') }}"  class="formAjoutProduit">
        @csrf
        <!-- Name -->

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="name"/>

        <!-- Email Address -->

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="email" />


            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required placeholder="address" />



            <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required placeholder="city" />




            <x-input id="codePostal" class="block mt-1 w-full" type="number" name="codePostal" :value="old('codePostal')" required placeholder="codePostal" />

        <!-- Password -->

            <x-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="password"
                            required autocomplete="new-password" />

        <!-- Confirm Password -->

            <x-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="password_confirmation"
                            required />

            <a class="forgotPasswordStyle" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="buttonRegister">
                {{ __('Register') }}
            </button>
        </div>
    </form>
  </div>



    </x-auth-card>
</x-guest-layout>
