@extends('web.layout')

@section('titulo', 'Sendero Detalle')

@section('main')

  <x-formweb action='/grupo'>
    <x-inputweb type='text' name='nombre' texto='Nombre:' value='' />
    <x-inputweb type='checkbox' name='federado' texto='Federado:' value='' class='form-check-input' />

    <x-selectweb name="nivel" texto='Nivel:' :options="['amateur' => 'Amateur', 'profesional' => 'Profesional', 'experto' => 'Experto']" />
      
    <x-inputweb type='submit' name='enviar' texto='' value='Crear' />
  </x-formweb>

@endsection