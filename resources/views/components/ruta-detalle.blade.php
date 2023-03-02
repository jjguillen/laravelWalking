<div class='container'>
    <br>

    <div class="row">


        <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ $img }}" class="img-fluid rounded-1" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content bg-success text-white rounded-1">
            <h5 class='p-3'>{{ $nombre }}</h5>
            <ul class="list-group p-3 rounded-1">
                <li class="list-group-item"><i class="bi bi-check-circled"></i> <strong>Kms:</strong> {{ $kms }}</li>
                <li class="list-group-item"><i class="bi bi-check-circled"></i> <strong>Dificultad:</strong> {{ $dificultad }}</li>
                <li class="list-group-item"><i class="bi bi-check-circled"></i> <strong>Localidad:</strong> {{ $localidad }}</li>
                <li class="list-group-item"><i class="bi bi-check-circled"></i> <strong>Descripción:</strong> {{ $descripcion }}</li>
                <li class="list-group-item"><br></li>
            </ul>
            
            <a href="/senderos/{{ $id }}/registro" class='p-3'><x-boton type='primary' mensaje='Iniciar sendero'/></a>
        </div>

        
    </div>
    

</div>