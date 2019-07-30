<?php get_header() ?>
<div class="container">
	<div class="row">
		<!-- Start of left Sidebar -->
		<?php if ( get_theme_mod('left_sidebar_controls') == 0 ) : ?>
		<div id="left-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('left_sidebar_controls') == 0 && get_theme_mod('right_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php get_template_part( '/sidebar/sidebar', 'left' ); ?>
		</div>
		<?php endif; ?>
		<!-- End of left Sidebar -->
		<!-- Start of Single Content -->
		<div class="col-xs-12 col-xl-8 mb-5" itemscope itemtype="http://schema.org/Blog">
			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'templates/content', 'single-content' );
				endwhile;
			endif;
			?>
			<!-- Start Related Post -->
			<?php if ( get_theme_mod('related_display') == 0 ): ?>
			<?php 
			global $count;
			$posts = get_posts(  );
			$count = count($posts);
			?>
			<?php if ( $count > 1 ) : ?>
			<div class="title-content-bg">
				<p class="titles p-2 mb-0 h3">Related Posts</p>
			</div>
			<div class="col-12 p-0">
				<?php if ( get_theme_mod( 'related_content_option' ) == 'main' || get_theme_mod( 'related_content_option' ) == '' ) : ?>
					<div class="row">
						<?php include "themes/related-1.php"; ?>
					</div>
				<?php elseif ( get_theme_mod( 'related_content_option' ) == 'secondary' ) : ?>
					<?php include "themes/related-2.php"; ?>
				<?php endif; ?>
			</div>
			<?php endif ?>
			<?php endif; ?>
			<!-- End Related Post -->
			<!-- Start Pagination -->
			<?php 
			global $count;
			$posts = get_posts(  );
			$count = count($posts);
			?>
			<?php if ( $count > 1 ) : ?>
			<div class ="row mb-5 mt-5 ml-0 page-contianer">
				<div class="col-sm-6 page-btn-single prev-left"> 
					<?php
					$subthumbnail = '<img src="'.get_template_directory_uri().'/assets/img/No_image.png'.'" itemprop="image">';
					$prevPost = get_previous_post();
					if ( !empty( $prevPost ) ){
					$prevthumbnail = get_the_post_thumbnail($prevPost->ID);
					 previous_post_link('
						'.( empty($prevthumbnail) ? $subthumbnail : $prevthumbnail ).'<span class="prev">Previous</span>
						<h5 class="post-nav-title-prev" title="'.get_the_title($prevPost->ID).'"><span class="arrow-prev">&laquo;</span>%link</h5>
						', ''.'%title', false);
					}
					?>
				</div>
				<div class="col-sm-6 page-btn-single next-right">
					<?php
					$nextPost = get_next_post();
					if ( !empty( $nextPost ) ){
						$nextthumbnail = get_the_post_thumbnail($nextPost->ID);
						 next_post_link('
							<span class="next">Next</span>'.( empty($nextthumbnail) ? $subthumbnail : $nextthumbnail ).'
							<h5 class="post-nav-title-next" title="'.get_the_title($nextPost->ID).'">%link<span class="arrow-next">&raquo;</span></h5>
							', '%title'.'', false);
					}
					?>
				</div>
			</div>
			<?php endif; ?>
			<!-- End Pagination -->
			<!-- Start Comment Section -->
			<div class="col-12 p-0">
				<?php
				if ( comments_open() ) {
					comments_template();
				}else{
					echo '<h5 class="text-center comment-closed">Sorry, Comments are closed!</h5>';
				}
				?>
			</div>
			<!-- End Comment Section -->
		</div>
		<!-- End of Single Content -->
		<!-- Start of right Sidebar -->
		<?php if ( get_theme_mod('right_sidebar_controls') == 0 ) : ?>
		<div id="right-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('right_sidebar_controls') == 0 && get_theme_mod('left_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php get_template_part( '/sidebar/sidebar', 'right' ); ?>
		</div>
		<?php endif; ?>
		<!-- End of right Sidebar -->
	</div>
</div>
<?php get_footer() ?>