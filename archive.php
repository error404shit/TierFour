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
		<div class="col-12 col-xl-8 mb-5">
			<!-- Start Search Result Post -->
			<div class="title-content-bg">
				<h3 class="titles p-2 mb-0">
					<?php the_archive_title() ?>
				</h3>
			</div>
			<div class="row mb-5">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post() ?>
						<div class="col-12 mb-3">
							<?php 
								get_template_part( 'templates/content', 'search' );
							 ?>
						</div>
					<?php endwhile ?>
					<?php else: ?>	
						<div class="col-12">
							<?php echo "<h1 class='text-center mt-5'>No Result Found!</h1>"; ?>
						</div>
				<?php endif ?>
			</div>
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
			<!-- End Search Result Post -->
		</div>
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