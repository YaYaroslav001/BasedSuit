function search(){
    $input = jQuery('#searchbar').val();
    $input = $input.toLowerCase()
    
    $('.card').each(function(){
        
        let name = $(this).find('h5').text().toLowerCase();
        
        if(!name.includes($input)) {

            $(this).css('display', 'none');
        }
        else  {
            $(this).css('display', 'block');
        }
    })

    
}

/*
function search(){
	let input = document.getElementById('searchbar').value
	input = input.toLowerCase()
	let x = document.getElementsByClassName('card')
	
	for(let i = 0; i < x.length; i++) {
		if(!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display = 'none'
		}
		else {
			x[i].style.display = "block"
		}
	}
}
*/