<?php

namespace App\View\Components;

use Illuminate\View\Component;

class rutaDetalle extends Component
{

    public $nombre;
    public $kms;
    public $descripcion;
    public $dificultad;
    public $localidad;
    public $img;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nombre, $kms, $descripcion, $dificultad, $localidad, $img, $id)
    {
        $this->nombre = $nombre;
        $this->kms = $kms;
        $this->descripcion = $descripcion;
        $this->dificultad = $dificultad;
        $this->localidad = $localidad;
        $this->img = $img;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ruta-detalle');
    }
}
