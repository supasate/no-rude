$(document).ready(function() {

	$('#no-rude-area').keyup(function(e){
		
		var text = $('#no-rude-area').val();
		$.ajax({
		    type: 'POST',
		    dataType:'json',
		    cache: false,
		    async: false,
		    url: 'translate.php',
		    data: { 
		        'intext': text, 
		    },
		    success: function(json) {
		        $('#no-rude-area').val(json.polite);
		    }
		});
	});
});
