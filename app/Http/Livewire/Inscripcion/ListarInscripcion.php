<?php

namespace App\Http\Livewire\Inscripcion;

use App\Models\sys\Inscripcion;
use Livewire\Component;

class ListarInscripcion extends Component
{
    public function render()
    {
        $inscripciones = Inscripcion::all();
        return view('livewire.inscripcion.listar-inscripcion', compact(['inscripciones']));
    }
}
