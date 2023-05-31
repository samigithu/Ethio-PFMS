<x-guest-layout >
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="adminlite/dist/img/AdminLTELogo.png"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{trans('messages.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{trans('messages.password')}}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ trans('messages.remember_me') }}</span>
                </label>
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                   {{trans('messages.notregisterd') }} 
                </a>
            </div>
         
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{trans('messages.forgot_password') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{trans('messages.login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
