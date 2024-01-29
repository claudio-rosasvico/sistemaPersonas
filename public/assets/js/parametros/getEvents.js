$(document).ready(function () {

    $('.parametro').click(function (e) {
        e.preventDefault();
        let variable = $(this).data('id');
        let valor = $.trim($('#' + variable).val());
        let name = $('#' + variable).attr('name');
        if (!valor) {
            toastr.error('Para cargar ' + name + ' debe colocar un nombre', '¡Falta Nombre!')
        } else {
            cargarParametro(variable, valor);
        }

    });

    $('#cargar_vinculo').click(function (e) {
        e.preventDefault();
        cargarVinculo();
    });

    $('#cargar_cargo').click(function (e) {
        e.preventDefault();
        cargarCargo();
    });


    $('#cargo_actual').change(function () {
        
        if ($(this).is(':checked')) {
            
            $('#fecha_final').prop('disabled', true);
        } else {
            
            $('#fecha_final').prop('disabled', false);
        }
    });

});