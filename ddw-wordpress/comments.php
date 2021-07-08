<div class="comment-wrapper">
  <div class="comments" id="comments">
    <div class="comments-header">
      <h3 class="comment-reply-title">
		<?php 
		  if(!have_comments()){
		echo "Start The Conversation";	  
		  }
		  else{
			  get_comments_number(). "Comments";
		  }
		  ?>
		</h3>
    </div>
    <div class="comments-inner">
	  <?php 
		wp_list_comments(
			array(
			'avatar_size' => 120,
			'style'=> 'div',
			)
		
		);?>
	  </div>
  </div>
	
	<?php 
	if(comments_open()){
	comment_form(
	array(
	'class_form' => '',
		'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
		'title_replay_after' => '</h4>'
	)
	);
}
	?>
</div>