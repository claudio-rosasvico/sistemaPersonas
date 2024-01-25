@extends('layouts.app', ['page' => __('Crear Parámetros'),'pageSlug' => 'Crear Parámetros'])

@section('content')
<div class="row container">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-12 col-lg-6 text-left">
                        <h2 class="card-title">
                            {{ __('Crear Parámetros') }}
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6 text-right">
                        <a type="button" class="btn btn-sm btn-primary" href="{{ route('parametros.index') }}">
                            Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row container justify-content-around">
    <div class="card col-12 col-lg-5">
        <div class="card-header">
            <h4>Categoría de Registro</h4>
        </div>
        <div class="card body mb-3 text-center">
            <input type="text" class="form-control" name="categoria" id="categoria" aria-describedby="helpId"
                placeholder="Nombre" />
            <button type="button" class="btn btn-sm btn-primary mt-3" data-id="categoria">
                Cargar Categoria
            </button>
        </div>
    </div>
    <div class="card col-12 col-lg-5">
        <div class="card-header">
            <h4>Nivel de Cargo</h4>
        </div>
        <div class="card body mb-3 text-center">
            <input type="text" class="form-control" name="nivel" id="nivel" aria-describedby="helpId"
                placeholder="Nombre" />
            <button type="button" class="btn btn-sm btn-primary mt-3" data-id="nivel">
                Cargar Nivel
            </button>
        </div>
    </div>
</div>
<div class="row container justify-content-around">
    <div class="card col-12 col-lg-5">
        <div class="card-header">
            <h4>Tipo de Vínculo</h4>
        </div>
        <div class="card body mb-3 text-center">
            <input type="text" class="form-control" name="tipo de vinculo" id="tipo_vinculo" aria-describedby="helpId"
                placeholder="Nombre" />
            <button type="button" class="btn btn-sm btn-primary mt-3" data-id="tipo_vinculo">
                Cargar Vínculo
            </button>
        </div>
    </div>
    <div class="card col-12 col-lg-5">
        <div class="card-header">
            <h4>Tipo de Cargo</h4>
        </div>
        <div class="card body mb-3 text-center">
            <input type="text" class="form-control" name="tipo de cargo" id="tipo_cargo" aria-describedby="helpId"
                placeholder="Nombre" />
            <button type="button" class="btn btn-sm btn-primary mt-3" data-id="tipo_cargo">
                Cargar Cargo
            </button>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/js/parametros/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/parametros/functions.js"></script>
@endpush