@extends('web.layout')

@section('titulo', 'Grupos')

@section('main')

    <div class='row'>
        <div class='col-2'>
            <a href="/grupo/{{$grupo->id}}/componente/{{ Auth::user()->id }}"><x-boton type='primary' mensaje='Inscribirme' class='w-2'/></a>
        </div>
    </div>

    <div class='row mt-3'>
        <h3>Componentes del grupo {{ $grupo->nombre }}</h3>
    </div>

    <x-listaweb :elementos='$componentes'>
    </x-listaweb>
   

@endsection
