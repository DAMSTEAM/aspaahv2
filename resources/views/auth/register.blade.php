<x-guest-layout>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1>REGISTRARSE</h1>
                            <p class="lead">
                                Se parte hoy de nuestra asociación
                            </p>
                        </div>

                        <div class="card">
                            <div>
                                <x-jet-validation-errors class="mb-1 bg-danger text-white">
                                    <i class="fas fa-exclamation-circle"></i>
                                </x-jet-validation-errors>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Nombre de usuario') }}" />

                                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                type="text" name="name" :value="old('name')" required autofocus
                                                autocomplete="name" placeholder="Ingrese el usuario"/>
                                            <x-jet-input-error for="name"></x-jet-input-error>
                                        </div>

                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Correo') }}" />

                                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                type="email" name="email" :value="old('email')" placeholder="Ingrese el correo" required />
                                            <x-jet-input-error for="email"></x-jet-input-error>
                                        </div>

                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Contraseña') }}" />

                                            <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                type="password" name="password" required autocomplete="new-password" placeholder="Ingrese la contraseña"/>
                                            <x-jet-input-error for="password"></x-jet-input-error>
                                        </div>

                                        <div class="mb-3">
                                            <x-jet-label value="{{ __('Confirmar contraseña') }}" />

                                            <x-jet-input class="form-control" type="password"
                                                name="password_confirmation" required autocomplete="new-password" placeholder="Repetir la contraseña"/>
                                        </div>

                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <x-jet-checkbox id="terms" name="terms" />
                                                <label class="custom-control-label" for="terms">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank"
                                                        href="'.route('terms.show').'">'.__('Terms of
                                                        Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank"
                                                        href="'.route('policy.show').'">'.__('Privacy
                                                        Policy').'</a>',
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="mb-0">
                                            <div class="d-flex justify-content-end align-items-baseline">
                                                <a class="text-muted me-3 text-decoration-none"
                                                    href="{{ route('login') }}">
                                                    {{ __('¿Estas registrado?') }}
                                                </a>
                                                <x-jet-button>
                                                    {{ __('Registrar') }}
                                                </x-jet-button>
                                            </div>
                                        </div>
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
