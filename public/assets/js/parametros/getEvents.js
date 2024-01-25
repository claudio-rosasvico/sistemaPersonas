$(document).ready(function () {

    $('button').click(function (e) { 
        e.preventDefault();
        let variable = $(this).data('id');
        let valor = $.trim($('#' + variable).val());
        let name = $('#' + variable).attr('name');
        if(!valor){
            toastr.error('Para cargar ' + name + ' debe colocar un nombre', '¡Falta Nombre!')
        } else {
            cargarParametro(variable, valor);
        }
        
    });

});