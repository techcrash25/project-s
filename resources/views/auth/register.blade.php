<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{URL::asset('/images/logo-uts.png')}}" height="50%" width="50%" style="margin-left:11rem">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="names" value="{{ __('Nombre Completo') }}" />
                <x-jet-input id="names" class="block mt-1 w-full" type="text" name="names" :value="old('names')" required autofocus autocomplete="names" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="document" value="{{ __('Documento de identidad') }}" />
                <x-jet-input id="document" class="block mt-1 w-full" type="text" name="document" required autocomplete="document" />
            </div>

            <div class="mt-4">
                <x-jet-label for="telephone" value="{{ __('Teléfono') }}" />
                <x-jet-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" required autocomplete="telephone" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estás registrado? - Iniciar Sesión') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>