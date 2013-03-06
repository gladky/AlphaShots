<?php include("includes/header_and_links.php"); ?>
<div class="container"> <!--Main container -->
	<?php include("includes/logo_and_nav.php"); ?>
	<div class="content"> <!-- Content container -->
		<div id="js-slide_container_m">
			<div id="js-ken_burns">
			
			</div>
		</div>
		<div id="canvas_container">
			<div id="button1">
			</div>
			<canvas id="kenburns" width="900" height="468">
				<p>Your browser doesn't support canvas!</p>
			</canvas>
			
		</div>
	</div><!-- end .content -->
</div><!-- end .container -->


<?php
$dirname = 'pictures/main';
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
	
		/*var options = {

		templ_m1: '<img id="main_foto', 
		templ_m2: '" src="pictures/main/m',
		templ_m3: '.jpg"/>',
		
		main_photo_cont: '#js-ken_burns',

		};
		
		
		var photos_count = '<?php echo $count;?>';
		photos_count = parseInt(photos_count);
			
		var idx = {
			slide_curr: 1,	//aktualnie wyswietlany slajd
			allow_fade: 1,  //pozwala na fadeowanie
		};
		
	
		var load_photos = function(){
				
				for(var i=1;i<=photos_count;i++){
					$(options.main_photo_cont).append(options.templ_m1 + i + options.templ_m2 + i + options.templ_m3);
				}
				$('#main_foto'+idx.slide_curr).addClass('active');
		};	
		
			
		var slide_next = function(){
			var $active = $('#js-slide_container_m .active');
			
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
			var $active = $('#js-slide_container_m .active');
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
		
		var ken_burns_effect1 = function(){
			var $active = $('#js-slide_container_m .active');
			var width = $active.css('width');
			var height = $active.css('height');
			var left = $active.css('left');
			$active.animate({width: 720*1.3, height: 468*1.3,}, 4000, function(){
			}).animate({left: -150,}, 8000,function(){});
		
		};
		
		
		//dzialanie
		
		load_photos();
		ken_burns_effect1();
		
		$('#js-slide_container_m').bind('click', function(){
		
		slide_next();
		
		});
		*/
		
			$(function(){
				$('#kenburns').kenburns({
					images:['pictures/main/m1.jpg',
							'pictures/main/m2.jpg',
							'pictures/main/m3.jpg',
							'pictures/main/m4.jpg',
							'pictures/main/m5.jpg',
							],
					frames_per_second: 30,
					display_time: 7000,
					fade_time: 1000,
					zoom: 2,
					background_color:'#ffffff',
					post_render_callback:function($canvas, context) {
						// Called after the effect is rendered
						// Draw anything you like on to of the canvas
						
						context.save();
						context.fillStyle = '#000';
						context.font = 'bold 20px sans-serif';
						var width = $canvas.width();
						var height = $canvas.height();												
						var text = "";
						var metric = context.measureText(text);
						
						context.fillStyle = '#fff';
						
						context.shadowOffsetX = 3;
						context.shadowOffsetY = 3;
						context.shadowBlur = 4;
						context.shadowColor = 'rgba(0, 0, 0, 0.8)';
						
						context.fillText(text, width - metric.width - 8, height - 8);						
						
						context.restore();						
					}
				});				
			});
	
	});
	
	
	
</script>


<?php include("includes/footer.php"); ?>


