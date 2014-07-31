$(document).ready(function() {

	$('#no-rude-area').keyup(function(e){
		
		var text = $('#no-rude-area').val();
		$.ajax({
		    type: 'POST',
		    cache: false,
		    async: false,
		    url: 'api.php',
		    data: { 
		        'intext': text, 
		    },
		    success: function(response) {
		        $('#no-rude-area').val(response);
		    }
		});
	});
});
