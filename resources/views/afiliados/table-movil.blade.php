@foreach ($afiliados as $afiliado)
<div class="card" style="background-color: #212529">
    <div class="card-body">
        <div class="card-title text-center">
            <h2>{{ $afiliado->nombre_apellido }}</h2>
        </div>
        <h4 class="card-subtitle text-center">{{ $afiliado->DNI }} /
            {{ $afiliado->genero }}</h4>
        <h6 class="card-subtitle mt-2 text-body-secondary text-center">
            "{{ $afiliado->domicilio }} "
        </h6>
        <div class="mt-3 text-center">
            <p>{{ $afiliado->seccion }} - {{ $afiliado->circuito }}</p>
        </div>
    </div>
</div>
@endforeach