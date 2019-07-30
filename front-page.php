<?php get_header() ?>
<main role="main" itemscope itemtype="http://schema.org/Blog">
	<!-- Start of Container -->
	<div class="container">
		<?php if ( get_theme_mod( 'slider_option' ) == 'main' || get_theme_mod( 'slider_option' ) == '' ) : ?>
		<?php include "themes/slider-1.php" ?>
		<?php elseif ( get_theme_mod( 'slider_option' ) == 'secondary' ) : ?>
		<!-- Start of Secondary Featured Post -->
		<?php include "themes/slider-2.php" ?>
		<!-- End of Secondary Featured Post -->
		<?php endif; ?>
		<!-- Start of Main Content -->
		<div class="row">
			<?php if ( get_theme_mod('left_sidebar_controls') == 0 ) : ?>
			<!-- Start of left Sidebar -->
			<div id="left-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('left_sidebar_controls') == 0 && get_theme_mod('right_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
				<?php get_template_part( '/sidebar/sidebar', 'left' ); ?>
			</div>
			<!-- End of left Sidebar -->
			<?php endif; ?>
			<!-- Start of Content -->
			<div class="col-xs-12 col-xl-8 mb-5">
				<?php 
					global $count;
					$posts = wp_count_posts(); 
					$count = $posts->publish;
				?>
				<?php if ( $count > 10 ) { ?>
					<!-- Start of Recent Posts -->
					<div class="title-content-bg">
						<p class="titles p-2 mb-0 h3">Recent Posts</p>
					</div>
					<?php if ( get_theme_mod( 'recent_posts_option' ) == 'main' || get_theme_mod( 'recent_posts_option' ) == '' ) : ?>
					<?php include "themes/recent-posts-1.php" ?>
					<?php elseif ( get_theme_mod( 'recent_posts_option' ) == 'secondary' ) : ?>
					<?php include "themes/recent-posts-2.php" ?>
					<?php endif ?>
					<!-- End of Recent Posts -->
					<!-- Start of Category -->
					<div class="title-content-bg mt-3">
						<p class="titles p-2 mb-0 h3">
							<?php if ( get_theme_mod( 'category_post_selection' ) != '' ) { echo ucfirst( get_cat_name( get_theme_mod( 'category_post_selection' ) ) ); } else{ echo "Category"; } ?> 
						</p>
					</div>
					<?php if ( get_theme_mod( 'category_posts_option' ) == 'main' || get_theme_mod( 'category_posts_option' ) == '' ) : ?>
					<?php include "themes/category-posts-1.php" ?>
					<?php elseif ( get_theme_mod( 'category_posts_option' ) == 'secondary' ) : ?>
					<?php include "themes/category-posts-2.php" ?>
					<?php endif ?>
					<!-- End of Category -->
				<?php }else{ ?>
					<!-- Start of Default -->
					<div class="col-12 mb-5">
						<div class="title-content-bg">
							<h3 class="titles p-2 mb-0">Posts</h3>
						</div>
						<?php 
							$default = new WP_Query( array( 
								'type' 					=> 'post',
								'posts_per_page'		=> -1,
								'ignore_sticky_posts'	=> 1,
							) );
							  if ( $default->have_posts() ) : ?>
							<?php while ( $default->have_posts() ) : $default->the_post() ?>
								<div class="col-12 xl-12 mb-3">
									<?php 
									get_template_part( 'templates/content', 'recent' );
									 ?>
								 </div>
							<?php endwhile ?>
							<?php else: ?>	
								<div class="col-12 col-xl-12">
									<?php echo "<h1 class='text-center mt-5'>No Post Found!</h1>"; ?>
								</div>
						<?php endif ?>
						<!-- Start Pagination -->
					    <div class="row col-xs-12 col-sm-12 col-xl-12">
					        <div class="con-layout">    
						        <?php 
						        global $wp_query;
						        pagination($wp_query->max_num_pages, 3);
						        ?>
					        </div>
					    </div>
					    <!-- End Pagination -->
					</div>
				<!-- End of Default -->
				<?php }; ?>
			</div>
			<!-- End of Content -->
			<?php if ( get_theme_mod('right_sidebar_controls') == 0 ) : ?>
			<!-- Start of right Sidebar -->
			<div id="right-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('right_sidebar_controls') == 0 && get_theme_mod('left_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
				<?php get_template_part( '/sidebar/sidebar', 'right' ); ?>
			</div>
			<!-- End of right Sidebar -->
			<?php endif; ?>
		</div>
		<!-- End of Main Content -->
	</div>
	<!-- Start of Container -->
</main>
<?php get_footer() ?>