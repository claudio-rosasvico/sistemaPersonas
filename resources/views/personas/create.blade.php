@extends('layouts.app', ['page' => __('Crear Persona'),'pageSlug' => 'Crear Persona'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">
                            {{ isset($persona) ? 'Editar Persona'  : 'Crear Persona' }}
                        </h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a type="button" class="btn btn-sm btn-primary" href="{{ route('personas.index') }}">
                            Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group container">
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" class="form-control" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="id" id="id_persona" class="form-control registro" value="{{ isset($persona) ? $persona->id : ''}}">
                        <div class="row">
                            <div class="col-12 col-lg-4 ">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control required" name="nombre" id="nombre"
                                    aria-describedby="helpId" placeholder="Nombre" value="{{ isset($persona) ? $persona->nombre : null }}" />
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="" class="form-label">Apellido</label>
                                <input type="text" class="form-control required" name="apellido" id="apellido"
                                    aria-describedby="helpId" placeholder="Apellido" value="{{ isset($persona) ? $persona->apellido : null }}"/>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac"
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4 ">
                                <label for="profesion" class="form-label">Profesion</label>
                                <input type="text" class="form-control" name="profesion" id="profesion"
                                    aria-describedby="helpId" placeholder="Profesion" value="{{ isset($persona->profesion) ? $persona->profesion : null }}"/>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="id_provincia">Provincia</label>
                                <select id="id_provincia" class="form-control" name="id_provincia">
                                    @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id }}" {{ isset($persona->id_localidad) && $persona->localidad->id_provincia == $provincia->id ? $provincia->nombre : ($provincia->id == 9 ? 'selected' : '') }}>
                                        {{ $provincia->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <label for="id_localidad">Localidad</label>
                                <select id="id_localidad" class="form-control required" name="id_localidad"
                                    placeholder='Localidad'>
                                    <option value="{{ isset($persona) ? $persona->id_localidad : '' }}">{{ isset($persona) ? $persona->localidad->nombre : ' - Primero seleccione Provincia - ' }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 ">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter"
                                    aria-describedby="helpId" placeholder="Twitter" value="{{ isset($persona->twitter) ? $persona->twitter : null }}"/>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook"
                                    aria-describedby="helpId" placeholder="Facebook" value="{{ isset($persona->facebook) ? $persona->facebook : null }}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 ">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram"
                                    aria-describedby="helpId" placeholder="Instagram" value="{{ isset($persona->instagram) ? $persona->instagram : null }}"/>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <label for="tiktok" class="form-label">Tiktok</label>
                                <input type="text" class="form-control" name="tiktok" id="tiktok"
                                    aria-describedby="helpId" placeholder="Tiktok" value="{{ isset($persona->tiktok) ? $persona->tiktok : null }}"/>
                            </div>
                        </div>

                        <div>
                            <h4 class="mt-2">Cargo Actual</h4>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <label for="id_tipo_cargo">Cargo</label>
                                <select id="id_tipo_cargo" class="form-control" name="id_tipo_cargo">
                                    <option> - Seleccione Cargo - </option>
                                    @foreach ($cargos as $cargo)
                                    <option value="{{ $cargo->id }} "> {{ $cargo->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="nombreCargo" class="form-label">Nombre del Cargo</label>
                                <input type="text" class="form-control" name="nombreCargo" id="nombreCargo"
                                    aria-describedby="helpId" placeholder="Nombre del cargo" />
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="id_nivel">Nivel</label>
                                <select id="id_nivel" class="form-control" name="id_nivel">
                                    <option> - Seleccione Nivel - </option>
                                    @foreach ($nivelesCargo as $nivel)
                                    <option value="{{ $nivel->id }}" > {{ $nivel->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-3">
                                <label for="localidadCargo">Localidad</label>
                                <select id="localidadCargo" class="form-control" name="localidadCargo">
                                    <option value="{{ isset($persona) ? $persona->id_localidad : '' }}">{{ isset($persona) ? $persona->localidad->nombre : ' - Seleccione Localidad - ' }}</option>
                                    @foreach ($localidades as $localidad)
                                    @if ($localidad->id_provincia == 9)
                                    <option value="{{ $localidad->id }}"> {{ $localidad->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container">
                                <div class="form-group col-12">
                                    <div class="file-drop-area card mt-2 ml-2 mr-2">
                                        <span class="choose-file-button">{{ isset($persona->nombre_foto) ? 'Cambiar Foto' : 'Seleccionar foto' }}</span>
                                        <span class="file-message mt-2" id="file-message">o arrastre foto aquí</span>
                                        <div id="file_loaded" class="file-message"></div>
                                        <input type="file" name='foto' id="foto" class="file-input"
                                            placeholder="Seleccione el archivo">
                                    </div>
                                </div>
                                <div class="col-12 text-center" >
                                    <p style="color: white !important">O coloque una URL de la imagen</p>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <label for="" class="form-label">URL imagen</label>
                                        <input type="text" class="form-control" name="url_img" id="url_img"
                                            aria-describedby="helpId" placeholder="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-sm btn-primary" id="enviar">
                                {{ isset($persona) ? 'Actualizar Persona' : 'Cargar Persona' }}
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
<script src="{{ asset('assets') }}/js/personas/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/personas/functions.js"></script>
@endpush