@foreach ($afiliados as $afiliado)
<tr>
    <td class="text-center">
        {{ $afiliado->DNI }}
    </td>
    <td>
        {{ $afiliado->genero }} 
    </td>
    <td>
        {{ $afiliado->nombre_apellido }} 
    </td>
    <td>
        {{ $afiliado->domicilio }}
    </td>
    <td>
        {{ $afiliado->seccion }}
    </td>
    <td>
        {{ $afiliado->circuito }}
    </td>
</tr>
@endforeach