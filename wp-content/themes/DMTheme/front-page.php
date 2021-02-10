

<?php get_header() ?>

		



<div class="container">
		<h1 class="pt-3 pb-3"><?php the_title();  ?>qwerrty </h1>
<?php if(have_posts()) : while(have_posts()) : the_post();?> 


<?php the_content();  ?>

<?php endwhile; endif; ?>


</div>


<?php get_footer() ?>
