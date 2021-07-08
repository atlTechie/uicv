<div class="row">
	<div class='col-12'>
		
	
  <header class="content-header mb-3 text-muted">
	  <div class="row">
		  <div class="col-12">
			  <div class="meta mb-3"><span class="date"><?php the_date(); ?></span> 
		  </div>
		 
	  </div>
	  <div class="row">
		  <div class="col-12">
			  <?php the_tags('<span class="tag ms-2 text-muted"><i class="fas fa-tag"></i></span><span>', '</span><span class="tag ms-2 text-muted"><i class="fas fa-tag"></i></span><span>', '</span>'); ?>
			  
	  <span class="category ms-2 text-muted"><i class="fas fa-sitemap"></i></span><span>Category</span><span class="mx-1 border-end pe-3">Category here</span>
		  <span class="category ms-2 text-muted"><i class="fas fa-comment"></i></span><span>Comments</span><span class="ms-2"><?php comments_number(); ?></span>
		  </div>
		 
	  </div>
	  
		 
	  </div>
  </header>
	<?php the_content(); ?>
		<?php comments_template(); ?>
		</div>
	
	
</div>
