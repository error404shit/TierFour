<?php 
 if ( post_password_required() ) {
 	return;
 }
 ?>
<div id="comments" class="comments-area">
 	<?php if ( have_comments() ) :?> 
 		<h3 class="comment-title mb-5 h3">
 			<?php 
 				printf(
 					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'TierTwo' ) ), 
 					number_format_i18n( get_comments_number() ),
 					'<span>' .get_the_title(). '</span>'
 				 );
 			 ?>
 		</h3>
 		<ul class="comment-list">
 			<?php 
 			$args = array(
 				'walker' 	   		=> null,
 				'max_depth'    		=> '',
 				'style' 	   		=> 'ul',
 				'callback' 	   		=> null,
 				'end-callback' 		=> null,
 				'type'		   		=> 'all',
 				'reply_text'   		=> 'Reply',
 				'page'		   		=> '',
 				'per_page'	   		=> '',
 				'avatar_size'  		=> 50,
 				'reverse_top_level' => null,
 				'reverse_children'  => '',
 				'format'			=> 'html5',
 				'short_ping'		=> false,
 				'echo'				=> true
 			);
 				wp_list_comments( $args );
 			 ?>
 		</ul>
	<?php if ( !comments_open() && get_comments_number() ) :?>
	<p class="np-comments"><?php esc_html_e( 'Comments are closed.', 'TierTwo' ) ?></p>
	<?php endif ?>
 	<?php endif;?>
 	<?php
 	$fields = array(
 		'author' => '<div class"form-group"><label for="author">'. __( 'Name', 'domainreference' ) . '</label><span class="required text-danger">*</span> <input id="author" name="author" type="text" class="form-control form-bg-color" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
 		'email' => '<div class="form-group"><label for="email">'. __( 'Email', 'domainreference' ) . '</label> <span class="required text-danger">*</span><input id="email" name="email" class="form-control form-bg-color" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .'" required="required" /></div>',
 		'url'	=> '<div class="form-group"><label for="url">'. __( 'Website', 'domainreference' ) . '</label><input id="url" class="form-control form-bg-color" type="text" value="'.esc_attr( $commenter['comment_author_url'] ).'"/></div>'
 	);
 	$args = array(
 		'class_submit' 	=> 'btn-comment btn btn-custom pull-left',
 		'label_submit' 	=> __('Post comment'),
 		'comment_field' => '<div class="form-group"><label for="comment">' ._x( 'Comment', 'noun' ) . '</label><textarea id="comment" class="form-control form-bg-color" name="comment" rows="15" required="required"></textarea></div>',
 		'fields' 		=> apply_filters( 'comment_form_default_fields', $fields )
 	); 
 	comment_form( $args ); 
 	?>
</div>