<nav class="navbar navbar-expand navbar-light navbar-bg sticky-top">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav align-items-baseline">
            <!-- Settings Dropdown -->
            @auth
            <x-jet-dropdown id="settingsDropdown">
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    @if (Auth::user()->profile_photo_path)
                    <img class="rounded-circle" width="40" height="40" style="object-fit: cover" src="/storage/{{ Auth::user()->profile_photo_path }}"
                        alt="{{ Auth::user()->name }}" />
                    @else
                    <img class="rounded-circle" width="40" height="40" style="object-fit: cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
                    @endif
                    @else
                    {{ Auth::user()->name }}
                    <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    @endif
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <h6 class="dropdown-header small text-muted">
                        {{ __('Manage Account') }}
                    </h6>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ Auth::user()->name }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-jet-dropdown-link>
                    @endif

                    <hr class="dropdown-divider">

                    <!-- Authentication -->
                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Log out') }}
                    </x-jet-dropdown-link>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </x-slot>
            </x-jet-dropdown>
            @endauth
        </ul>
    </div>
</nav>
