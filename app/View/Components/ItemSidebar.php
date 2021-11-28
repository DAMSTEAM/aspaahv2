<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ItemSidebar extends Component
{

    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $clases = ($this->active ?? false)
            ? 'sidebar-item active'
            : 'sidebar-item';
        return view('components.slots.item-sidebar', compact('clases'));
    }
}
