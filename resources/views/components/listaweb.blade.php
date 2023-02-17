
<ul {{ $attributes->merge(['class' => 'list-group m-2']) }}>
    
    @foreach($elementos as $elemento)

    <li class="list-group-item">{{$elemento->name}} - {{$elemento->email}}</li>

    @endforeach

</ul>