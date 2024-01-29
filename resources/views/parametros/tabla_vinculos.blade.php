
@foreach ($vinculo_personas as $vinculo)

<tr class="">
    <td class="text-center">
        @if ($vinculo->persona1->nombre_foto)
        <img src="{{ asset('storage/assets/img/perfil'). '/' . $vinculo->persona1->nombre_foto}}" alt='' class="rounded-circle" width="50px">
        @else
        <img src="{{ asset('storage/assets/img/perfil/user.png') }}" alt='' class="rounded-circle" width="50px">
        @endif
    </td>
    <td class="text-center">{{ $vinculo->persona1->nombre . ' ' . $vinculo->persona1->apellido }}</td>
    <td class="text-center"><i class="las la-angle-double-right"></i></td>
    <td class="text-center">{{ $vinculo->vinculo->nombre }}</td>
    <td class="text-center"><i class="las la-angle-double-right"></i></td>
    <td class="text-center">
        @if ($vinculo->persona2->nombre_foto)
        <img src="{{ asset('storage/assets/img/perfil'). '/' . $vinculo->persona2->nombre_foto}}" alt='' class="rounded-circle" width="50px">
        @else
        <img src="{{ asset('storage/assets/img/perfil/user.png') }}" alt='' class="rounded-circle" width="50px">
        @endif
    </td>
    <td class="text-center">{{ $vinculo->persona2->nombre . ' ' . $vinculo->persona2->apellido }}</td>
</tr>
@endforeach