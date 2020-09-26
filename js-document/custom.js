jQuery(document).ready(function(){
	
	jQuery('.srch-icon').click(
	
		function(){
			jQuery('.menu-area ul').css({'margin-left':'0%'});
			jQuery('.srch-inpt').fadeIn(
				function(){
					
					jQuery('.header-top').mouseleave(
					
						function(){
							
							jQuery('.srch-inpt').hide();
							jQuery('.menu-area ul').css({'margin-left':'26%'});
			
							
						}
					
					);
					
					
				}
			
			);
	
		}

	);
	

	jQuery(window).scroll(
	
		function(){
			
			if(jQuery(window).scrollTop() >1700){
				
				jQuery('.fclty-right>.std-pic').css({'transform':'scale(1)','opacity':'1'});
 
	
			}
			else{
				
				jQuery('.fclty-right>.std-pic').css({'transform':'scale(.2)','opacity':'.1'});
				
				
			}

			if(jQuery(window).scrollTop() >2200){
				
				jQuery('.fclity-dygrm').css({'transform':'scale(1)','opacity':'1'});
				jQuery('.fclity-ststc').css({'transform':'scale(1)','opacity':'1'});
	
			}
			else{
				
				jQuery('.fclity-dygrm').css({'transform':'scale(.2)','opacity':'.2'});
				jQuery('.fclity-ststc').css({'transform':'scale(.2)','opacity':'.2'});
				
			}
			
			
			
			
		}
	
	
	
	);



 











 
	
	
});