<div class="fs-3">
    <form>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Nombres <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su nombre">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Apellido Paterno <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido paterno">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Apellido Materno <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">DNI <span class="text-danger">*</span></label>
                    <input type="number" class="form-control form-control-lg" placeholder="Ingrese su DNI">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Celular <span class="text-danger">*</span></label>
                    <input type="number" class="form-control form-control-lg"
                        placeholder="Ingrese su número de celular">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">DNI <span class="text-danger">*</span></label>
                    <input type="file" class="form-control form-control-lg d-flex" placeholder="Añada su DNI">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Sexo <span class="text-danger">*</span></label>
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese su género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento <span class="text-danger">*</span></label>
                    <input type="date" class="form-control form-control-lg" placeholder="Ingrese su número de celular">
                </div>
            </div>
        </div>
        <x-jet-section-border />
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Departamento <span class="text-danger">*</span></label>
                    <select wire:model="selectedDepartamento" class="form-control">
                        <option value="0" selected>Elige el departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->ID_DEPARTAMENTO }}">{{ $departamento->NO_DEPARTAMENTO }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if (!is_null($selectedDepartamento))
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Provincia <span class="text-danger">*</span></label>
                    <select wire:model="selectedProvincia" class="form-control">
                        <option value="0" selected>Elige la provincia</option>
                        @foreach($provincias as $provincia)
                            <option value="{{ $provincia->ID_PROVINCIA }}">{{ $provincia->NO_PROVINCIA }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif

            @if (!is_null($selectedProvincia))
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Distrito <span class="text-danger">*</span></label>
                    <select wire:model="selectedDistrito" class="form-control">
                        <option value="0" selected>Elige el distrito</option>
                        @foreach($distritos as $distrito)
                            <option value="{{ $distrito->ID_DISTRITO }}">{{ $distrito->NO_DISTRITO }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif

            @if (!is_null($selectedDistrito))
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Comunidad <span class="text-danger">*</span></label>
                    <select wire:model="selectedComunidad" class="form-control">
                        <option value="0" selected>Elige la comunidad</option>
                        @foreach($comunidades as $comunidad)
                            <option value="{{ $comunidad->ID_COMUNIDAD }}">{{ $comunidad->NO_COMUNIDAD }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Referencia <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Socio <span class="text-danger">*</span></label>
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese el socio</option>
                        <option value="1">Socio</option>
                        <option value="2">Trabajador</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Estado <span class="text-danger">*</span></label>
                    <div>
                        <span class="badge bg-success">Activo</span>
                    </div>
                </div>
            </div>
        </div>
        <x-jet-section-border />

        <div class="row mt-2">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Nombre de usuario <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>

            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Contraseña <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>
                <div class="mb-3">
                    <label class="form-label">Repetir contraseña <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" placeholder="Ingrese su apellido materno">
                </div>
            </div>
            <div class="col-md-6">
                <p class="mb-2">Password requirements</p>
                <p class="small text-muted mb-2">To create a new password, you have to meet all of the following
                    requirements:</p>
                <ul class="small text-muted pl-4 mb-0">
                    <li>Minimum 8 character</li>
                    <li>At least one special character</li>
                    <li>At least one number</li>
                    <li>Can’t be the same as a previous password</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4 py-2 fs-3">Registrar socio</button>
            </div>
        </div>
    </form>
</div>
