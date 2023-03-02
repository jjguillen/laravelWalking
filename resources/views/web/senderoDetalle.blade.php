@extends('web.layout')

@section('titulo', 'Sendero Detalle')

@section('main')

  <x-ruta-detalle 
        :nombre="$sendero->nombre" 
        :kms="$sendero->kms" 
        :descripcion="$sendero->descripcion" 
        :dificultad="$sendero->dificultad" 
        :localidad="$sendero->localidad" 
        :kms="$sendero->kms" 
        :img="asset($sendero->img)" 
        :id="$sendero->id"
  >

  
  </x-ruta-detalle>

@endsection