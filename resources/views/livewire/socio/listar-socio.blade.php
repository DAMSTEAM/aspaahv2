<div>
    <div class="mb-3 d-flex justify-content-between row">
        <div class="col">
            <x-jet-input placeholder="Buscar socio" type="text" />
        </div>
        <div class="d-flex col">
            <x-jet-input placeholder="Buscar socio" type="date" class="me-2" />
            <x-jet-input placeholder="Buscar socio" type="date" class="me-2" />

            <select class="form-select" aria-label="Default select example">
                <option disabled selected>Buscar por</option>
                <option value="1">Nombres y apellidos</option>
                <option value="1">Comunidad</option>
                <option value="2">Estado</option>
                <option value="3">DNI</option>
            </select>
        </div>
    </div>
    <div class="mb-3 d-flex justify-content-between">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-danger px-4">Exportar carnets</button>
            <button type="button" class="btn btn-warning px-4">Exportar PDF</button>
            <button type="button" class="btn btn-success px-4">Exportar Excel</button>
        </div>
        <div>
            <a type="button" class="btn btn-success" href="{{route('socios.create')}}"><i class="fas fa-handshake me-1"></i> Nuevo socio </a>
            <a type="button" class="btn btn-info" href="{{route('socios.create')}}"><i class="fas fa-user me-1"></i> Agregar persona</a>
        </div>
    </div>
    <table class="table table-borderless">
        <thead class="text-light" style="background-color: #222E3C;">
            <tr>
                <th scope="col" class="text-center">Código</th>
                <th scope="col" class="text-center">DNI</th>
                <th scope="col" class="text-center">Nombres y apellidos</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Comunidad</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socios as $socio)
            <tr>
                <td class="text-center">{{$socio->ID_SOCIO}}</td>
                <td class="text-center">{{$socio->persona->CO_DNI}}</td>
                <td class="text-center">{{$socio->persona->NO_SOCIO}} {{$socio->persona->AP_PATERNO}}
                    {{$socio->persona->AP_MATERNO}}</td>
                <td class="text-center">
                    @if ($socio->ES_SOCIO == '1')
                    <i class="fas fa-thumbs-up align-middle fa-2x text-success"></i>
                    @else
                    <i class="fas fa-thumbs-down align-middle fa-2x text-danger"></i>
                    @endif
                </td>
                <td class="text-center">{{$socio->persona->user->email}}</td>
                <td class="text-center">{{$socio->comunidad->NO_COMUNIDAD}}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-info"><i class="align-middle" data-feather="eye"></i>
                            Ver</a>
                        <a type="button" class="btn btn-warning" href="{{route('socios.edit', $socio->ID_SOCIO)}}"><i class="align-middle" data-feather="edit-3"></i>
                            Actualizar</a>
                        <a type="button" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i>
                            Retirar</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
