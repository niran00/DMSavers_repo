<!DOCTYPE html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<header class="sticky-top">
	

<div class="container">
	


</div>
<div class="container">

	<div class="row align-items-center">
		
		<div class="col-6">
		<?php theme_prefix_the_custom_logo(); ?>
		<!-- <button class="btn btn-success" id="jclick">Jquery</button> -->
		</div>

		<div class="col-6">	
		<!-- <button  style="float: right;" class="btn btn-primary" onclick="myFunction()">Javascript</button> -->

				<?php

		wp_nav_menu(
		
		array(
		
		'theme_location' => 'nav-menu',
		'menu_class' => 'main_nav d-flex mb-0 justify-content-between text-light', 
		)
		
		); 

		 ?>

		</div>


	</div>
</div>

</header>