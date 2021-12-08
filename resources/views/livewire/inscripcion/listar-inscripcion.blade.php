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
            <a type="button" class="btn btn-success" href="{{route('socios.create')}}">Nuevo Socio</a>
        </div>
    </div>
    <table class="table table-borderless">
        <thead class="text-light" style="background-color: #222E3C;">
            <tr>
                <th scope="col" class="text-center">Código</th>
                <th scope="col" class="text-center">Solictado por</th>
                <th scope="col" class="text-center">Aprobado por</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Requisitos</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscripciones as $inscripcion)
            <tr>
                <td class="text-center">{{$inscripcion->ID_INSCRIPCION}}</td>
                <td class="text-center">{{$inscripcion->persona->NO_SOCIO}}</td>
                <td class="text-center">{{$inscripcion->socio->persona->NO_SOCIO}}</td>
                <td class="text-center">
                    @if ($inscripcion->ES_INSCRIPCION == '1')
                    <i class="fas fa-check-circle align-middle fa-2x text-success"></i>
                    @elseif ($inscripcion->ES_INSCRIPCION == '2')
                    <i class="fas fa-question-circle align-middle fa-2x text-warning"></i>
                    @else
                    <i class="fas fa-exclamation-circle align-middle fa-2x text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    <select class="form-select">
                        <option value="0" selected>Requisitos</option>
                        @foreach ($inscripcion->requisitos_inscripciones as $req_first)
                        <option value="0">{{$req_first->requisito->NO_REQUISITO}}</option>
                        @endforeach
                    </select>
                </td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a type="button" class="btn btn-info"><i class="fas fa-eye align-middle me-1"></i>
                            Ver</a>
                        <a type="button" class="btn btn-warning"
                            href="{{route('socios.edit', $inscripcion->ID_INSCRIPCION)}}"><i class="fas fa-edit align-middle me-1"></i>
                            Actualizar</a>
                        <a type="button" class="btn btn-danger"><i class="fas fa-plus-square align-middle me-1"></i>
                            Aprobar</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
