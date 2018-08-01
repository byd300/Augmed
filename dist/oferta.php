<?php $page='oferta'; include 'header.php';?> <!-- Banner --><div class="container-fluid"><div class="row sub__header"><div class="col-md-12 no-padding"><img class="header__bg rwd" src="images/oferta.jpg"></div></div></div><!-- End Banner --><!-- <div class="container-fluid no-padding">
	<div class="line">
		
	</div>
</div> --> <?php include 'facebook-card.php';?> <div class="container-fluid offer__wrapper"><div class="container"><!-- Menu vertical --><div class="row oferta__menu-wrapper-vertical"> <?php include 'oferta__menu--vertical.php';?> <!-- Offer --><!-- https://www.sitepoint.com/community/t/php-dynamic-pages-with-include-tag/31988  --> <?php
        if (isset($_GET['page'])) {
            $sub_page = $_GET['page']; /* gets the variable $page */
        }
        if (!empty($sub_page)) {
            include($sub_page);
        }
        else {
			include('oferta__content--main.php');
		} 	/* otherwise, include the default page */
    ?> </div></div></div><!-- End-Offer --> <?php include 'footer.php';?>