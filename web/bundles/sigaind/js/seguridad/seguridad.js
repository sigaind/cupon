//FUNCION DEL INICIO
function inicio()
{            
    $( "#traid" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/trabajadoresdos",
        select: function( event, ui ) {
                 $( "#traid" ).get(0).name= ui.item.id ;
            }
    });
}


function guardarUsuario()
{
    $('#loading').slideDown();
    
    var usuario = $('#usuario').get(0).value;
    var clave = $('#clave').get(0).value;
    var traid = $('#traid').get(0).name;
    var grupo = $('#grupo').get(0).value;
    var estado = $('#estado').get(0).value;    
     
    $.ajax({
        url: 'insert',
        type: 'POST',
        async: false,
        data: 'usu='+usuario+'&clave='+clave+'&traid='+traid+'&grupo='+grupo+'&estado='+estado,
        success: respuestaInsert,
        error: muestraError
    });
}

function respuestaInsert(datos)
{
    $('#loading').hide();
}

function muestraError(datos)
{
    
}

