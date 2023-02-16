<div class='row'>
    <div class='col-3'> 
        <div class="mb-3 p-2">
            <label for="{{$name}}" class="form-label">{{$texto}}</label>
            <input type="{{$type}}" {{ $attributes->merge(['class' => 'form-control border border-success']) }}
            id="{{$name}}" name="{{$name}}" value="{{$value}}">
        </div>
    </div>
</div>