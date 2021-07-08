<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags-->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <?php wp_head(); ?>
</head>
<body data-barba="wrapper" <?php body_class(); ?>> 
  <header> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid"><a class="navbar-brand" href="/">
		 <?php
		  if(function_exists('the_custom_logo')){
		  $custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id); 
			  
		  }
		  ?>
		
		  <img class="img-fluid w-25" src="<?php echo $logo [0] ?>">
		  <span><?php echo get_bloginfo('name'); ?></span>
		  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
			<?php 
			wp_nav_menu(
			array(
			'menu' => 'primary',
				'container'=> '',
				'theme_lcoation' => 'primary',
				"items_wrap" => '<ul id="" class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">%3$s</ul>'
			)
			);
			?>

        </div>
      </div>
    </nav>
  </header>