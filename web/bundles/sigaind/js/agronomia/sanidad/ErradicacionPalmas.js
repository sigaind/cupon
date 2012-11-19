//FUNCION DEL INICIO
function inicio()
{       
    $( "#f1C" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f2C" ).datepicker( "option", "minDate", selectedDate );
            }
        });
    $( "#f2C" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f1C" ).datepicker( "option", "maxDate", selectedDate );
            }
    });
    $( "#f1N" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1            
    });
           
    $( "#loteC" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/lotes",
        select: function( event, ui ) {
                 $( "#loteC" ).get(0).name= ui.item.id ;
            }
    });       
    
    $( "#loteN" ).autocomplete({
        minLength: 2,
        source: "../../autocomplete/lotes",
        select: function( event, ui ) {
                 $( "#loteN" ).get(0).name= ui.item.id ;
            }
    }); 
        
}


//FUNCION PARA ACTIVAR LA CONSULTA
function Consultar()
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
function consultarErradicaciones()
{
    var lotId = $('#loteC').get(0).name;
    var f1 = $('#f1C').get(0).value;
    var f2 = $('#f2C').get(0).value;        
    
    $('#botones').hide();
    $('#formulario').hide();    
    $('#consulta').hide();
    $('#loading').slideDown();         

    if((f1!="") && (f2=="") || (f1=="") && (f2!=""))
        alert("Debe seleccionar fecha inicial y final de consulta");
    else
    {
        var cadena = "Consulta?lotId="+lotId+"&f1="+f1+"&f2="+f2;
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
                $('#demotable1').tableFilter();
            }

        });                 
    }
}

//-----------------------------------------------
//FUNCIONES PARA GUARDAR LAS ORDENES-------------
//-----------------------------------------------
function NuevaErradicacion()
{
    $('#botones').hide();
    $('#consulta').hide();
    $('#formulario').slideDown();
    $('#laborN').focus();
    
}

function CancelarNuevaErradicacion()
{
    $('#formulario').hide();
    $('#consulta').hide();
    $('#botones').slideDown();
    
}

function GuardarEradicacion()
{
    $('#loading').slideDown();
    
    var lote = $('#loteN').get(0).name;
    var linea = $('#linea').get(0).value;
    var palma = $('#palma').get(0).value;
    var f1 = $('#f1N').get(0).value;
    var causa = $('#causa').get(0).value;
    if((lote=="") || (linea=="") || (palma=="") || (f1=="") || (causa<1))
    {
         alert("Todos los campos son abligatorios");
         $('#loading').hide();
    }
    else
    {    
        $.ajax({
            url: 'insert',
            type: 'POST',
            async: false,
            data: 'lotId='+lote+'&linea='+linea+'&palma='+palma+'&f1='+f1+'&causa='+causa,
            success: respuestaInsert,
            error: muestraError
        });
     }
}

function respuestaInsert(data)
{
    if(data==-1)
    {
        alert("Ya existe un registro para esta misma palma");
        $('#loading').hide();
    }
    else if(data > 0)
    {
       alert("Se inserto la erradicacion con exito");
       
       $('#linea').get(0).value="";
       $('#palma').get(0).value="";
       $('#f1N').get(0).value="";
       
       $('#linea').focus();
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

