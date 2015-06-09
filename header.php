<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
	
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-default navbarmine">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="http://www.vivianphotos.com/wp-content/uploads/2015/06/logo.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

        </ul>

        <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'nav navbar-nav navbar-right'
            );

            wp_nav_menu( $defaults );

        ?>
        <!--
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php bloginfo('url'); ?>">HOME</a></li>
          <li><a href="#">ABOUT ME</a></li>
          <li><a href="#">PORTFOLIO</a></li>

        </ul> -->
      
          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">INFO <span class="caret"></span></a>
            <ul class="dropdown-menu menutherest" role="menu">

              <li><a href="http://www.vivianphotos.com/testimonials/">TESTIMONIALS</a></li>
              <li class="divider"></li>
              <li><a href="http://www.vivianphotos.com/contact/">CONTACT</a></li>
            </ul>
          </li>
         </ul>  
       
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav> <!--End Navigation -->