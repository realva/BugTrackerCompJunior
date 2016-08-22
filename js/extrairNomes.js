
function extrairNomes(select){
	$.getJSON("php/bdExtrairNomeProjeto.php", null, function(data) {
		$(select + " option").remove();
		$(select).append($("<option disabled selected value> Selecione o projeto </option>"));
		$.each(data, function(index, item) {
			$(select).append(
				$("<option></option>")
				.text(item.nome)
				.val(item.id)
			);
		});
	});
}