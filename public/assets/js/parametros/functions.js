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