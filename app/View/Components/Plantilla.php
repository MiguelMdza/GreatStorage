<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Plantilla extends Component
{
    public $titulo;
    public $tab;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo = 'Página', $tab = 'Pestaña')
    {
        $this->titulo = $titulo;
        $this->tab = $tab;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components/plantilla');
    }
}
