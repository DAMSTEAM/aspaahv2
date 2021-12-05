<?php

namespace App\Http\Livewire\Socio;

use Livewire\Component;

class ListarSocio extends Component
{
    public $data, $name, $email, $selected_id;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.socio.listar-socio');
    }
    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
    }

    public function edit($id)
    {
        $record = Contact::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }
    
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        if ($this->selected_id) {
            $record = Contact::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
