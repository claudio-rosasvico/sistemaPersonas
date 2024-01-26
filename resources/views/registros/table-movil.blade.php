@foreach ($registros as $registro)
                <div class="card" style="background-color: #212529">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $registro->persona->nombre }}
                            {{ $registro->persona->apellido }}</h4>
                        <h6 class="card-subtitle mb-2 text-body-secondary text-center">"{{ $registro->titulo }}"</h6>
                        <h6>{{ $registro->categoria->nombre }} / {{ $registro->fecha }}</h6>
                        <p class="card-text table_descripcion" >{{ $registro->descripcion }}</p>
                            <div class="row container justify-content-between mt-3">
                                <a href="{{ route('registros.show', $registro)  }}" class="btn-link"> <i class="las la-search" style="font-size: 22px"></i></a>
                                <a href="{{ route('registros.edit', $registro)  }}" class="btn-link"> <i class="las la-pen" style="font-size: 22px"></i></a>
                                <form action="{{ route('registros.destroy', $registro) }}" method="POST" style="display:inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn-link">
                                        <i class="lar la-trash-alt" style="font-size: 22px"></i>
                                    </button>
                                </form>
                    </div>
                    </div>
                </div>
                @endforeach