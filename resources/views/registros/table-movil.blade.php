@foreach ($registros as $registro)
                <div class="card" style="background-color: #212529">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $registro->persona->nombre }}
                            {{ $registro->persona->apellido }}</h4>
                        <h6 class="card-subtitle mb-2 text-body-secondary text-center">"{{ $registro->titulo }}"</h6>
                        <h6>{{ $registro->categoria->nombre }} / {{ $registro->fecha }}</h6>
                        <p class="card-text table_descripcion" >{{ $registro->descripcion }}Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Quos laboriosam veritatis dicta voluptatibus quam expedita adipisci voluptate
                            accusantium itaque odio repellendus, facere, accusamus vel aperiam at omnis distinctio
                            facilis fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam sit
                            praesentium doloremque commodi pariatur ad delectus, expedita porro voluptate minus
                            eaque enim suscipit nobis fuga accusamus aliquid quis omnis.</p>
                            <div class="row container justify-content-between mt-3">
                        <a href="{{ route('registros.show', $registro)  }}"> <i class="las la-search"
                                style="font-size: 22px"></i></a>
                        <a href="{{ route('registros.edit', $registro)  }}"> <i class="las la-pen"
                                style="font-size: 22px"></i></a>
                        <a href=""> <i class="lar la-trash-alt" style="font-size: 22px"></i></a>
                    </div>
                    </div>
                </div>
                @endforeach