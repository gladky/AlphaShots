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
                            <td id="js-main_photo_container">
<!--
                				<img id="main_foto" src="pictures/z1.jpg"/>	
-->
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
			
			/*
			thumb_templ_1: '<div id="th',
			thumb_templ_2: '"><a id="a-thumb',
			thumb_templ_3: '"><img id="jpg-thumb',
			thumb_templ_4: '" class="thumbnail" src="pictures/thumbs/thum',
			thumb_templ_5: '.jpg"/></a></div>',	
			*/
			
			templ_1: '<li id="js-thumb',
			templ_2: '"><a id="a-thumb',
			templ_3: '"><img id="jpg-thumb',
			templ_4: '" class="thumbnail" src="pictures/thumbs/thum',
			templ_5: '.jpg"/></a></li>',
			
			thumb_templ_cont: '#js-carousel',
			main_photo_cont: '#js-main_photo_container',
			thumb_next: '#div-button',
			thumb_prev: '#js-top_thumbs',
			slide_next: '#js-button_left',
			slide_prev: '#js-button_right',
			
		};
		
		var photos_count = '<?php echo $count;?>';
		photos_count = parseInt(photos_count);
			
		var idx = {
			thumb_start: 1,
			thumb_curr: 1,
			thumb_max: photos_count,
			slide_curr: 1,
			offset: 1,
			
		};
		
		
		var load_photos = function(){
			
			for(var i=1;i<=photos_count;i++){ //zmienic 1 na i potem jak beda wszystkie miniatury
				$(options.thumb_templ_cont).append(options.templ_1 + i + options.templ_2 + i + options.templ_3 + i + options.templ_4 + i + options.templ_5 );
			}
			$('#carousel ul li:first').before($('#carousel ul li:last'));
			$('#carousel ul li:first').before($('#carousel ul li:last'));
			$('#carousel ul').css({'top' : '-97px'}); 
			$(options.main_photo_cont).append('<img id="main_foto" src="pictures/z1.jpg"/>');
			
				
		};
			
		//dzialanie
		load_photos();
		
		var carousel_next = function(){
			
			//$('#js-carousel').stop();
			
			var item_height = $('#carousel ul li').outerHeight() + 1;
			var top_indent = parseInt($('#carousel ul').css('top')) - item_height;
			
			
			$('#carousel ul').animate({'top': top_indent,}, 500, function(){
				$('#carousel ul li:last').after($('#carousel ul li:first'));
				$('#carousel ul').css({'top' : '-97px'}); 
				});
			//idx.offset++;
			//~ var off = (idx.offset % photos_count) - 4;
			//~ if (off == photos_count - 4){
				//~ 
				//~ load_photos();
				//~ 
			//~ }
			
		};
		
		
		
		var carousel_prev = function(){
			//$('#js-carousel').stop();
			
			var item_height = $('#carousel ul li').outerHeight() + 1;
			var top_indent = parseInt($('#carousel ul').css('top')) + item_height;
			
			//idx.offset--;
			$('#carousel ul').animate({'top': top_indent,}, 500, function(){
				$('#carousel ul li:first').before($('#carousel ul li:last'));
				$('#carousel ul').css({'top' : '-97px'});});
			
		};
		
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
		
	});
</script>
<?php include("includes/footer.php"); ?>

