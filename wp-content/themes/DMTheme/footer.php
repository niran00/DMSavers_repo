
	<?php wp_footer(); ?>


</body>
<footer>

<div class="container">

<div class="row">

<div class="col-md-3">
<?php
 
if ( is_active_sidebar( 'footer-1-widget' ) ) : ?>
    <div id="footer-widget-area-1" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'footer-1-widget' ); ?>
    </div>
     
<?php endif; ?>
</div>

<div class="col-md-3">
<?php
 
if ( is_active_sidebar( 'footer-2-widget' ) ) : ?>
    <div id="footer-widget-area-2" class=" widget-area" role="complementary">
    <?php dynamic_sidebar( 'footer-2-widget' ); ?>
    </div>
     
<?php endif; ?>
</div>

<div class="col-md-3">
<?php
 
if ( is_active_sidebar( 'footer-3-widget' ) ) : ?>
    <div id="footer-widget-area-3" class=" widget-area" role="complementary">
    <?php dynamic_sidebar( 'footer-2-widget' ); ?>
    </div>
     
<?php endif; ?>
</div>

<div class="col-md-3">
<?php
 
if ( is_active_sidebar( 'footer-4-widget' ) ) : ?>
    <div id="footer-widget-area-4" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'footer-4-widget' ); ?>
    </div>
     
<?php endif; ?>
</div>

</div>


</div>


</footer>	

</html>