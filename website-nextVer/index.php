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
                	<table id="thumbs_table">
                    	<tr>
                        	<td>
                            	<img id="js-top_thumbs" class="top_button" src="images/top.jpg" style="position:inherit; left:20px;"/>
                            </td>
                        </tr>
                    	<tr>
                        	<td id="js-thumb1">
<!--
                        		<img id="jpg-thumb1" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
-->
                            </td>
                        </tr>
                    	<tr>
                        	<td id="js-thumb2">
<!--
                        		<img id="jpg-thumb2" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
-->
                            </td>
                        </tr>
                    	<tr>
                        	<td id="js-thumb3">
<!--
                        		<img id="jpg-thumb3" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
-->
                            </td>
                        </tr>
                    	<tr>
                        	<td id="js-thumb4">
<!--
                        		<img id="jpg-thumb4" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
-->
                            </td>
                        </tr>
                    	<tr>
                        	<td id="js-thumb5">
<!--
                        		<img id="jpg-thumb5" class="thumbnail" src="pictures/thumbs/thum1.jpg"/>
-->
                            </td>
                        </tr>     
                        <tr>
                        	<td>
                            	<img id="js-bottom_thumb" class="bottom_button" src="images/bottom.jpg"/>
                            </td>
                        </tr>                                                                                           
                    </table>
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
			thumb_templ_1: '<div id="th',
			thumb_templ_2: '"><img id="jpg-thumb',
			thumb_templ_3: '" class="thumbnail" src="pictures/thumbs/thum',
			thumb_templ_4: '.jpg"/></div>',	
			thumb_templ_cont: '#js-thumb',
			main_photo_cont: '#js-main_photo_container',
			thumb_next: '#js-bottom_thumb',
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
			offset:0,
			
		};
		
		
		var load_photos = function(){
			
			var photos_count = '<?php echo $count;?>';
			photos_count = parseInt(photos_count);
			
			for(var i=1;i<=5;i++){ //zmienic 1 na i potem jak beda wszystkie miniatury
				$(options.thumb_templ_cont + i).append(options.thumb_templ_1 + i + options.thumb_templ_2 + i + options.thumb_templ_3 + i + options.thumb_templ_4);
			}
			
			$(options.main_photo_cont).append('<img id="main_foto" src="pictures/z1.jpg"/>');
			
				
		};
			
			
		var remove_photos = function(thumb_curr){
			
			for(var i=1;i<=5;i++){
				$('#th'+ i).remove();
			}
			
		};	
			
			
		var append_photos = function(thumb_curr){
			var j = [];
			for(var i=thumb_curr; i<=thumb_curr + 4;i++){ //zmienic 1 na i potem jak beda wszystkie miniatury
			
				var curr = i % idx.thumb_max;
				
				if (curr==0){
					j.push(idx.thumb_max);
				}
				else if(curr<0){
					curr = idx.thumb_max - (0 - curr);
					j.push(curr);
				}
				else{
					j.push(curr);
				}
			}
			for (i=1; i<=5; i++){
				$(options.thumb_templ_cont + i).append(options.thumb_templ_1 + i + options.thumb_templ_2 + j[i-1] + options.thumb_templ_3 + j[i-1] + options.thumb_templ_4);
			}
		};	
			
			
		var carousel_next = function(){
			
			remove_photos(idx.thumb_curr);

			idx.thumb_curr++;

			append_photos(idx.thumb_curr);
			
		};
		
		
		var carousel_prev = function(){
			
			remove_photos(idx.thumb_curr);

			idx.thumb_curr--;

			append_photos(idx.thumb_curr);
			
		};
		
		
		var slide_prev = function(){
			
		};
		
		
		var slide_next = function(){
			
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
		
	});
</script>
<?php include("includes/footer.php"); ?>

