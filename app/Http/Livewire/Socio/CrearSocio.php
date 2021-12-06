<?php

namespace App\Http\Livewire\Socio;

use App\Models\sys\Comunidad;
use App\Models\sys\Departamento;
use App\Models\sys\Distrito;
use App\Models\sys\Provincia;
use Livewire\Component;

class CrearSocio extends Component
{
    public $departamentos;
    public $provincias;
    public $distritos;
    public $comunidades;

    public $selectedDepartamento = NULL;
    public $selectedProvincia = NULL;
    public $selectedDistrito = NULL;
    public $selectedComunidad = NULL;

    public function mount()
    {
        $this->departamentos = Departamento::all();
        $this->provincias = collect();
        $this->distritos = collect();
        $this->comunidades = collect();
    }

    public function render()
    {
        $departamentos = $this->departamentos;
        return view('livewire.socio.crear-socio', compact('departamentos'));
    }

    public function updatedselectedDistrito($distrito)
    {
        
        if (!is_null($distrito)) {
            $this->comunidades = Comunidad::where('FK_DISTRITO', $distrito)->get();
        }
    }

    public function updatedselectedDepartamento($departamento)
    {
        $this->provincias = collect();
        $this->distritos = collect();
        $this->comunidades = collect();
        if (!is_null($departamento)) {
            $this->provincias = Provincia::where('FK_DEPARTAMENTO', $departamento)->get();
        }
    }

    public function updatedselectedProvincia($provincia)
    {
        $this->distritos = collect();
        $this->comunidades = collect();
        if (!is_null($provincia)) {
            $this->distritos = Distrito::where('FK_PROVINCIA', $provincia)->get();
        }
    }
}
