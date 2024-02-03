<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/dedos_V.png">
    <link href="{{ asset('black') }}/css/black-dashboard.css" rel="stylesheet" />
    <link href="{{ asset('black') }}/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Padrón</title>
</head>

<body>
    <div class="container mt-3">
        <div class="card">

            <div class="card-header">
                <div class="row mt-4">
                    <div class="col padron text-center">
                        <img src="{{ asset('assets') }}/img/dedos_V.png" alt="" style="width: 50px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="card-title text-center">ACCIÓN POLÍTICA </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h3 class="card-title">Lista de Afiliados</h3>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2 mt-2 container">
                        <span class="input-group-text" id="basic-addon1"><i class="las la-search"></i></span>
                        <input type="text" class="form-control" placeholder="Buscar Afiliados" aria-label="Username"
                            aria-describedby="basic-addon1" id="search-afiliado">
                    </div>
                    <div class="card-body table-desktop">
                        <table class="table" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>DNI</th>
                                    <th>Género</th>
                                    <th>Apellido y Nombre</th>
                                    <th>Domicilio</th>
                                    <th>Sección</th>
                                    <th>Circuito</th>
                                </tr>
                            </thead>
                            <tbody id="tablaAfiliados">
                                @include('afiliados.table-desktop')
                            </tbody>
                        </table>


                    </div>
                    <div class="tablaAfiliadosMovil" id="tablaAfiliadosMovil">
                        @include('afiliados.table-movil')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('black') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('black') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/afiliados/getEvents.js"></script>
</body>

</html>