<div class="row">
	<div class="col-xs-12 col-xl-8">
		<div class="slick-container featured-slick">
			<section class="slider single-item mb-0">
				<!-- Start of Main Featured Post -->
				<?php 
				$featured = new WP_Query( array( 
					'type'					=> 'post',
					'posts_per_page'		=> 3,
					'ignore_sticky_posts'	=> 1
				 ) );
				if ( $featured->have_posts() ) :
					while ( $featured->have_posts() ) : $featured->the_post();
				?>
				<div class="col-xl-12 p-0 no-gutters" itemscope="itemscope" itemtype="http://schema.org/BlogPost"> 
					<?php get_template_part( 'templates/content', 'featured' ) ?>
				</div>
				<?php endwhile ?>
			 	<?php else : ?>
			 	<?php if ( current_user_can( 'manage_options' ) ) : ?>
			 		<a href="<?php echo admin_url( 'edit.php' ) ?>"><h2 class="text-center">No Post Yet!</h2></a>
			 	<?php else : ?>
			 		<h2 class="text-center">No Post Yet!</h2>
			 	<?php endif ?>
				<?php endif; wp_reset_postdata(); ?>
			</section>
			<!-- End of Main Featured Post -->
		</div>
	</div>
	<!-- Start of Sub Featured Post -->
	<div class="col-xs-12 col-xl-4" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
		<?php 
		$subFeatured = new WP_Query( array( 
			'type'					=> 'post',
			'posts_per_page'		=> 2,
			'ignore_sticky_posts'	=> 1,
			'offset'				=> 3
		 ) );
		if ( $subFeatured->have_posts() ) :
			while ( $subFeatured->have_posts() ) : $subFeatured->the_post();
		?>	 	
		<?php get_template_part( 'templates/content', 'sub-featured' ) ?>
		<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
	<!-- End of Sub Featured Post -->
</div>