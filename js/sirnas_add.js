// add a new siRNA entry with an Ajax call
$('#submitNewSirna').click(function() {

	// prepare data to be sent via ajax
	var name = $("#name").val();
	var target_gene = $("#target_gene").val();
	var target_region = $("#target_region").val();
	var target_seq = $("#target_seq").val();
	var sirna_seq = $("#sirna_seq").val();
	var additional_info = $("#additional_info").val();

	//  ajaxa call only if required fields is not null or empty
	if(name && target_gene && target_seq && sirna_seq) {
		// ajax call
		$.ajax({
			type: "POST",
			url: "/sirnas/p_add",
			data: {name: name,
					target_gene: target_gene,
					target_region: target_region,
					target_seq: target_seq,
					sirna_seq: sirna_seq,
					additional_info: additional_info
				},
			success: function(response) {
				$("#results").html(response);
				$("#results").fadeOut(7000);
				$(":input").val("");
			}
		});		
	} else {
		$("#results").html("Please fill in required fields.");
	}

});