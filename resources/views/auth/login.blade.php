<x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <div class="flex items-center">
                    <div class="w-1/2 flex justify-center">
                        <div>
                            <h2 class= "text-2xl flex justify-center" >Iniciar</h2>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class= "mt-4">
                                            <x-label for="email" value="{{ __('Correo') }}" />
                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        </div>

                                            <div class="mt-4">
                                                <x-label for="password" value="{{ __('Contraseña') }}" />
                                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            
                                            </div>

                                                <div class="block mt-4">
                                                    <label for="remember_me" class="flex items-center">
                                                        <x-checkbox id="remember_me" name="remember" />
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span>
                                                    </label>
                                                </div>

                                                    <div class="flex items-center justify-end mt-4">
                                                        @if (Route::has('password.request'))
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                                {{ __('¿Olvidaste tu contraseña?') }}
                                                            </a>
                                                        @endif

                                                            <x-button class="ml-4">
                                                                {{ __('Iniciar Sesión') }}
                                                            </x-button>
                                                    </div>
                                    </form>
                                        <x-validation-errors class="mb-4" />
                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                        </div>
                    </div>
                        <div class= "w-1/2 py-8">
                         <img class="rounded-lg" src="assets/imagen.jpg" alt=""/>
                        </div>
                </div>
            </x-slot>
        </x-authentication-card>
</x-guest-layout>