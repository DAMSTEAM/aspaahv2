<?php

namespace App\Http\Livewire\Socio;

use Livewire\Component;

class CrearSocio extends Component
{
    public function render()
    {
        return view('livewire.socio.crear-socio');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        Contact::create([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->resetInput();
    }
}
