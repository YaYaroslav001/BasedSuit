$(document).ready(function() {	
	var $result = $('#search_result');
	
	$('#searchText').on('keyup', function(){
		var searchText = $(this).val();
		if ((searchText != '') && (searchText.length > 0)){
			$.ajax({
				type: "POST",
				url: "../ajax/ajax_search.php",
				data: {'searchText': searchText},
				success: function(msg){
					$result.html(msg);
					if(msg != ''){	
						$result.fadeIn();
					} else {
						$result.fadeOut(100);
					}
				}
			});
		 } else {
			$result.html('');
			$result.fadeOut(100);
		 }
	});
});

