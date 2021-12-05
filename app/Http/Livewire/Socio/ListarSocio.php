<?php

namespace App\Http\Livewire\Socio;

use App\Models\sys\Persona;
use Livewire\Component;

class ListarSocio extends Component
{
    public $data, $name, $email, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $personas = Persona::all();
        return view('livewire.socio.listar-socio', compact('personas'));
    }
}
