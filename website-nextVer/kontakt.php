<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alpha Shots</title>
<link href="main.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="container"> <!--Main container -->
  
  <div class="header"> <!-- Header container -->
    	<div class="header_content">
        	<div class="motto">
            	<p class="motto"><span class="grey">Just look around - </span>easily</p>
        	</div>
	    	<div class="company_name">
            	<p class="company_name"><b>ALPHA<span class="grey">SHOTS</span></b></p>
        	</div>
   		</div>
  </div>
  
  
  <hr width="90%" />
  
  <ul class="nav" id="nav" style="letter-spacing: 6px; ">
    <li class="horizontal-first"><a href="panorama.php">Panorama sferyczna</a></li>
    <li class="horizontal"><a href="fotografia.php">Fotografia</a></li>
    <li class="horizontal"><a href="index.php">Galeria</a></li>
    <li class="horizontal"><a href="oferta.php">Oferta</a></li>
    <li class="horizontal"><a href="kontakt.php">Kontakt</a></li>
  </ul>
  
  <div class="content"> <!-- Content container -->
  	<div class="widget">
    	<div class = "option-wrapper">
    		<p class="branding"><a href="panorama.php">Panorama sferyczna</a></p>
        	<p class="branding"><a href="fotografia.php">Fotografia</a></p>
            <p class="branding"><a href="index.php">Galeria</a></p>
        	<p class="branding"><a href="oferta.php">Oferta</a></p>
            <p class="branding"><a href="kontakt.php">Kontakt</a></p>
        </div>
    </div>
  </div><!-- end .content -->
  
</div><!-- end .container -->
  <div class="footer">
    <p>copyright by ALPHASHOTS</p>
  </div><!-- end .footer -->
  

  
    <script>
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
	</script>
</body>
</html>