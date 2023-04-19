<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="object-top p-8">
                <img class="w-44" src="assets/imag2.png" alt="">
            </div>
            
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />
            <div class="shadow-2xl shadow-gray-700">
                <div class="mt-4">
                    <form class="px-8 pb-8"method="POST" action="{{ route('password.email') }}">
                    @csrf

                        <div class="block">
                            <x-label for="email" value="{{ __('Correo') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Restablecimiento de Contraseña') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        
    </x-authentication-card>
</x-guest-layout>
