<div class='row'>
    <div class='col-3'> 
        <div class="mb-3 p-2">
            <label for="{{$name}}" class="form-label">{{$texto}}</label>
            
            <select class="form-select">
                @foreach($options as $key => $valor)
                    <option value="{{$key}}">{{$valor}}</option>
                @endforeach
              </select>

        </div>
    </div>
</div>