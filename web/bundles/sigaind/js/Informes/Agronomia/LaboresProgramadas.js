//FUNCION DEL INICIO
function inicio()
{
   $( "#f1" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f2" ).datepicker( "option", "minDate", selectedDate );
            }
        });
    $( "#f2" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            numberOfMonths: 1,
            onClose: function( selectedDate ) {
                $( "#f1" ).datepicker( "option", "maxDate", selectedDate );
            }
    });   
}

//FUNCION PARA CONSULTAR LABORES REPORTADAS
function consultarProgramacion()
{
    if(($('#f1').get(0).value=="") || ($('#f1').get(0).value==""))
     {
         alert("Por favor ingrese las fechas");
     }
    else
     {
         $('#botonConsulta').hide();
         $('#consulta').hide();
         $('#loading').slideDown();         
         
         var f1=$('#f1').get(0).value;
         var f2=$('#f2').get(0).value;
         /*$('#info').load('Consulta?f1='+f1+"&f2="+f2, function(response, status, xhr) {
             if (status == "error") {
                 alert("Se presento un inconveniente en la consulta: \nError: "+ xhr.status+"\n"+xhr.statusText);
                 $('#divTabla').hide();
                 $('#botonTabla').hide();
                 $('#loading').hide();
                 $('#botonConsulta').slideDown();
                 $('#consulta').slideDown();
             }
             else
             {
                 $('#divTabla').slideDown();
                 $('#botonTabla').slideDown();
                 $('#loading').hide();                     
             }
             
         });*/
        
        $('#divTabla').slideDown();
        activarGraficaGant();
        $('#loading').hide();
                 
     }
    
}

function activarGraficaGant()
{
    var chart = new FusionCharts("../../../bundles/sigaind/FusionChartsFree/Charts/FCF_Gantt.swf", "ChartId", "950", "450");
    chart.setDataURL("../../../bundles/sigaind/FusionChartsFree/Gallery/Data/Gantt.xml");		   
    chart.render("chartdiv");
}

//FUNCION PARA CANCELAR CONSULTA
function cancelarTablaLabores()
{
    $('#divTabla').hide();
    $('#botonTabla').hide();
    $('#loading').hide();
    $('#botonConsulta').slideDown();
    $('#consulta').slideDown();
    
}


//BORRAR LABOR
function borrarLabor(objetivo)
{
   $('#loading').show();
   var tr = $(objetivo).parents().parents();
   var id = tr.get(0).id;    
   var tabla=$('#tblLabores').get(0);
   if(confirm("Esta seguro en eliminar la labor con ID: "+ id+"?"))
   {
        $.ajax({
            url: 'Eliminar',
            type: 'POST',
            async: true,
            data: 'id='+id,
            success: function(datos) {
                        if(datos>0)
                        {
                            for(i=0; i<tabla.rows.length; i++)
                            {                            
                                var row= tabla.rows[i]
                                if(id==row.id)
                                {
                                    tabla.deleteRow(i);           
                                }
                            }
                            alert("Se elimino con exito la labor con ID: "+datos);
                            $('#loading').hide();     
                        }
                        else
                        {
                           alert("No se pudo eliminar la labor ya que se encuentra exportada");
                           $('#loading').hide();
                        }
                   },
            error: function(xhr, status, response) {
                        alert("Se presento un inconveniente al eliminar la labor: \nError: "+ xhr.status+"\n"+xhr.statusText);
                        $('#loading').hide();
                    }
        });
   }
   else
      $('#loading').hide(); 
}

function exportarExcel()
{
    var f1=$('#f1').get(0).value;
    var f2=$('#f2').get(0).value;
    
    var obj_window = window.open(
		'ExportarExcel?f1='+f1+'&f2='+f2,
		'Calendar', 'width=40,height=30,scrollbars=yes,status=no,resizable=yes,top=10,left=10,dependent=no,alwaysRaised=yes');
    obj_window.opener = window;
    obj_window.focus();
}

function exportarPDF()
{
    var f1=$('#f1').get(0).value;
    var f2=$('#f2').get(0).value;
    
    var obj_window = window.open(
		'ExportarPdf?f1='+f1+'&f2='+f2,
		'Calendar', 'width=40,height=30,scrollbars=yes,status=no,resizable=yes,top=10,left=10,dependent=no,alwaysRaised=yes');
    obj_window.opener = window;
    obj_window.focus();
}