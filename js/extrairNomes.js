$.getJSON("php/bdExtrairNomeProjeto.php", null, function(data) {
	$("#errorProject option").remove();
	$("#errorProject").append($("<option disabled selected value> Selecione o projeto </option>"));
	$.each(data, function(index, item) {
		$("#errorProject").append(
			$("<option></option>")
			.text(item.nome)
			.val(item.id)
		);
	});
});