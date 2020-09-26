jQuery(document).ready(function(){
	
	jQuery('.srch-icon').click(
	
		function(){

			jQuery('.menu-area ul').css({'margin-left':'26%'});
			
			jQuery('.srch-inpt').fadeIn(
			
				function(){
					
					jQuery('.timeline-area ').mouseenter(
					
						function(){
							
							jQuery('.srch-inpt').css({'display':'none'});
							
							jQuery('.menu-area ul').css({'margin-left':'44%'});
	
						}

					);
	
				}

			);
	
		}

	);
	
	
	
	
	
	
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});