<div class="row no-gutters">
	<div class="col-12 p-0">
		<div class="slick-container secondary featured-slick">
			<section class="slider single-item">
			<?php
			$featured = new WP_Query( array( 
				'type' 					=> 'post',
				'posts_per_page'		=> 5,
				'ignore_sticky_posts'	=> 1,
			) );
			if ( $featured->have_posts() ) : ?>
			 	<?php while ( $featured->have_posts() ): $featured->the_post();?>
				<div class="col-xs-12 col-xl-12 hide p-0" itemscope="itemscope" itemtype="http://schema.org/BlogPost">
			 		<?php get_template_part( 'templates/content', 'secondary-featured' ) ?>
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
		</div>
	</div>
</div>