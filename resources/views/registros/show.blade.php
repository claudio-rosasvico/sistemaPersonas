@extends('layouts.app', ['page' => __('Registro'), 'pageSlug' => 'profile'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                <div class="author text-center">
                    <h3>Registro # {{ $registro->id }} / {{ $registro->categoria->nombre }}</h3>
                    </a>
                    <p class="description">
                        {{ $registro->persona->nombre }} {{ $registro->persona->apellido }}
                    </p>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h6 class="title">Datos del Registro</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <p><strong>Titulo: </strong>{{ $registro->titulo }}</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p><strong>Fecha: </strong>{{ $registro->fecha }}</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p><strong>Fuente: </strong>{{ $registro->fuente }}</p>
                    </div>
                </div>
                <div class="row container">
                    @if ($registro->asociado)
                    @foreach ($registro->asociado as $asociado)
                    <span class="badge text-bg-warning mr-1 mt-2"
                        style="padding: 5px; background-color:#1d8cf8; color:white">{{ $asociado->persona->nombre }}
                        {{ $asociado->persona->apellido }}</span>
                    @endforeach
                    @endif
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="descripcion">Descripción</label>
                        <p id="descripcion">{{ $registro->descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="{{ asset('assets/js/personas/getEvents.js') }}"></script>
@endpush