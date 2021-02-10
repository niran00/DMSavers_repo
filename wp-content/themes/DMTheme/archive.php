

<?php get_header() ?>

		


<div class="container">
<h1><?php single_cat_title(); ?></h1>
<?php if(have_posts()) : while(have_posts()) : the_post();?> 


<div class="card mt-4">
<div class="card-body ">

<h3><?php the_title(); ?></h3>
<img style="max-width: 100%; " src="<?php the_post_thumbnail_url(); ?>" >
<?php the_excerpt();  ?>
<a href="<?php the_permalink(); ?>" class="btn btn-warning"> Read More</a>

</div>
</div>


<?php endwhile; endif; ?>


</div>


<?php get_footer() ?>
