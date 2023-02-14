@extends('web.layout')

@section('titulo', 'Senderos')

@section('main')

    @foreach($senderos as $sendero)
        <x-ruta>

            <img src="..." class="card-img-top" alt="...">
            
            <div class="card-body">
            <h5 class="card-title">{{ $sendero->nombre }}</h5>
            <p class="card-text">{{ $sendero->descripcion }}</p>
            <a href="#"><x-boton type='primary' mensaje='Ver detalle'/></a>
            </div>

        </x-ruta>
    @endforeach

@endsection

@section('footer')

@endsection