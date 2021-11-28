<x-guest-layout>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1>INGRESAR</h1>
                            <p class="lead">
                                Ingrese sus datos antes de continuar
                            </p>
                        </div>
                        <div class="card">
                            <div>
                                <x-jet-validation-errors class="mb-1 bg-danger text-white">
                                    <i class="fas fa-exclamation-circle"></i>
                                </x-jet-validation-errors>
                                @if (session('status'))
                                <div class="card bg-danger mb-1 rounded-0" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Correo') }}" class="form-label" />
                                            <x-jet-input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                type="email" name="email" :value="old('email')"
                                                placeholder="Ingrese su correo" required />
                                            <x-jet-input-error for="email"></x-jet-input-error>
                                        </div>
                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Contraseña') }}" class="form-label" />
                                            <x-jet-input
                                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                type="password" name="password" placeholder="Ingrese su contraseña"
                                                required autocomplete="current-password" />
                                            <x-jet-input-error for="password"></x-jet-input-error>
                                            <div class="mt-1">
                                                <small>
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                                    @endif
                                                </small>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me"
                                                    name="remember-me" checked>
                                                <span class="form-check-label">
                                                    ¿Recordar para mas tarde?
                                                </span>
                                            </label>
                                        </div>
                                        <div class="grid mt-3">
                                            <x-jet-button class="w-100">
                                                {{ __('Log in') }}
                                            </x-jet-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
