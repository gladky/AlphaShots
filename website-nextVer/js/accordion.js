$(document).ready(function(){
    lastBlock = $("#a1");
	lastBlock2 = $("#a2");
    maxWidth = 915;
    minWidth = 25;

    $("ul.accordin li.accordin a.accordin").hover(
      function functioname(){
        $(lastBlock).animate({width: minWidth+"px"}, { queue:false, duration:400 });
      $(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
	  
      lastBlock = this;
      }
    );
	
	 $("ul.accordin2 li.accordin2 a.accordin2").hover(
      function functioname2(){
        $(lastBlock2).animate({width: minWidth+"px"}, { queue:false, duration:400 });
      $(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
	  
      lastBlock2 = this;
      }
    );
});
