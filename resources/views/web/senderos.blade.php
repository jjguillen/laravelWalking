@extends('web.layout')

@section('titulo', 'Senderos')

@section('main')

    <div class='row'>
    @foreach($senderos as $sendero)
        <x-ruta>
            <img src="{{ asset($sendero->img) }}" class="card-img-top" alt="{{ $sendero->nombre }}">
            
            <div class="card-body">
                <h5 class="card-title">{{ $sendero->nombre }}</h5>
                <p class="card-text">
                    Kms: {{ $sendero->kms }}
                    <br>
                    Dificultad: {{ $sendero->dificultad }}
                </p>
                <a href="/senderos/{{ $sendero->id }}"><x-boton type='success' mensaje='Ver detalle'/></a>
            </div>
        </x-ruta>
    @endforeach
    </div>

    <div class='row'>
        {{ $senderos->links() }}
    </div>

@endsection
