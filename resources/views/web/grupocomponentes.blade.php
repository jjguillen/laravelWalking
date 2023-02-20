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

        @foreach($componentes as $elemento)

            @if (Auth::user()->id == $elemento->id)
                <li class="list-group-item">{{$elemento->name}} - {{$elemento->email}} 
                    <a href="/grupo/{{$grupo->id}}/componente/{{ Auth::user()->id }}/borrar"><x-boton type='danger' mensaje='X' class='w-2'/></a>
                </li>
            @else
                <li class="list-group-item">{{$elemento->name}} - {{$elemento->email}}</li>
            @endif

        @endforeach
        
    </x-listaweb>
   

@endsection
