$(document).ready(function () {
    id_persona = $('#id_persona').val();
    console.log(id_persona);
    if(!id_persona){
        getLocalidades(9);
    }
    
    var descripciones = $('.table_descripcion');
    descripciones = descripciones.toArray();

    descripciones.forEach(descripcion => {
        texto = $(descripcion).text();
        if (texto.length > 100) {
            texto_cortado = texto.substring(0, 200);
            $(descripcion).text(texto_cortado + '...');
            console.log('corte texto');
        }
        
    });

    $('#id_provincia').change(function (e) {
        e.preventDefault();
        let id_provincia = $('#id_provincia').val();
        getLocalidades(id_provincia);
    });

    $('#enviar').click(function (e) {
        e.preventDefault();
        cargarPersona();
    });

    
    $('#foto').on('change', function () {

        var nombreImagen = $(this).val().split('\\').pop();
        $('.choose-file-button').text(nombreImagen);
        $('.choose-file-button').css('background-color', '#1d8cf8');
        $('.choose-file-button').css('color', 'white');
        $('#file-message').addClass('d-none');
    });

    $('#search-persona').keyup(function (e) {
        consultaPersonas();

    });

});