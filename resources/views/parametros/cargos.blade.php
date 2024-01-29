@extends('layouts.app', ['page' => __('Vínculos'),'pageSlug' => 'Vinculos'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Crear Cargo de {{ isset($persona) ? $persona->nombre . ' ' . $persona->apellido : '' }}</h3>
        </div>
        <div class="card-body">
            <div class="row align-items-end">
                <input type="hidden" name="id_persona" id="id_persona" class="cargo" value="{{ $persona->id }}">
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Tipo de Vínculo</label>
                    <select class="form-control cargo" name="id_tipo_cargo" id="id_tipo_cargo">
                        <option selected> - Seleccione Cargo - </option>
                        @foreach ($tipo_cargos as $cargo)
                        <option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control cargo" name="nombre" id="nombre"
                            aria-describedby="helpId" placeholder="Nombre del cargo" />
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Nivel de Cargo</label>
                    <select class="form-control cargo" name="id_nivel" id="id_nivel">
                        <option selected> - Seleccione un Nivel - </option>
                        @foreach ($niveles as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row align-items-end mt-3">
                <input type="hidden" name="id_persona" id="id_persona" class="form-control" value="{{ $persona->id }}">
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Localidad de Cargo</label>
                    <select class="form-control cargo" name="id_localidad" id="id_localidad">
                        <option value="" selected> - Seleccione Localidad - </option>
                        @foreach ($localidades as $localidad)
                        <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="">
                        <label for="" class="form-label">Fecha de Inicio</label>
                        <input type="date" class="form-control cargo" name="fecha_inicio" id="fecha_inicio"
                            aria-describedby="helpId" placeholder="Fecha de inicio" />
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="">
                        <label for="" class="form-label">¿Cargo en función? </label>
                        <input class="form-check-input ml-2" type="checkbox" value="" 
                            name="cargo_actual" id="cargo_actual">
                        <input type="date" class="form-control cargo" name="fecha_final" id="fecha_final"
                            aria-describedby="helpId" placeholder="Fecha de término" />
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <button type="button" class="btn btn-sm btn-primary" id="cargar_cargo">
                        Cargar Cargo
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tabla de Vínculos</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th>Tipo de Cargo</th>
                        <th>Nombre</th>
                        <th>Nivel</th>
                        <th>Localidad</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                    </thead>
                    <tbody id="tabla_cargos">
                        @include('parametros.tabla_cargos')
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/js/parametros/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/parametros/functions.js"></script>
@endpush