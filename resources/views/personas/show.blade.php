@extends('layouts.app', ['page' => __('Perfil de Persona'), 'pageSlug' => 'profile'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-body">
                <p class="card-text">
                <div class="author">
                    {{-- <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div> --}}
                    <div href="#">
                        @if ($persona->nombre_foto)
                        <img class="avatar" src="{{ asset('storage/assets/img/perfil'). '/' . $persona->nombre_foto }}"
                            alt="">
                        @endif
                        <h3>{{ $persona->nombre }} {{ $persona->apellido }}</h3>
                    </div>
                    <p class="description">
                        {{ $persona->cargo->count() > 0 ? 
                            ($persona->cargo->where('fecha_final', null)->sortByDesc('fecha_inicio')->first()->tipoCargo->nombre . ' / ' . $persona->cargo->first()->nivel->nombre) 
                            : 'Sin cargo' }}                        
                        {{-- {{ $persona->cargo->first()->nivel->nombre }} --}}
                    </p>
                </div>
                </p>
            </div>

            {{-- <div class="row align-items-center">
                    <div class="col ">
                        
                <a class="">
                    <i class="lab la-facebook" style="font-size: 40px"></i>
                </a>
                <button class="btn">
                    <i class="fab fa-twitter"></i>
                </button>
                <button class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                </button> --}}
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col mb-3">
                        @if($persona->twitter) <a href="{{ $persona->twitter }}" target="__blank"><img
                                src="{{ asset('assets/img/icon_twitter.png') }}" alt=""
                                style="width: 20px; margin-right: 15px"></a> @endif
                        @if($persona->facebook) <a href="{{ $persona->facebook }}" target="__blank"><img
                                src="{{ asset('assets/img/icon_facebook.png') }}" alt=""
                                style="width: 20px; margin-right: 15px"></a> @endif
                        @if($persona->instagram) <a href="{{ $persona->instagram }}" target="__blank"><img
                                src="{{ asset('assets/img/icon_instagram.png') }}" alt=""
                                style="width: 20px; margin-right: 15px"></a> @endif
                        @if($persona->tiktok) <a href="{{ $persona->tiktok }}" target="__blank"><img
                                src="{{ asset('assets/img/icon_tiktok.png') }}" alt=""
                                style="width: 20px; margin-right: 15px"> </a> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col">
                        <h6 class="title">Datos personales</h6>
                    </div>
                    <div class="col text-right">
                        <a type="button" class="btn btn-sm btn-primary" style="color: white !important"
                        href="{{ route('parametros.vinculos', $persona) }}">
                        Crear Vínculo
                    </a>
                        <a type="button" class="btn btn-sm btn-primary" style="color: white !important"
                        href="{{ route('parametros.cargos', $persona) }}">
                        Crear Cargo
                    </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Edad</th>
                        <th>Profesión</th>
                        <th>Localidad</th>
                        <th>Últ. Cargo Terminado</th>
                        <th>Cant. de Registros</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @if($persona->fecha_nac)
                                @php
                                $fechaNacimiento = \Carbon\Carbon::parse($persona->fecha_nac);
                                $edad = $fechaNacimiento->diff(\Carbon\Carbon::now())->format('%y');
                                @endphp
                                <p>{{ $edad }} años</p>
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
                                {{ isset($persona->profesion) ? $persona->profesion : 'N/A' }}
                            </td>
                            <td>
                                {{ $persona->localidad->nombre }}
                            </td>
                            <td>
                                {{ $persona->cargo->count() > 0 ? 
                                    ($persona->cargo->where('fecha_final', '!=', null)->sortByDesc('fecha_final')->first()->tipoCargo->nombre . ' / ' . $persona->cargo->first()->nivel->nombre) 
                                    : 'Sin cargo Terminado' }} 

                            </td>
                            <td>
                                {{ isset($persona->registro) ? $persona->registro->count() : 0 }}

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="row container">
                <div class="col card-header">
                    <h6 class="title">Registros</h6>
                </div>
                <div class="col text-right">
                    <a type="button" class="btn btn-sm btn-primary" style="color: white !important"
                        href="{{ route('registros.create') }}">
                        Crear Registro
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th style="width: 20%">Título</th>
                        <th style="width: 10%">Fecha</th>
                        <th>Descripción</th>
                        <th style="width: 15%">Asociados</th>

                    </thead>
                    <tbody>
                        @foreach ($persona->registro as $registro)
                        <tr style="height: 10%">

                            <td style="width: 20%">
                                {{ $registro->titulo }}

                            </td>
                            <td style="width: 10%">
                                {{ isset($registro->fecha) ? $registro->fecha : '' }}
                            </td>
                            <td class="table_descripcion">
                                {{ $registro->descripcion }}
                            </td>
                            <td style="width: 15%">
                                @if($registro->asociado->isNotEmpty())
                                @php($count = 0)
                                @foreach ($registro->asociado as $asociado)
                                @if ($count > 1)
                                ...
                                @break
                                @endif
                                @php($count += 1)
                                <span class="badge text-bg-warning"
                                    style="padding: 5px; background-color:#1d8cf8">{{ $asociado->persona->nombre }}
                                    {{ $asociado->persona->apellido }}</span>
                                @endforeach
                                @else
                                Sin asociados
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/js/personas/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/personas/functions.js"></script>
@endpush