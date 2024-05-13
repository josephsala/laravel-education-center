@section('title', 'Login')

<x-guest-layout>
    <x-authentication-card>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <h1 class="text-2xl text-center font-bold">SING UP</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="email@monlau.com" required  autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="********"
                    required autocomplete="current-password" />
            </div>

   

                <x-button class="mt-6 w-full">
                    {{ __('Log in') }}
                </x-button>


        </form>
    </x-authentication-card>
</x-guest-layout>
