<?php

namespace App\Http\Livewire\Socio;

use App\Models\sys\Comunidad;
use App\Models\sys\Departamento;
use App\Models\sys\Distrito;
use App\Models\sys\Provincia;
use App\Models\sys\Socio;
use Livewire\Component;

class ListarSocio extends Component
{
    public function render()
    {
        $socios = Socio::all();
        return view('livewire.socio.listar-socio', compact(['socios']));
    }
}
