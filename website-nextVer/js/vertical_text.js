$(document).ready(function(){
	lastText = $("#p1");
	
	$("p.vertical").hover(
      function functioname(){
		(lastText).setAttribute("style","color: red; ");
		$(this).setAttribute("style","color: black; ");
		lastText = this;

      }
    );
	
});
