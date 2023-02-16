<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectweb extends Component
{
    public $name;
    public $texto;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $texto, $options)
    {
        $this->name = $name;
        $this->texto = $texto;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.selectweb');
    }
}
