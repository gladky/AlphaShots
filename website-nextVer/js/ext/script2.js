//
	// You can hide the accordions on page load like this, it maintains accessibility
	//
	// Special thanks go out to Will Shaver @ http://primedigit.com/
	//
	var verticalAccordions = $$('.accordion_toggle');
	verticalAccordions.each(function(accordion) {
		$(accordion.next(0)).setStyle({
		  height: '0px'
		});
	});