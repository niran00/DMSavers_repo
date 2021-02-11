

<?php get_header() ?>

		

<?php  echo "this is a test" ?>

<div class="container">
		<h1 class="pt-3 pb-3"><?php the_title();  ?> 123</h1>
<?php if(have_posts()) : while(have_posts()) : the_post();?> 


<?php the_content();  ?>

<?php endwhile; endif; ?>


</div>


<?php get_footer() ?>
