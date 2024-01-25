var lista_asociados = [];
function getPersona(id_persona) {
    $.ajax({
        type: "GET",
        url: "/../personas/getPersona/" + id_persona,
        success: function (response) {
            $('.lista_asociados').append(
                '<button type="" data-id="' + response.id + '" id="asociado' + response.id + '" class="btn-outline eliminar_asociado">' + response.nombre + ' ' + response.apellido + '</button>'
            );
            lista_asociados.push(response.id);
            console.log(lista_asociados);
        }
    });
}

function cargarRegistro(){

    let FormRegistro = new FormData;
    let form_control = $('.registro');
    form_control = form_control.toArray();
    form_control.forEach(element => {
        let variable = $(element).attr('name');
        let valor = $(element).val();
        if(variable != 'asociados'){
            FormRegistro.append(variable, valor);
            console.log(variable, valor);
        }
    });
    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    FormRegistro.append('_token', CSRF_TOKEN);
    
    $.ajax({
        type: "POST",
        url: "/registros/store",
        data: FormRegistro,
        processData: false, 
        contentType: false,
        success: function (response) {
            console.log(response);
            if (lista_asociados.length > 0) {
                cargaAsociados(response.id);
            } else {
                window.location.href = '/registros';
            }
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

function cargaAsociados(id_registro){

    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type: "POST",
        url: "/asociados/listCreate",
        data: {
            'lista_asociados': lista_asociados,
            'id_registro': id_registro,
            '_token': CSRF_TOKEN
        },
        success: function (response) {
            window.location.href = '/registros';
        }
    });
    
}

function consultaRegistros() {
    
    search = $('#search-registro').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "/registros/table",
            data: {
                search: search,
                '_token': CSRF_TOKEN
            },
            success: function (response) {
                if (response) {
                    $('#tablaRegistros').html(response.desktop);
                    $('#tableRegistrosMovil').html(response.movil);
                } else {
                    $('#tablaRegistros').empty();
                    $('#tablaRegistros').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
                    $('#tableRegistrosMovil').empty();
                    $('#tableRegistrosMovil').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
                }

            }, error: function (response) {
                console.log('Error al intentar crearla');
                console.log(response);
                errores = response.responseJSON.errors;
                for (var key in errores) {
                    if (errores.hasOwnProperty(key)) {
                        showToast(errores[key], 'error');

                    }
                }
            }
        });
}