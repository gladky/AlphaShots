<?php include("includes/header_and_links.php"); ?>
<div class="container"> <!--Main container -->
	<?php include("includes/logo_and_nav.php"); ?>
	<div class="content"> <!-- Content container -->
		<div class="offer" id="js-offer" style="overflow:none;">
			<h3>Panoramy Sferyczne</h3>
			<div class="offer-em">
				<ul class="accordin">
					<li class="accordin">
						<div class="accordin" id="a1">
							<div class="vertical">
								<p class="vertical" id="p1">Standard</p>
							</div>
							<img class="product" src="images/offer/product-sample.gif" />
							<p class="accordin">
								<span class="offer-name">Standard</span>
								Najlepsza cena, standardowa jako�� wykonania </br></br>
								Ceny od <span class="blue">99z�</span>
								<a href='#' class='popup-standard'><span class="small">sprawdz szczeg�owy cennik</span></a>
								
							</p>
						</div>
					</li>
					<li class="accordin">
						<div class="accordin" id="b1">
							<div class="vertical">
								<p class="vertical">Premium</p>
							</div>
							<img class="product" src="images/offer/product-sample.gif" />
							<p class="accordin">
								<span class="offer-name">Premium</span>
								Szczeg�lna dba�o�� o szczeg�y, najlepsza jako��, przyspieszony czas wykonania </br></br>
								Ceny od <span class="blue">149z�</span>
								<a href='#' class='popup-premium'><span class="small">sprawdz szczeg�owy cennik</span></a>
							</p>
						</div>
					</li>
				</ul>
			</div>
			<h3>Fotografia</h3>
			<div class="offer-em">
				<ul class="accordin2">
					<li class="accordin2">
						<div class="accordin2d" id="a2">
							<div class="vertical">
								<p class="vertical" id="p1">Sesyjna</p>
							</div>
							<img class="product" src="images/offer/product-sample.gif" />
							<p class="accordin">
								<span class="offer-name">Sesje zdj�ciowe</span>
								Download free files to make your job easier.</br></br>
								Ceny od <span class="blue">199z�</span>
								<a href='#' class='popup-pictures'><span class="small">sprawdz szczeg�owy cennik</span></a>
							</p>
						</div>
					</li>
					<li class="accordin2">
						<div class="accordin2d" id="b2">
							<div class="vertical">
								<p class="vertical">Reklamowa</p>
							</div>
							<img class="product" src="images/offer/product-sample.gif" />
							<p class="accordin">
								<span class="offer-name">Sesje reklamowe</span>
								Profesjonalne zdj�cia produktu, aran�acja sceny, interakcja z zamawiaj�cym</br></br>
								Ceny od <span class="blue">199z�</span>
								<a href='#' class='popup-adverts'><span class="small">sprawdz szczeg�owy cennik</span></a>
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div><!-- end .content -->  
</div><!-- end .container -->

<!-- modal content --> 
		<div id="basic-modal-content-standard">
			<h3>Cennik</h3>
			<p>Panoramy sferyczne - STANDARD</p>
		</div>
		<div id="basic-modal-content-premium">
			<h3>Cennik</h3>
			<p>Panoramy sferyczne - PREMIUM</p>
		</div>
		<div id="basic-modal-content-pictures">
			<h3>Cennik</h3>
			<p>Sesje zdj�ciowe</p>
		</div>
		<div id="basic-modal-content-adverts">
			<h3>Cennik</h3>
			<p>Sesje reklamowe</p>
		</div>

		<!-- preload the images  
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>-->
		

<script type='text/javascript' src='js/ext/popup/jquery.js'></script>
<script type='text/javascript' src='js/ext/popup/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/ext/popup/basic.js'></script>
<?php include("includes/footer.php"); ?>
