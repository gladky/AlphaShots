jQuery(document).bind('ready', function(){
	if(window.innerWidth<=1140){
		document.getElementById('nav').style.letterSpacing = '3px';
		}
		else{
			document.getElementById('nav').style.letterSpacing = '6px';
		}
	
	window.onresize = function(){
		
		if(window.innerWidth<=1140 ){
			if(window.innerWidth>=700){
				document.getElementById('nav').style.letterSpacing =  parseInt(window.innerWidth/250) +'px';
			}
		}
		else{
			document.getElementById('nav').style.letterSpacing = '6px';
		}
	}
});