<?php get_header(); 
/*
Template Name: Single Column Template
Template Post Type: post, page
*/ ?>
<main data-barba="container" data-barba-namespace="home"> 
  <div class="container">
	  <h1><?php the_title();?></h1>
 <?php
	  if(have_posts()){
		  while(have_posts()){
			  the_post();

			  the_content();
		  }
	  }
	  ?>
  </div>
</main>
<?php get_footer(); ?>