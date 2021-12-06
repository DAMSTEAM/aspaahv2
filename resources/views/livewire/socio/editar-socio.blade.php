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
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese su género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Provincia <span class="text-danger">*</span></label>
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese su género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Distrito <span class="text-danger">*</span></label>
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese su género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label class="form-label">Comunidad <span class="text-danger">*</span></label>
                    <select class="form-select form-control-lg" aria-label="Default select example">
                        <option disabled selected>Ingrese su género</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                </div>
            </div>
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
                        @if (true)
                        <span class="badge rounded-circle bg-success p-2">
                            <i class="align-middle" data-feather="thumbs-up"></i>
                        </span>
                        @else
                        <span class="badge rounded-circle bg-danger p-2">
                            <i class="align-middle" data-feather="thumbs-down"></i>
                        </span>
                        @endif
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
        <div class="row mt-4">
            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-info px-4 py-2 fs-3">Actualizar datos</button>
            </div>
        </div>
    </form>
</div>
