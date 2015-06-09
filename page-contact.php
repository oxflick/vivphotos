<?php
/*
     Template Name: Contact
*/

?>




<?php get_header(); ?>
<div class="page-wrap contact">
<div class="container contcontact">

    <div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<p><?php the_content(); ?> </p>

<?php endwhile; else : ?>
	
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>	
</div>
</div>
</div>
<?php get_footer(); ?>