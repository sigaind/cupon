//FUNCION DEL INICIO
function inicio()
{       
    $( "#f1G" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f2G" ).datepicker( "option", "minDate", selectedDate );
            }
        });
    $( "#f2G" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f1G" ).datepicker( "option", "maxDate", selectedDate );
            }
    });
    $( "#fechaCreacion" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1            
    });
    
    $( "#labor" ).autocomplete({
        minLength: 2,        
        source: "../../autocomplete/labores",
        select: function( event, ui ) {
                 $( "#labor" ).get(0).name= ui.item.id ;
            }
    });
    
    $( "#lote" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/lotes",
        select: function( event, ui ) {
                 $( "#lote" ).get(0).name= ui.item.id ;
            }
    });
    
    $( "#laborG" ).autocomplete({
        minLength: 2,        
        source: "../../autocomplete/labores",
        select: function( event, ui ) {
                 $( "#laborG" ).get(0).name= ui.item.id ;
            }
    });
    
    $( "#loteG" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/lotes",
        select: function( event, ui ) {
                 $( "#loteG" ).get(0).name= ui.item.id ;
            }
    });
    
    $( "#supervisor" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/trabajadores",
        select: function( event, ui ) {
                 $( "#supervisor" ).get(0).name= ui.item.id ;
            }
    });
}


//FUNCION PARA ACTIVAR LA CONSULTA
function Consulta()
{
    $('#botones').hide();
    $('#formulario').hide();
    $('#consulta').slideDown();
    
}

//FUNCION PARA CANCELAR LA CONSULTA
function CancelarConsulta()
{
    $('#consulta').hide();
    $('#botones').slideDown();
    
}

//FUNCION PARA CANCELAR LA CONSULTA
function CancelarConsultaLista()
{
    $('#divTabla').hide();
    $('#loading').hide();
    $('#divDetalle').hide();
    $('#consulta').slideDown();
    
}

//FUNCION PARA CONSULTAR LABORES REPORTADAS
function consultarOrdenes()
{
    var oreId = $('#ordenId').get(0).value;
    var lote = $('#lote').get(0).name;
    var labor = $('#labor').get(0).name;
    var fCreacion = $('#fechaCreacion').get(0).value;    
    var estado = $('#estado').get(0).value;
    
    $('#botones').hide();
    $('#formulario').hide();    
    $('#consulta').hide();
    $('#loading').slideDown();         

    var cadena = "ConsultaLista?lote="+lote+"&labor="+labor+"&estado="+estado+"&id="+oreId+"&fCreacion="+fCreacion;
    $('#info').load(cadena, function(response, status, xhr) {
        if (status == "error") {
            alert("Se presento un inconveniente en la consulta: \nError: "+ xhr.status+"\n"+xhr.statusText);
            $('#divTabla').hide();
            $('#loading').hide();
            $('#consulta').slideDown();
        }
        else
        {
            $('#divTabla').slideDown();
            $('#loading').hide();
            $('#botones').hide();
            $('#consulta').hide();
        }

    });                 
    
}


function detalleOrden(oreId)
{
    $('#loading').slideDown();
    $('#divTabla').hide();
    
    $('#oreDetalle').load('DetalleOrden?oreId='+oreId, function(response, status, xhr) {
        if (status == "error") {
            alert("Se presento un inconveniente al consultar el detalle de la orden: \nError: "+ xhr.status+"\n"+xhr.statusText);
            $('#divTabla').slideDown();
            $('#loading').hide();
        }
        else
        {
            $('#divTabla').hide();
            $('#loading').hide();
            $('#divDetalle').slideDown();
            
        }

    });
}

//-----------------------------------------------
//FUNCIONES PARA GUARDAR LAS ORDENES-------------
//-----------------------------------------------
function NuevaOrden()
{
    $('#botones').hide();
    $('#consulta').hide();
    $('#formulario').slideDown();
    $('#laborG').focus();
    
}

function CancelarNuevaOrden()
{
    $('#formulario').hide();
    $('#consulta').hide();
    $('#botones').slideDown();
    
}

function GuardarOrdenes()
{
    $('#loading').slideDown();
    
    var lote = $('#loteG').get(0).name;
    var labor = $('#laborG').get(0).name;
    var f1 = $('#f1G').get(0).value;
    var f2 = $('#f2G').get(0).value;
    var sup = $('#supervisor').get(0).name;
    
    if((f1=="") || (f2=="") || (labor=="") || (lote=="") || (sup==""))
    {
         alert("Todos los campos son abligatorios");
    }
    else
    {    
        $.ajax({
            url: 'insert',
            type: 'POST',
            async: false,
            data: 'lote='+lote+'&labor='+labor+'&f1='+f1+'&f2='+f2+'&sup='+sup,
            success: respuestaInsert,
            error: muestraError
        });
     }
}

function respuestaInsert(data)
{
    if(data==-1)
    {
        alert("Existe una orden abierta para la labor y lote digitados");
        $('#loading').hide();
    }
    else if(data > 0)
    {
       alert("Se inserto la orden con exito");
       $('#loteG').get(0).name="";
       $('#loteG').get(0).value="";
       $('#f1G').get(0).value="";
       $('#f2G').get(0).value="";
       $('#supervisor').get(0).name="";
       $('#supervisor').get(0).value="";
       
       $('#loteG').focus();
       $('#loading').hide(); 
    }
    
}

function muestraError(xhr, status, obj)
{
    if (status == "error") {
        alert("Se presento un inconveniente en la insercion: \nError: "+ xhr.status+"\n"+xhr.statusText);
        $('#loading').hide();
    }
    else
    {
        $('#loading').hide();                     
    }
}

function CerrarOrden(oreId)
{
    $('#loading').slideDown();
    $.ajax({
            url: 'cerrarOrden',
            type: 'POST',
            async: false,
            data: 'id='+oreId,
            success: respuestaCerrarOrden,
            error: ErrorCerrarOrden
        });
}

function respuestaCerrarOrden(data)
{
    if(data>0)
    {
       $('#estadoP').get(0).innerHTML="Estado: Cerrada";
       $('#imagenCerrar').get(0).innerHTML="";
       $('#loading').hide();
       alert("Se cerro la orden correctamente");
    }
    else
    {
        alert("Error al cerrar la orden");
        $('#loading').hide();
    }
       
}

function ErrorCerrarOrden(xhr, status, obj)
{
    if (status == "error") {
        alert("Se presento un error al intentar cerrar la orden: \nError: "+ xhr.status+"\n"+xhr.statusText);
        $('#loading').hide();
    }
    else
    {
        $('#loading').hide();                     
    }
}