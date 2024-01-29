@foreach ($registros->sortByDesc('created_at') as $registro)
<tr>
    <td style="width: 15%">
        {{ $registro->persona->nombre }} {{ $registro->persona->apellido }}
    </td>
    <td style="width: 15%">
        {{ $registro->titulo }}
    </td>
    <td style="width: 10%">
        {{ $registro->categoria->nombre }}
    </td>
    <td style="width: 10%">
        {{ isset($registro->fecha) ? $registro->fecha : '' }}
    </td>
    <td class="table_descripcion" data-id="{{ $registro->id }}" id="descripcion{{ $registro->id }}">
        {{ $registro->descripcion }} 
    </td>
    <td>
        <a href="{{ route('registros.show', $registro)  }}" class="btn-link"> <i class="las la-search" style="font-size: 22px"></i></a>
        <a href="{{ route('registros.edit', $registro)  }}" class="btn-link"> <i class="las la-pen" style="font-size: 22px"></i></a>
        <form action="{{ route('registros.destroy', $registro) }}" method="POST" style="display:inline;">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn-link">
                <i class="lar la-trash-alt" style="font-size: 22px"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach