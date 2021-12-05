<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Páginas
            </li>
            <x-item-sidebar class="sidebar-link"  href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('profile.show')">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Usuario</span>
            </x-item-sidebar>
            <li class="sidebar-header">
                Acciones
            </li>
            <x-item-sidebar class="sidebar-link"  href="{{route('socio.index')}}" :active="request()->routeIs('socio.index')">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Socios</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('maquinaria.show')">
                <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Maquinarias</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('evento.show')">
                <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Eventos</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('asistencia.show')">
                <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Asistencia</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('solicitud.show')">
                <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Solicitudes</span>
            </x-item-sidebar>
            <li class="sidebar-header">
                Ayuda
            </li>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('asistencia.show')">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Ayuda</span>
            </x-item-sidebar>
            <x-item-sidebar class="sidebar-link"  href="{{route('profile.show')}}" :active="request()->routeIs('asistencia.show')">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil ASPAAH</span>
            </x-item-sidebar>
        </ul>
    </div>
</nav>
