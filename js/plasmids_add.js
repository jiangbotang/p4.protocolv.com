// add a new plasmid entry with an Ajax call
$('#submitNewPlasmid').click(function() {

	// prepare data to be sent via ajax
	var name = $("#name").val();
	var backbone = $("#backbone").val();
	var insertion = $("#insertion").val();
	var clone_num = $("#clone_num").val();
	var purpose = $("#purpose").val();
	var cloning_sites = $("#cloning_sites").val();
	var mammalian_selec = $("#mammalian_selec").val();
	var bacterial_selec = $("#bacterial_selec").val();
	var source = $("#source").val();
	var additional_info = $("#additional_info").val();

	//  ajaxa call only if required fields is not null or empty
	if(name && insertion && purpose && source) {
		// ajax call
		$.ajax({
			type: "POST",
			url: "/plasmids/p_add",
			data: {name: name,
					backbone: backbone,
					insertion: insertion,
					clone_num: clone_num,
					purpose: purpose,
					cloning_sites: cloning_sites,
					mammalian_selec: mammalian_selec,
					bacterial_selec: bacterial_selec,
					source: source,
					additional_info: additional_info
				},
			success: function(response) {
				$("#results").html(response);
				$("#results").fadeOut(7000);
				// clear the form
				$(":input").val("");
			}
		});		
	} else {
		$("#results").html("Please fill in required fields.");
	}

});