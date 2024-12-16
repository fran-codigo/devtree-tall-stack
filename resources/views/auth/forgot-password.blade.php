<x-guest-layout>
    <div class="mb-4 text-sm text-gray-200">
        {{ __('Ingresa tu correo electrónico para recuperar tu contraseña') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo Electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-white hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('Crear cuenta') }}
            </a>

            <a class="underline text-sm text-white hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Inicia Sesión') }}
            </a>

        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar instrucciones') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
