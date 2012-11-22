<?php include("includes/header_and_links.php"); ?>
<div class="container"> <!--Main container -->
	<?php include("includes/logo_and_nav.php"); ?>
	<div class="content"> <!-- Content container -->
		<div id="galleria">
			<div id="container">
				<div id ="left">
                	<p id="js-photos_button" class="vertical_txt" style="top: 100px;" > 
                    	Fotografia
                    </p>
                    <p id="js-pano_button" class="vertical_txt" style="top: 300px;">
                    	Panorama
                    </p>
                </div>
				<div id ="right">
                	<table>
                    	<tr>
                        	<td>	
                            	<img id="js-button_left" src="images/left.jpg">
                            </td>
                            <td id="js-slide_container">
								<div id="main_photo">
								
<!--
                				<img id="main_foto" src="pictures/z1.jpg"/>	
-->
								</div>
                            </td>
                            <td>
                            	<img id="js-button_right"  src="images/right.jpg" />
                            </td>
                        </tr>
                    </table>
                </div>
				<div id ="center" >
                    	<div>
                            	<img id="js-top_thumbs" class="top_button" src="images/top.jpg"/>
						</div>
							<div id="carousel">
								<ul id="js-carousel">
									
	<!--
								<tr>
									<td id="js-thumb1">
										<a id="a-thumb1"> <img id="jpg-thumb1" class="thumbnail" src="pictures/thumbs/thum1.jpg"/></a>
									</td>
								</tr>
								<tr>
									<td id="js-thumb2">
										<img id="jpg-thumb2" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
									</td>
								</tr>
								<tr>
									<td id="js-thumb3">
										<img id="jpg-thumb3" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
									</td>
								</tr>
								<tr>
									<td id="js-thumb4">
										<img id="jpg-thumb4" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
									</td>
								</tr>
								<tr>
									<td id="js-thumb5">
										<img id="jpg-thumb5" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
									</td>
								</tr> 
	-->
								</ul>
							</div>
							<div id="div-button">
                            	<img id="js-bottom_thumb" class="bottom_button" src="images/bottom.jpg"/>
                            </div>
				</div>
			</div>
		</div>
	</div><!-- end .content -->
</div><!-- end .container -->


<!--
 odtąd mozna odlaczyc do osobnego pliku js
-->


<?php
$dirname = 'pictures';
$pattern = "/(\.jpg$)/i"; // valid image extensions
$count = 0;

if (is_dir($dirname)) {

    if ($handle = opendir($dirname)) {
		$count = 0;
        while (false !== ($file = readdir($handle))) {
            // if this file is a valid image
            if (preg_match($pattern, $file)) {
                $count++;
            }
        }
        closedir($handle);
    }
}
?>

<script type="text/javascript" charset="utf-8">
	jQuery(document).bind('ready', function() {
		
		var options = {

			templ_1: '<li id="js-thumb',
			templ_2: '"><a id="a-thumb',
			templ_3: '"><img id="',
			templ_4: '" class="thumbnail" src="pictures/thumbs/thum',
			templ_5: '.jpg"/></a></li>',
			
			templ_m1: '<img id="main_foto', 
			templ_m2: '" src="pictures/z',
			templ_m3: '.jpg"/>',
			
			thumb_templ_cont: '#js-carousel',
			main_photo_cont: '#js-slide_container',
			thumb_next: '#div-button',
			thumb_prev: '#js-top_thumbs',
			slide_next: '#js-button_right',
			slide_prev: '#js-button_left',
			
		};
		
		var photos_count = '<?php echo $count;?>';
		photos_count = parseInt(photos_count);
			
		var idx = {
			slide_curr: 1,	//aktualnie wyswietlany slajd
			allow_fade: 1,  //pozwala na fadeowanie
		};
		
		
		var load_photos = function(){
			
			for(var i=1;i<=photos_count;i++){
				$(options.thumb_templ_cont).append(options.templ_1 + i + options.templ_2 + i + options.templ_3 + i + options.templ_4 + i + options.templ_5 );
				$(options.main_photo_cont).append(options.templ_m1 + i + options.templ_m2 + i + options.templ_m3);
			}
			$('#carousel ul li:first').before($('#carousel ul li:last'));
			$('#carousel ul li:first').before($('#carousel ul li:last'));
			$('#carousel ul').css({'top' : '-97px'}); 
			$('#main_foto'+idx.slide_curr).addClass('active');
		};		
		
				
		var carousel_next = function(){	
			//$('#js-carousel').stop();
			
			var item_height = $('#carousel ul li').outerHeight();
			var top_indent = parseInt($('#carousel ul').css('top')) - item_height;
			
			$('#carousel ul').animate({'top': top_indent,}, 500, function(){
				$('#carousel ul li:last').after($('#carousel ul li:first'));
				$('#carousel ul').css({'top' : '-97px'}); 
				});
		};
		
		
		var carousel_prev = function(){
			//$('#js-carousel').stop();
			
			var item_height = $('#carousel ul li').outerHeight();
			var top_indent = parseInt($('#carousel ul').css('top')) + item_height;
			
			$('#carousel ul').animate({'top': top_indent,}, 500, function(){
				$('#carousel ul li:first').before($('#carousel ul li:last'));
				$('#carousel ul').css({'top' : '-97px'});});
		};
		
		
		var slide_next = function(){
			var $active = $('#js-slide_container .active');
			
			if(idx.allow_fade == 1){
				if (idx.slide_curr == photos_count){
					idx.slide_curr = 1;
				}
				else{
					idx.slide_curr = idx.slide_curr + 1;
				}
				
				var $next = $('#main_foto' + idx.slide_curr);
			
				idx.allow_fade = 0; 
				$next.css('z-index', 2);
				$active.fadeOut(1000, function(){
					$active.css('z-index', 1).show().removeClass('active');
					$next.css('z-index', 3).addClass('active');
					idx.allow_fade = 1;
				});
			}

		};
		

		var slide_prev = function(){
			var $active = $('#js-slide_container .active');
			if(idx.allow_fade == 1){
				
				if (idx.slide_curr == 1){
					
					idx.slide_curr = photos_count;
				}
				else{
					idx.slide_curr = idx.slide_curr - 1;
				}
				
				var $prev = $('#main_foto' + idx.slide_curr);

				idx.allow_fade = 0; 
				$prev.css('z-index', 2);
				$active.fadeOut(1000, function(){
					$active.css('z-index', 1).show().removeClass('active');
					$prev.css('z-index', 3).addClass('active');
					idx.allow_fade = 1;
				});
			}
			
		};
				

		var slide_rand = function(next_slide){
			
			var $active = $('#js-slide_container .active');
			if(idx.allow_fade == 1){
				idx.slide_curr = next_slide;
				var $next = $('#main_foto' + next_slide);
				
				idx.allow_fade = 0; 
				$next.css('z-index', 2);
				$active.fadeOut(1000, function(){
					$active.css('z-index', 1).show().removeClass('active');
					$next.css('z-index', 3).addClass('active');
					idx.allow_fade = 1;
				});
			}
			
		};
			
		//dzialanie
		load_photos();
		
		$(options.thumb_next).bind('click', function(){
			carousel_next();
		});	


		$(options.thumb_prev).bind('click', function(){
			carousel_prev();
		});		


		$(options.slide_next).bind('click', function(){
			slide_next();
		});		

		
		$(options.slide_prev).bind('click', function(){
			slide_prev();
		});
		
			
		$('#js-carousel img').bind('click', function(){
			var identify = parseInt($(this).attr('id'));
			slide_rand(identify);
		});
		
		
	});
</script>
<?php include("includes/footer.php"); ?>

