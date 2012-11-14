function resizeAccordin(){
		var current_acc_w = $("#js-offer").css('width');
		current_acc_w = parseInt(current_acc_w) - 55;
		maxWidth = current_acc_w;
		
		if(parseInt($("#a1").css('width'))<=35)
			$("#b1").css('width', current_acc_w  + "px");
		else
			$("#a1").css('width', current_acc_w  + "px");
			
			
		if(parseInt($("#a2").css('width'))<= 35)
			$("#b2").css('width', current_acc_w  + "px");
		else
			$("#a2").css('width', current_acc_w  + "px");
	};
	
$(document).bind('ready', function(){
    lastBlock = $("#a1");
	lastBlock2 = $("#a2");
	
	
	var current_acc_w = $("#js-offer").css('width');
	current_acc_w = parseInt(current_acc_w) - 55;
	

	$("#a1").css('width', current_acc_w  + "px");
	$("#a2").css('width', current_acc_w  + "px");
	
    maxWidth = current_acc_w;
    minWidth = 35;
	
	
    $("ul.accordin li.accordin div.accordin").hover(
      function functioname(){
        $(lastBlock).animate({width: minWidth+"px"}, { queue:false, duration:400 });
      $(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
	  
      lastBlock = this;
      }
    );
	
	 $("ul.accordin2 li.accordin2 div.accordin2d").hover(
      function functioname2(){
        $(lastBlock2).animate({width: minWidth+"px"}, { queue:false, duration:400 });
      $(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
	  
      lastBlock2 = this;
      }
    );
});
