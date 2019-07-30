<?php 
$recent = new WP_Query( array( 
	'type'					=> 'post',
	'posts_per_page'		=> 1,
	'offset'				=> 5,
	'ignore_sticky_posts'	=> 1
) );
if ( $recent->have_posts() ) :
	while ( $recent->have_posts() ) : $recent->the_post();
?>
<div class="row mt-3">
	<div class="col-xs-12 col-xl-6 pl-0 pr-0 mb-3" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
	 	<?php get_template_part( 'templates/content', 'recent-2' ); ?>
	 </div>
	<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
	<!-- End of Recent Posts -->
	<!-- Start of Sub Recent Post -->
	<div class="col-xs-12 col-xl-6" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
		<?php 
			$subRecent = new WP_Query( array( 
				'type'					=> 'post',
				'posts_per_page'		=> 4,
				'offset'				=> 6,
				'ignore_sticky_posts'	=> 1
			 ) );
			if ( $subRecent->have_posts() ) :
				while ( $subRecent->have_posts() ) : $subRecent->the_post();
		 ?>
		<?php get_template_part( 'templates/content', 'sub-recent-2' ) ?>
		<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</div>
 <!-- End of Sub Recent Post -->