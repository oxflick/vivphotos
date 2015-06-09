
<?php
/**
* Template for displaying testimonial custom post type entries
*/


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="col-md-12 testimonials">
 <img class="img-circle img-responsive pull-left testimimg" src="<?php the_field('image'); ?>" alt="Example image of <?php the_field('name'); ?>">
        <p> <?php the_field('text-testimonial'); ?>
        </p>
        <p> <?php the_field('name'); ?>
        </p> 

</div>         

</article>        