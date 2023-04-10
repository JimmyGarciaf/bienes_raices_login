<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
                <x-validation-errors class="mb-4" />
                <div class="flex items-center">
                    <div class="w-1/2 flex justify-center">
                        <div class="shadow-2xl shadow-gray-700">
                            <h2 class="pt-2 font-bold text-2xl flex justify-center font-serif">Crear tu cuenta</h2>
                                <div class="mt-4">
                                    
                                        <form class="px-8 pb-8" method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div>
                                                <x-label for="name" value="{{ __('Nombre') }}" />
                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="email" value="{{ __('Correo') }}" />
                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="password" value="{{ __('Contraseña') }}" />
                                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                            </div>

                                         @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <x-label for="terms">
                                                    <div class="flex items-center">
                                                        <x-checkbox name="terms" id="terms" required />

                                                        <div class="ml-2">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                </x-label>
                                            </div>
                                         @endif

                                            <div class="flex items-center justify-end mt-4">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                    {{ __('Acceder a tu cuenta en su lugar') }}
                                                </a>

                                                <x-button class="ml-4">
                                                    {{ __('Registrarse') }}
                                                </x-button>
                                            </div>
                                        </form>
                                </div>
                        </div>
                    </div>                                    
                        <div class="w-1/2 p-8">
                            <img class="w-3/4 rounded-lg shadow-2xl shadow-gray-700" src="assets/imagen.jpg" alt="">
                        </div>
                </div>
        </x-slot>
    </x-authentication-card>
</x-guest-layout>