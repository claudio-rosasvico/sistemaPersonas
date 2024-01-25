@extends('layouts.app', ['page' => __('Crear Registro'),'pageSlug' => 'Crear Registro'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">
                            {{ isset($registro) ? 'Editar Registro Nº ' . $registro->id  : 'Crear Registro' }}
                        </h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a type="button" class="btn btn-sm btn-primary" href="{{ route('registros.index') }}">
                            Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group container">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" class="form-control registro"
                            value="{{ auth()->user()->id }}">
                        <input type="hidden" name="id" class="form-control registro"
                            value="{{ isset($registro) ? $registro->id : null}}">
                        <div class="row">
                            <div class="col-12 col-lg-4 ">
                                <label for="id_persona">Persona</label>
                                <select id="id_persona" class="form-control registro" name="id_persona">
                                    <option value=""> - Seleccione Persona - </option>
                                    @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}" {{ isset($registro) && $registro->id_persona == $persona->id ? 'selected' : '' }}>
                                        {{ $persona->nombre }} {{ $persona->apellido }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="id_categoria">Categoría</label>
                                <select id="id_categoria" class="form-control registro" name="id_categoria">
                                    <option value=""> - Seleccione Categoria - </option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ isset($registro) && $registro->id_categoria == $categoria->id ? 'selected' : '' }}>
                                        {{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="fecha" class="form-label">Fecha de lo Sucedido</label>
                                <input type="date" class="form-control registro" name="fecha" id="fecha"
                                    aria-describedby="helpId" value="{{ isset($registro) ? $registro->fecha : date('Y-m-d') }}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 ">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control registro" name="titulo" id="titulo"
                                    aria-describedby="helpId" placeholder="Título" value="{{ isset($registro) ? $registro->titulo : null }}" />
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <label for="fuente" class="form-label">Fuente</label>
                                <input type="text" class="form-control registro" name="fuente" id="fuente"
                                    aria-describedby="helpId" placeholder="Fuente" value="{{ isset($registro) ? $registro->fuente : null }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea type="text" class="form-control registro" name="descripcion" id="descripcion"
                                    aria-describedby="helpId" placeholder="Descripción" value="">{{ isset($registro) ? $registro->descripcion : null }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <select id="asociados" class="form-control" name="asociados">
                                    <option value=""> - Seleccione Persona - </option>
                                    @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}">
                                        {{ $persona->nombre }} {{ $persona->apellido }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-8 mt-2">
                                <div class="lista_asociados align-items-center">
                                    

                                </div>
                            </div>

                        </div>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-sm btn-primary" id="enviar">
                                {{ isset($registro) ? 'Actualizar Registro' : 'Cargar Registro' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets') }}/js/registros/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/registros/functions.js"></script>
@endpush