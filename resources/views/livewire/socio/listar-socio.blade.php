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
            <button type="button" class="btn btn-success">Nuevo Socio</button>
        </div>
    </div>
    <table class="table table-borderless">
        <thead class="text-light" style="background-color: #222E3C;">
            <tr>
                <th scope="col" class="text-center">Código</th>
                <th scope="col" class="text-center">DNI</th>
                <th scope="col" class="text-center">Nombres y apellidos</th>
                <th scope="col" class="text-center">Estado</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($socios as $socio)
            <tr>
                <th scope="row" class="text-center">{{$socio->ES_SOCIO}}</th>
                <td class="text-center">{{$socio->comunidad->NO_COMUNIDAD}}</td>
                <td class="text-center">Pedro marcos Alfredo Sanches</td>
                <td class="text-center"><span class="badge rounded-circle bg-success p-2"><i class="align-middle"
                            data-feather="thumbs-up"></i></span></td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-info"><i class="align-middle" data-feather="eye"></i>
                            Ver</button>
                        <button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit-3"></i>
                            Actualizar</button>
                        <button type="button" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i>
                            Retirar</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
