@extends('layouts.app', ['page' => __('Lista de Registro'),'pageSlug' => 'Lista de Registros'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">Lista de Registros</h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a type="button" class="btn btn-sm btn-primary" href="{{ route('registros.create') }}">
                            Crear Registro
                        </a>
                    </div>
                </div>
            </div>
            <div class="input-group mb-2 mt-2 container">
                <span class="input-group-text" id="basic-addon1"><i class="las la-search"></i></span>
                <input type="text" class="form-control" placeholder="Buscar Registros" aria-label="Username"
                    aria-describedby="basic-addon1" id="search-registro">
            </div>
            <div class="card-body table-desktop">
                <table class="table" id="">
                    <thead>
                        <th style="width: 15%">Persona</th>
                        <th style="width: 15%">Título</th>
                        <th style="width: 10%">Categoría</th>
                        <th style="width: 10%">Fecha</th>
                        <th>Descripción</th>
                        <th ></th>
                    </thead>
                    <tbody id="tablaRegistros">
                        @include('registros.table-desktop')
                    </tbody>
                </table>


            </div>
            <div class="tableRegistrosMovil" id="tableRegistrosMovil">
                @include('registros.table-movil')
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets') }}/js/registros/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/registros/functions.js"></script>
@endpush