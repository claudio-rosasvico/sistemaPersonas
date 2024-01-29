@extends('layouts.app', ['page' => __('Vínculos'),'pageSlug' => 'Vinculos'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Crear Vínculo de {{ isset($persona) ? $persona->nombre . ' ' . $persona->apellido : '' }}</h3>
        </div>
        <div class="card-body">
            <div class="row align-items-end">
                <input type="hidden" name="id_persona1" id="id_persona1" class="form-control" value="{{ $persona->id }}">
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Tipo de Vínculo</label>
                    <select class="form-control" name="id_vinculo" id="id_vinculo">
                        <option selected> - Seleccione un Vínculo - </option>
                        @foreach ($tipo_vinculos as $tipo_vinculo)
                        <option value="{{ $tipo_vinculo->id }}">{{ $tipo_vinculo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Persona Vinculada</label>
                    <select class="form-control" name="id_persona2" id="id_persona2">
                        <option selected> - Seleccione una Persona - </option>
                        @foreach ($personas as $vinculado)
                        <option value="{{ $vinculado->id }}">{{ $vinculado->nombre }} {{ $vinculado->apellido }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-4 mt-2">
                    <button type="button" class="btn btn-sm btn-primary" id="cargar_vinculo">
                        Cargar Vínculo
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

                    </thead>
                    <tbody id="tabla_vinculos">
                        @include('parametros.tabla_vinculos')
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