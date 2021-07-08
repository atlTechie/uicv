<?php get_header(); 
/*
Template Name: Single Column Template
Template Post Type: post, page
*/ ?>
<main data-barba="container" data-barba-namespace="home"> 
  <div class="container">
	  <div class="row justify-content-center">
		  
	  
	  <div class="col-12 col-lg-6">
	  <h1><?php the_title();?></h1>
 <?php
	  if(have_posts()){
		  while(have_posts()){
			  the_post();

			  get_template_part('template-parts/content', 'article');
		  }
	  }
	  ?>
		  </div>
	  </div>
  </div>
</main>
<?php get_footer(); ?>