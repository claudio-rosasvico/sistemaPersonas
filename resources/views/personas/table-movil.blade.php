@foreach ($personas as $persona)
<div class="card" style="background-color: #212529">
    <div class="card-body">
        <div class="text-center">
            @if ($persona->nombre_foto)
            <img src="{{ asset('storage/assets/img/perfil'). '/' . $persona->nombre_foto }}" class="rounded-circle"
                srcset="" width="50px">
            @endif
        </div>
        <h4 class="card-title text-center">{{ $persona->nombre }}
            {{ $persona->apellido }}</h4>
        <h6 class="card-subtitle mb-2 text-body-secondary text-center">
            "{{ isset($persona->cargo) && $persona->cargo->count() > 0? $persona->cargo->first()->nombre : 'Sin cargo actualmente' }}"
        </h6>
        <div class="row container justify-content-between mt-3">
            <a href="{{ route('personas.show', $persona)  }}"> <i class="las la-search" style="font-size: 22px"></i></a>
            <a href="{{ route('personas.edit', $persona)  }}"> <i class="las la-pen" style="font-size: 22px"></i></a>
            <a href=""> <i class="lar la-trash-alt" style="font-size: 22px"></i></a>
        </div>
    </div>
</div>
@endforeach