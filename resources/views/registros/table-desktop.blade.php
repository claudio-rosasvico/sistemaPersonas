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
                            <td class="table_descripcion" data-id="{{ $registro->id }}"
                                id="descripcion{{ $registro->id }}">
                                {{ $registro->descripcion }} Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Quos laboriosam veritatis dicta voluptatibus quam expedita adipisci voluptate
                                accusantium itaque odio repellendus, facere, accusamus vel aperiam at omnis distinctio
                                facilis fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam sit
                                praesentium doloremque commodi pariatur ad delectus, expedita porro voluptate minus
                                eaque enim suscipit nobis fuga accusamus aliquid quis omnis.
                            </td>
                            <td style="width: 10%">
                                <a href="{{ route('registros.show', $registro)  }}"> <i class="las la-search"
                                        style="font-size: 22px"></i></a>
                                <a href="{{ route('registros.edit', $registro)  }}"> <i class="las la-pen"
                                        style="font-size: 22px"></i></a>
                                <a href=""> <i class="lar la-trash-alt" style="font-size: 22px"></i></a>
                            </td>
                        </tr>
                        @endforeach