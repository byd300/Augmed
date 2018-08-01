<?php $page='kontakt'; include 'header.php';?>

<!-- Banner -->
<div class="container-fluid">
	<div class="row sub__header">
		<div class="col-md-12 no-padding">
			<img src="images/kontakt2.jpg" class="rwd header__bg">
		</div>
	</div>
</div>
<!-- End Banner -->
<!-- Contact-bar -->
		<div class="container-fluid contact-bar">
				<div class="container">
					<div class="row contact-bar__txt">
						<div class="col-md-4">
							<i class="far fa-clock"></i>
							<span>pon.–pt. godz.<br>11:00–18:30</span>					
						</div>
						<div class="col-md-4">
							<i class="fas fa-map-marker"></i>
							<span>Łabędzka 20d<br>44-100 Gliwice </span>					
						</div>
						<div class="col-md-4">
							<i class="fas fa-phone"></i>
							<span id="valign-center" >32 888 58 08 </span>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Contact-bar -->

<?php include 'facebook-card.php';?>

<!-- Info -->
<div class="container">
	<div class="row info kontakt">
		<div class="col-md-6 info__txt title kontakt-info ">
			<h3>Kontakt</h3>
			<h6>Serdecznie zapraszamy do naszych gabinetów po wcześniejszym umówieniu wizyty. </h6>
			<img src="images/underline.png" alt="inderline" class="underline">
			
			<div class="kontakt-info-row ">
				<i class="fas fa-bus"></i><span>Dojazd autobusem linii: <b>1, 2, 3, 4</b></span>
			</div>
			<div class="kontakt-info-row">
				<i class="fas fa-phone"></i><span><b>+48 32 888 58 08</b></span>
			</div>
			<div class="kontakt-info-row ">
				<i class="fas fa-map-marker"></i><span>Łabędzka 20,<br> 44-100 Gliwice </span>
			</div>
		</div>	
		<div class="col-md-6 info__img">
			<iframe src="https://snazzymaps.com/embed/41056" width="100%" height="315px" style="border:none;"></iframe>
		</div>	
	</div>
</div>
<!-- //Info -->

<?php include 'footer.php';?>