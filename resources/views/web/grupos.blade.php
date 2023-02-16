@extends('web.layout')

@section('titulo', 'Grupos')

@section('main')

    <div class='row'>
        <div class='col-2'>
            <a href="/grupo/create"><x-boton type='primary' mensaje='Nuevo grupo' class='w-2'/></a>
        </div>
    <div class='row'>

    @foreach($grupos as $grupo)
        
        <x-grupo>
            <div class="card-body">
                <h5 class="card-title">{{ $grupo->nombre }}</h5>
                <p class="card-text">
                    Nivel: {{ $grupo->nivel }}
                    <br>
                    Federado: {{ $grupo->federeado }}
                </p>
                <a href="/grupo/{{ $grupo->id }}"><x-boton type='success' mensaje='Componentes'/></a>
            </div>
        </x-grupo>
    @endforeach
    </div>

    <div class='row'>
        {{ $grupos->links() }}
    </div>

@endsection
