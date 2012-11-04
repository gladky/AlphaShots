$(document).ready(function(){
    lastBlock = $("#a1");
    maxWidth = 935;
    minWidth = 25;	

    $("ul.accordin li.accordin a.accordin").hover(
      function functioname(){
        $(lastBlock).animate({width: minWidth+"px"}, { queue:false, duration:400 });
	$(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
	lastBlock = this;
      }
    );
	
});
