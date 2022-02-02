<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h2><b>LOGIN</b></h2>
        </x-slot>

        <x-jet-validation-errors class="alert alert-danger" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-input placeholder="E-mail address" id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input placeholder="Password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="row col-md-12">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div><br>
            <div class="row col-md-12">
                I dont have accout <a class="" href="{{ route('register') }}">
                        {{ __('Create Account') }}
                    </a>
            </div>
            <br>
            <div class="row col-md-12">
                <x-jet-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
