$(document).ready(function () {

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
    
    $('#asociados').change(function (e) { 
        e.preventDefault();
        id_persona = $(this).val();
        getPersona(id_persona);
    });

    
    $('.lista_asociados').on('click', '.eliminar_asociado', function (e) { 
        e.preventDefault();
        id_asociado = $(this).data('id');
        console.log('id_asociado: ' + id_asociado);
        let indice = lista_asociados.indexOf(id_asociado);
        console.log('indice: ' + indice);
        lista_asociados.splice(indice, 1);
        $(this).addClass('d-none');  
        console.log(lista_asociados);
    });

    $('#enviar').click(function (e) { 
        e.preventDefault();
        cargarRegistro();
    });

    $('#search-registro').keyup(function (e) {
        consultaRegistros();

    });
});


