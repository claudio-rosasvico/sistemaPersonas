@foreach ($personas as $persona)
<tr>
    <td class="text-center" width="60px">
        @if ($persona->nombre_foto)
        <img src="{{ asset('storage/assets/img/perfil'). '/' . $persona->nombre_foto }}" class="rounded-circle"
            srcset="" width="50px">
        @endif
    </td>
    <td>
        {{ $persona->nombre }} {{ $persona->apellido }}
    </td>
    <td>
        {{ isset($persona->cargo) && $persona->cargo->count() > 0? $persona->cargo->first()->nombre : 'Sin cargo actualmente' }}
    </td>
    <td>
        Unión por la Patria
    </td>
    <td>
        {{ isset($persona->registro) && $persona->registro->count() > 0? $persona->registro->sortByDesc('created_at')->first()->created_at->format('d-m-Y') : 'No hay registros' }}
    </td>
    <td>
        <a href="{{ route('personas.show', $persona)  }}"> <i class="las la-search" style="font-size: 22px"></i></a>
        <a href=""> <i class="las la-pen" style="font-size: 22px"></i></a>
        <a href=""> <i class="lar la-trash-alt" style="font-size: 22px"></i></a>
    </td>
</tr>
@endforeach