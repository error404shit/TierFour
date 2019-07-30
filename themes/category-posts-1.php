<!-- Start of Sub Recent Post -->
<div class="row">
	<?php
	if (  get_theme_mod( 'category_post_selection' ) != '') {
		$subRecent = new WP_Query( array( 
			'type'					=> 'post',
			'posts_per_page'		=> 6,
			'cat'					=> intval( get_theme_mod( 'category_post_selection', 1 ) ),
			'ignore_sticky_posts'	=> 1
		) );
	}else{
		$subRecent = new WP_Query( array( 
			'type'					=> 'post',
			'posts_per_page'		=> 6,
			'offset'				=> 10,
			'ignore_sticky_posts'	=> 1
		) );
	}
		if ( $subRecent->have_posts() ) :
			while ( $subRecent->have_posts() ) : $subRecent->the_post();
	?>
	<div class="col-xs-12 col-xl-4 pl-3 pr-3 mt-3" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
		<?php get_template_part( 'templates/content', 'category-1' ); ?>
	</div>
	<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
</div>
<!-- End of Sub Recent Post -->