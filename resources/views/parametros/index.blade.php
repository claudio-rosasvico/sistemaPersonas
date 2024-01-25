@extends('layouts.app', ['page' => __('Lista de Parámetros'),'pageSlug' => 'Lista de Parámetros'])

@section('content')
<div class="row container">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">


                    <div class="col-12 col-lg-6 text-left">
                        <h3 class="card-title">
                            {{ __('Parámetros') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  --}}
<div class="container sinpadding">
    <ul class="nav nav-tabs responsive" id="myTab" role="tablist">
        <li name="Monday">
            <a class="nav-link" data-toggle="tab" href="#resp-tab0" id="Monday" role="tab">Registros</a>
        </li>
        <li name="Tuesday">
            <a class="nav-link" data-toggle="tab" href="#resp-tab1" id="profile-tab" role="tab">Vinculos</a>
        </li>
        <li name="Wednesday">
            <a class="nav-link " data-toggle="tab" href="#resp-tab2" id="config-tab" role="tab">Cargos</a>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">
        <div aria-labelledby="lunes-tab" class="tab-pane fade" id="resp-tab0" role="tabpanel">
            <div class="container sinpadding">
                <div class="row">
                    <div class="col-sm">
                        <!---EMPIEZACARD-->

                        <br />
                        <div class="col-12 col-lg-3 text-center">
                            <h6>Categoría de Registros</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Cant.</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorias as $categoria)
                                        <tr class="">
                                            <td>{{ $categoria->nombre }}</td>
                                            <td>{{ $categoria->registro->count() }}</td>
                                            <td>X</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!---TERMINACARD-->


                    </div>
                </div>
            </div>
        </div>
        <div aria-labelledby="martes-tab" class="tab-pane fade" id="resp-tab1" role="tabpanel">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <!---EMPIEZACARD-->

                        <br />
                        <div class="col-12 col-lg-3 text-center">
                            <h6>Tipos de Vínculos</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Cant.</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tiposVinculo as $tipoVinculo)
                                        <tr class="">
                                            <td>{{ $tipoVinculo->nombre }}</td>
                                            <td>{{ $tipoVinculo->vinculo->count() }}</td>
                                            <td>X</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!---TERMINACARD-->


                    </div>
                </div>
            </div>
        </div>
        <div aria-labelledby="miércoles-tab" class="tab-pane fade" id="resp-tab2" role="tabpanel">
            <div class="container sinpadding">
                <div class="row">
                    <div class="col-sm">
                        <!---EMPIEZACARD-->

                        <br />
                        <div class="row container">

                            <div class="col-12 col-lg-5 text-center">
                                <h6>Nivel de Cargo</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cant.</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nivelesCargo as $nivel)
                                            <tr class="">
                                                <td>{{ $nivel->nombre }}</td>
                                                <td>{{ $nivel->cargo->count() > 0 ? $nivel->cargo->count() : 0}}</td>
                                                <td>X</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-12 col-lg-5 text-center">
                                <h6>Tipos de Cargos</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Cant.</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tiposCargo as $tipoCargo)
                                            <tr class="">
                                                <td>{{ $tipoCargo->nombre }}</td>
                                                <td>{{ $tipoCargo->cargo->count() }}</td>
                                                <td>X</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!---TERMINACARD-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script src="{{ asset('assets') }}/js/parametros/getEvents.js"></script>
<script src="{{ asset('assets') }}/js/parametros/functions.js"></script>
@endpush