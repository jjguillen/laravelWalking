@extends('web.layout')

@section('titulo', 'Registro de sendero')

@section('main')

<x-formweb action='/senderos/{{ $sendero->id }}/registrar' enctype='multipart/form-data' method='POST'>
  <x-inputweb type='text' name='descripcion' texto='Descripcion:' value='' />

  <x-inputweb type='date' name='fecha' texto='Fecha de realización:' value='' />

  <x-inputweb type='file' name='img' texto='Fotografía del sendero realizado:' value='' />

  <div class='row'>
    <div class='col-3'> 
        <div class="mb-3 p-2">
            <label for="grupo" class="form-label">Grupo que hace el sendero</label>
            
            <select class="form-select" name="grupo">
                @foreach($grupos as $grupo)
                    <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                @endforeach
            </select>

        </div>
    </div>
  </div>

  <x-inputweb type='submit' name='enviar' texto='' value='Registrar' />
</x-formweb>

@endsection