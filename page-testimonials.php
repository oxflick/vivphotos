<?php
/*
     Template Name: Testimonials
*/

?>

<?php get_header(); ?>
<div class="page-wrap">
   <div class="container">

       <div class="row">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

               <?php the_content(); ?> 

           <?php endwhile; endif; ?>	

           <?php 
               $args = array(
                 'post_type' => 'testimonial'

               );
               $query = new WP_Query( $args );


           ?>   

        

         <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

         <?php get_template_part( 'content', 'testimonial' ); ?>

         <?php endwhile; endif; wp_reset_postdata(); ?> 
      

           <div class="col-md-12 stars">
               <p> * * * </p>
           </div> 
           <div class="col-md-12 stars">
               <a href="http://www.vivianphotos.com/contact/"> RESERVE PHOTO SESSION WITH VIVIAN</a>
           </div> 
        </div>
    </div>    
</div>
<?php get_footer(); ?>