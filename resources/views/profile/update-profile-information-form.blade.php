<x-jet-form-section submit="updateProfileInformation" class="mt-4">
    <x-slot name="headerCard">
        <h5 class="card-title text-white mb-0">EDITAR PERFIL</h5>
    </x-slot>
    <x-slot name="form">
        <div class="row">
            @if (session('status'))
            <div class="">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @error(session('status'))
                <div class="">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>
        <div class="row">
            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                <div>
                    <div class="mb-4 d-flex justify-content-center p-5"
                        style="background-image: url('https://image.freepik.com/foto-gratis/textura-fondo-verde-cesped-artificial_1232-1975.jpg')">
                        <!-- Current Profile Photo -->
                        <div x-show="! photoPreview">
                            @if (Auth::user()->profile_photo_path)
                            <img class="rounded" width="200" height="200" style="object-fit: cover"
                                src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                            @else
                            <img class="rounded" width="200" height="200" style="object-fit: cover"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @endif
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview">
                            <img x-bind:src="photoPreview" class="rounded" width="200" height="200" style=" object-fit:
                                cover;">
                        </div>
                    </div>
                    <div class="grid">
                        <x-jet-secondary-button class="w-100 mb-2 bg-success border-success" type="button"
                            x-on:click.prevent="$refs.photo.click()">
                            {{ __('seleccionar una foto') }}
                        </x-jet-secondary-button>

                        @if ($this->user->profile_photo_path)
                        <x-jet-secondary-button class="w-100 bg-danger border-danger" type="button"
                            wire:click="deleteProfilePhoto">
                            <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm"
                                role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            {{ __('Remover la foto') }}
                        </x-jet-secondary-button>
                        @endif
                    </div>
                </div>
                <x-jet-input-error for="photo" class="mt-2" />
            </div>
            @endif
        </div>

        <div class="row">
            <!-- Name -->
            <div class="mb-3">
                <x-jet-label value="{{ __('Nombre de usuario') }}" class="form-label" for="name" />
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                    wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <x-jet-label class="form-label" for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                    wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <div class="d-flex align-items-baseline">
            <x-jet-button href="{{ route('profile.show') }}">
                <div class="spinner-border spinner-border-sm">
                    <span class="visually-hidden">Loading...</span>
                </div>
                {{ __('guardar') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
