$(document).ready(function () {
    
    $('#search-afiliado').keyup(function (e) {
        consultaAfiliados();

    });

});

function consultaAfiliados() {
    
    search = $('#search-afiliado').val();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "/afiliados/table",
            data: {
                search: search,
                '_token': CSRF_TOKEN
            },
            success: function (response) {
                if (response) {
                    $('#tablaAfiliados').html(response.desktop);
                    $('#tablaAfiliadosMovil').html(response.movil);
                } else {
                    $('#tablaAfiliados').empty();
                    $('#tablaAfiliados').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
                    $('#tablaAfiliadosMovil').empty();
                    $('#tablaAfiliadosMovil').append("<h4 style='text-align: center; margin-top: 5px'>No existen personas con ese nombre</h4>");
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