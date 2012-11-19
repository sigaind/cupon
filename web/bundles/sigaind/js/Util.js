function Combo(idLista, rutaCombo)
{
	var lista = document.getElementById(idLista);
	   $.get(rutaCombo,
            function(datos) {
		    var opciones = eval(datos);
	            lista.options[0] = new Option("- Selecciona -", 0);
                    for(i=1; i<= opciones.length; i++) {
                        lista.options[i] = new Option(opciones[i-1].name, opciones[i-1].id);
                    } 
         });
}

function ComboDependiente(idLista, rutaCombo, datoInicial, idInicial)
{
	var pos=1;
	var lista = document.getElementById(idLista);
	   $.get(rutaCombo,
            function(datos) {
			    var opciones = eval(datos);
				if(datoInicial=="")
				   lista.options[0] = new Option("-Selecciona-", 0);
				else   
				    lista.options[0] = new Option(datoInicial, idInicial);
					
                 for(i=1; i<= opciones.length; i++) {
					 if(opciones[i-1].id != idInicial)
					 {
                         lista.options[pos] = new Option(opciones[i-1].name, opciones[i-1].id);
						 pos++;
					 }
                  } 
         });
}