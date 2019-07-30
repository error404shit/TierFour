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
<div class="col-xl-12 mt-3" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
	<?php get_template_part( 'templates/content', 'recent' ); ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
<!-- End of Recent Posts -->
<!-- Start of Sub Recent Post -->
<div class="row">
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
	<div class="col-xl-6" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
	 	<hr>
	 	<?php get_template_part( 'templates/content', 'sub-recent' ) ?>
	</div>
	<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
</div>
 <!-- End of Sub Recent Post -->