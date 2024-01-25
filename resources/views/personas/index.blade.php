@extends('layouts.app', ['page' => __('Lista de Personas'),'pageSlug' => 'Lista de Personas'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">Lista de Personas</h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a type="button" class="btn btn-sm btn-primary" href="{{ route('personas.create') }}">
                            Crear Persona
                        </a>
                    </div>
                </div>
            </div>
            <div class="input-group mb-2 mt-2 container">
                <span class="input-group-text" id="basic-addon1"><i class="las la-search"></i></span>
                <input type="text" class="form-control" placeholder="Buscar Personas" aria-label="Username"
                    aria-describedby="basic-addon1" id="search-persona">
            </div>
            <div class="card-body table-desktop">


                <table class="table" id="">
                    <thead class=" text-primary">
                        <tr>
                            <th width="60px"></th>
                            <th>Nombre</th>
                            <th>Cargo Actual</th>
                            <th>Partido</th>
                            <th>Último Registro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tablaPersonas">
                        @include('personas.table-desktop')
                    </tbody>
                </table>


            </div>
            <div class="tablaPersonasMovil" id="tablaPersonasMovil">
                @include('personas.table-movil')
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets') }}/js/personas/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/personas/functions.js"></script>
@endpush