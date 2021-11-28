<x-app-layout>
    <div class="row">
        @include('components.frag.show-profile')

        <div class="col-md-8 col-xl-9">
            <div class="card">
                <div class="card-header" style="background-color: #222E3C;">

                    <h5 class="card-title text-white mb-0">ACCIONES</h5>
                </div>
                <div class="card-body pt-0 h-100">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                    <x-jet-section-border />
                    @endif

                    <div class="row">
                        <div class="col">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            @livewire('profile.update-password-form')
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
