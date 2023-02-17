<?php

namespace App\View\Components;

use Illuminate\View\Component;

class listaweb extends Component
{

    public $elementos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($elementos)
    {
        $this->elementos = $elementos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listaweb');
    }
}
