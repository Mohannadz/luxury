jQuery(document).ready(function(e) {
	jQuery("#new-gallery").gridalicious({
		gutter: 15,
    width: 315,
    animate: true,
    	animationOptions: {
        speed: 150,
        duration: 300,
   	 },
		});
		
		jQuery(".grid-items").gridalicious({
		gutter: 20,
    width: 430,
    animate: true,
    	animationOptions: {
        speed: 150,
        duration: 300,
   	 },
		});

});
