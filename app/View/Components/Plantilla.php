<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Plantilla extends Component
{
    public $tab;
    public $titulo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tab = 'Pestaña', $titulo = 'Página')
    {
        $this->tab = $tab;
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.plantilla');
    }
}
