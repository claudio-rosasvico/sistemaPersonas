
@foreach ($cargo_personas as $cargo)

<tr class="">
    <td class="">{{ $cargo->tipoCargo->nombre }}</td>
    <td class="">{{ $cargo->nombre }}</td>
    <td class="">{{ $cargo->nivel->nombre }}</td>
    <td class="">{{ isset($cargo->id_localidad) ? $cargo->localidad->nombre : 'N/A' }}</td>
    <td class="">{{ $cargo->fecha_inicio }}</td>
    <td class="">{{ isset($cargo->fecha_final) ? $cargo->fecha_final : 'Cargo Actual' }}</td>
</tr>
@endforeach