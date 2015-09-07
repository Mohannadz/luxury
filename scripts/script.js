jQuery(document).ready(function(e) {
	jQuery(".grid-items1").gridalicious({
		gutter: 15,
    width: 315,
    animate: true,
    	animationOptions: {
        speed: 150,
        duration: 300,
   	 },
		});
		
		jQuery(".grid-items2").gridalicious({
		gutter: 20,
    width: 430,
    animate: true,
    	animationOptions: {
        speed: 150,
        duration: 300,
   	 },
		});

});
