@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">

                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-4    ">
                                <div class="card" style="background-color: #212529">
                                    <div class="card-header">{{ __('Accesos') }}</div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">

                                                <a href="{{ route('registros.create')}}"><i class="las la-folder-plus"
                                                        style="font-size: 40px"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('registros.index')}}"><i class="las la-search"
                                                        style="font-size: 40px"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6 style="display: inline-block">Crear Registro</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="display: inline-block">Buscar Registro</h6>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <a href="{{ route('personas.create')}}"><i class="las la-user-plus"
                                                        style="font-size: 40px"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('personas.index')}}"><i class="las la-users"
                                                        style="font-size: 40px"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6 style="display: inline-block">Crear Persona</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="display: inline-block">Buscar Persona</h6>
                                            </div>
                                        </div>

                                        {{session('status')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Shipments</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>--}}
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
<script>
    $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
</script>
@endpush