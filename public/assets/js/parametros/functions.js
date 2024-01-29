function cargarParametro(variable, valor){

    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: "POST",
        url: "store",
        data: {
            'variable': variable,
            'valor': valor,
            '_token': CSRF_TOKEN
        },
        success: function (response) {
            toastr.success('Parámetro ' + response.nombre + ' creado exitosamente', '¡Felicitaciones')
            $('#'+variable).val('');
        }
    });
}

function cargarVinculo(){

    let FormVinculo = new FormData;
    let form_control = $('.form-control');
    form_control = form_control.toArray();
    form_control.forEach(element => {
        let variable = $(element).attr('name');
        let valor = $(element).val();
        FormVinculo.append(variable, valor);
    });
    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    FormVinculo.append('_token', CSRF_TOKEN);

    $.ajax({
        type: "POST",
        url: "/parametros/vinculos/store",
        data: FormVinculo,
        processData: false, 
        contentType: false,
        success: function (response) {
            console.log(response);
            $('#tabla_vinculos').html(response);
        }, error: function (response) {
            console.log('Error al intentar crearla');
            console.log(response);
            errores = response.responseJSON.errors;
                for (var key in errores) {
                    if (errores.hasOwnProperty(key)) {
                        toastr.error(errores[key]);
                    }
                }
        }
    });
}

function cargarCargo(){

    let FormCargo = new FormData;
    let form_cargos = $('.cargo');
    form_cargos = form_cargos.toArray();
    form_cargos.forEach(element => {
        let variable = $(element).attr('name');
        let valor = $(element).val();
        FormCargo.append(variable, valor);
        console.log(variable + ': ' + valor);
    });
    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    FormCargo.append('_token', CSRF_TOKEN);

    $.ajax({
        type: "POST",
        url: "/parametros/cargos/store",
        data: FormCargo,
        processData: false, 
        contentType: false,
        success: function (response) {
            console.log(response);
            console.log('Success store');
            $('#tabla_cargos').html(response);
        }, error: function (response) {
            console.log('Error al intentar crearla');
            console.log(response);
            errores = response.responseJSON.errors;
                for (var key in errores) {
                    if (errores.hasOwnProperty(key)) {
                        toastr.error(errores[key]);
                    }
                }
        }
    });
}