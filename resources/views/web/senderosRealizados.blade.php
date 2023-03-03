@extends('web.layout')

@section('titulo', 'Senderos realizados')

@section('main')

<div class='row'>
    @foreach($senderos as $sendero)
        
        <x-grupo>
            <div class="card-body">
                <h4 class="card-title">Sendero: {{ $sendero->nombre }}</h4>
                <h5 class="card-title">Grupo: {{ $sendero->grupo_id}} </h5>
                <p class="card-text">
                    Fecha: {{ $sendero->fecha }}
                    <br>
                    Descripcion: {{ $sendero->descripcion }}
                    <br>
                    Imagen: <img src="{{ asset($sendero->img) }}" class="card-img-top" alt="Imagen de la ruta realizada">
                </p>
                

            </div>
        </x-grupo>
    @endforeach
</div>


@endsection
