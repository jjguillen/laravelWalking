<form method='POST' action='{{$action}}' {{ $attributes->merge(['class' => 'card m-2']) }}>
    @csrf

    {{ $slot }}
    
</form>