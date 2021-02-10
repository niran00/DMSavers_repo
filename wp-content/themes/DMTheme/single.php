

<?php get_header() ?>

		



<div class="container">
<h1 class="pt-3 pb-3"><?php the_title();  ?> </h1>
<?php if(have_posts()) : while(have_posts()) : the_post();?> 

<?php if(has_post_thumbnail()): ?>

<img class="img-fluid" style="max-width: 100%; " src="<?php the_post_thumbnail_url(); ?>" >

<?php  endif ;?>


<?php the_content();  ?>

<?php endwhile; endif; ?>


</div>


<?php get_footer() ?>
