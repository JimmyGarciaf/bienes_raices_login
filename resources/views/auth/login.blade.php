<x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <div class="flex items-center">
                    <div class="w-1/2 flex justify-center">
                        <div class="shadow-2xl shadow-gray-700">
                            <h2 class= "pt-2 font-bold text-2xl flex justify-center font-serif">Iniciar</h2>

                                    <form class="px-8 pb-8" method="POST" action="{{ route('login') }}">
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
                                                    <div class="float-right m-4 me-0">
                                                        <x-button class="inline-flex items-center px-6 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
                                                            focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                                                            <a class="shadow rounded-lg" href="{{route ('register')}} ">Registrarse</a>
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
                        <div class= "w-1/2 p-8">
                         <img class="w-3/4 rounded-lg shadow-2xl shadow-gray-700" src="assets/imagen.jpg" alt=""/>
                        </div>
                </div>
            </x-slot>
        </x-authentication-card>
</x-guest-layout>

