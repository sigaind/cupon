//FUNCION PARA ELIMINAR UNA LABOR TEMPORAL DE LA BASE DE DATOS
function borrarLaborTamporal(objetivo)
{
   $('#loading').show();
   var tr = $(objetivo).parents().parents();
   var id = tr.get(0).id;    
   var tabla=$('#tblLabores').get(0);
   if(confirm("Esta seguro en eliminar la labor con ID: "+ id+"?"))
   {
        $.post('eliminar',
        { codigo: id },
            function(datos) {
                for(i=0; i<tabla.rows.length; i++)
                    {
                            var row= tabla.rows[i]
                            if(id==row.id)
                            {
                                tabla.deleteRow(i);           
                            }
                    }
                    $('#loading').hide();
             }
        ); 
   }
   else
      $('#loading').hide(); 
}

function AprobarLabores()
{
  $('#loading').show();
  var select =$('#tblLabores input');
  var cant = select.length 
  for(i=select.length-1; i>=0; i--)
  {
      if($(select[i]).is(':checked'))
      {     
           var tabla=$('#tblLabores').get(0);
           $('#loading').show();
           var id= select[i].value;
            $.ajax({
                url: 'aprobar',
                type: 'POST',
                async: false,
                data: 'id='+id+"&posicion="+i,
                success: function(data) {                    
                    if((data>=0)&&(data< cant))
                         tabla.deleteRow(parseInt(data));
                     else if(data ==-15)
                     {
                        alert("La labor con ID: "+id+" No se pudo aprobar porque la orden esta cerrada");     
                     }
                     else if(data ==-5)
                     {
                        alert("La labor con ID: "+id+" No se pudo aprobar");     
                     }
                     else if(data ==-10)
                     {
                        alert("La labor con ID: "+id+" No se pudo aprobar porque supera la cantidad permitida en la orden");     
                     }
                },                
                error: function(objeto, error) {
                    alert("Error al intentar aprobar una labor: "+id);
                }
            });            
      }
  }    
  $('#loading').hide();
}