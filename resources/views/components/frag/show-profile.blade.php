<div class="col-md-4 col-xl-3">
    <div class="card mb-3">
        <div class="card-header" style="background-color: #222E3C;">
            <h5 class="card-title text-white mb-0">DETALLES DE PERFIL</h5>
        </div>
        <div class="card-body text-center">
            @if (Auth::user()->profile_photo_path)
            <figure>
                <img class="rounded shadow-lg" width="128" height="128" style="object-fit: cover"
                    src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
            </figure>

            @else
            <figure>
                <img class="rounded shadow-lg" width="128" height="128" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </figure>
            @endif
            <h5 class="card-title text-muted mb-0">{{ Auth::user()->name }}</h5>
            <div class="text-muted mb-2">{{ Auth::user()->email }}</div>

            <div>
                <a class="btn btn-dark btn-sm mt-2" href="{{route('profile.show')}}"><i class="align-middle" data-feather="user"></i></a>
                <a class="btn btn-dark btn-sm mt-2" href="{{route('comunidad.show')}}"><i class="align-middle" data-feather="globe"></i></a>
                <a class="btn btn-dark btn-sm mt-2" href="{{route('socio.show')}}"><i class="align-middle" data-feather="check-circle"></i></a>
            </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Comunidad</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives
                    in <a href="#">San Francisco, SA</a></li>

                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span>
                    Works at <a href="#">GitHub</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span>
                    From <a href="#">Boston</a></li>
            </ul>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <h5 class="h6 card-title">Contactos</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives
                    in <a href="#">San Francisco, SA</a></li>

                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span>
                    Works at <a href="#">GitHub</a></li>
                <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span>
                    From <a href="#">Boston</a></li>
            </ul>
        </div>
        <hr class="my-0" />
        <div class="card-body" id="hola">
            <h5 class="h6 card-title">Eventos</h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#">staciehall.co</a></li>
                <li class="mb-1"><a href="#">Twitter</a></li>
                <li class="mb-1"><a href="#">Facebook</a></li>
                <li class="mb-1"><a href="#">Instagram</a></li>
                <li class="mb-1"><a href="#">LinkedIn</a></li>
            </ul>
        </div>
    </div>
</div>
