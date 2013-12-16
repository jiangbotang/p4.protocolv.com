// add a new primer entry with an Ajax call
$('#submitNewPrimer').click(function() {

	// prepare data to be sent via ajax
	var name = $("#name").val();
	var sequence = $("#sequence").val();
	var purpose = $("#purpose").val();
	var restriction_enzyme = $("#restriction_enzyme").val();
	var additional_info = $("#additional_info").val();


	// ajax call
	$.ajax({
		type: "POST",
		url: "/primers/p_add",
		data: {name: name,
				sequence: sequence,
				purpose: purpose,
				restriction_enzyme: restriction_enzyme,
				additional_info: additional_info
			},
		success: function(response) {
			console.log(response);
			$("#results").html(response);
		}
	});

});