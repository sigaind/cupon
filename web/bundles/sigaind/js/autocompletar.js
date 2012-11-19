// JavaScript Document
function format(datos) {
		return datos.name + " &lt;" + datos.id + "&gt";
	}

function autocompleta(campo, ruta){
		$("#"+campo).autocomplete(ruta, {
			multiple: true,
			dataType: "json",
			parse: function(data) {
				return $.map(data, function(row) {
					return {
						data: row,
						value: row.name,
						result: row.name + " <" + row.id + ">"
					}
				});
			},
			formatItem: function(item) {
				return format(item);
			}
		}).result(function(e, item) {
			$("#content").append("<p>selected " + format(item) + "</p>");
		});

}