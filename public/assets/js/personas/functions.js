function getLocalidades(id_provincia) {

    $.ajax({
        type: "GET",
        url: "/productos/getLocalidades/" + id_provincia,
        success: function (response) {
            $('#id_localidad').empty();
            $('#id_localidad').append(
                "<option value=''> - Seleccione Localidad - </option>"
            );
            response.forEach(element => {
                $('#id_localidad').append(
                    "<option value='" + element.id + "'>" + element.nombre + "</option>"
                );
            })
        }
    });

}

function cargarPersona(){

    let FormPersona = new FormData;
    let form_control = $('.form-control');
    form_control = form_control.toArray();
    form_control.forEach(element => {
        let variable = $(element).attr('name');
        let valor = $(element).val();
        FormPersona.append(variable, valor);
    });
    let foto = $('#foto')[0].files[0];
    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    FormPersona.append('foto', foto);
    FormPersona.append('_token', CSRF_TOKEN);
    
    $.ajax({
        type: "POST",
        url: "/personas/store",
        data: FormPersona,
        processData: false, 
        contentType: false,
        success: function (response) {
            console.log(response);
            console.log('id_perona: ' + response.id_persona);
            if(response.id_persona){
                window.location.href = ('../' + response.id_persona );
            } else {
                window.location.href = ( response.persona.id);
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

function consultaPersonas() {
    
    search = $('#search-persona').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "/personas/table",
            data: {
                search: search,
                '_token': CSRF_TOKEN
            },
            success: function (response) {
                if (response) {
                    $('#tablaPersonas').html(response.desktop);
                    $('#tablaPersonasMovil').html(response.movil);
                } else {
                    $('#tablaPersonas').empty();
                    $('#tablaPersonas').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
                    $('#tablaPersonasMovil').empty();
                    $('#tablaPersonasMovil').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
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