<?php get_header(); ?>
<div class="page-wrap">
<div class="container-fluid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<p><?php the_content(); ?> </p>

<?php endwhile; else : ?>
	
	<p><?php _e( 'Sorry, no pages found.' ); ?></p>

<?php endif; ?>	

</div>
</div>
<?php get_footer(); ?>