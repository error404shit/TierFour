<?php get_header() ?>
<div class="container">
	<?php if ( get_theme_mod( 'page_option' ) == 1 ) : ?>
	<div class="row">
		<!-- Start of left Sidebar -->
		<?php if ( get_theme_mod('left_sidebar_controls') == 0 ) : ?>
		<div id="left-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('left_sidebar_controls') == 0 && get_theme_mod('right_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php get_template_part( '/sidebar/sidebar', 'left' ); ?>
		</div>
		<?php endif; ?>
		<!-- End of left Sidebar -->
		<div class="col-12 col-xl-8 mb-5">
			<?php endif; ?>
				<main id="main" class="site-main p-3" role="main">
					<header class="page-header">
						<div class="title-content-bg">
							<h3 class="titles p-2 mb-0"><?php the_title() ?></h3>
						</div>
					</header>
					<section class="pages mt-4 mb-4">
						<div class="row aritcle-content-img">
							<div class="col-12 xl-5">
								<?php if ( have_posts() ): ?>
									<?php while ( have_posts() ) : the_post() ?>
										<?php the_content(  ) ?>
									<?php endwhile ?>
								<?php endif ?>
							</div>
						</div>
					</section>
				</main>
			<?php  if ( get_theme_mod( 'page_option' ) == 1 ) : ?>
		</div>
		<!-- Start of right Sidebar -->
		<?php if ( get_theme_mod('right_sidebar_controls') == 0 ) : ?>
		<div id="right-sidebar" class="col-xs-12 mb-5 <?php if ( get_theme_mod('right_sidebar_controls') == 0 && get_theme_mod('left_sidebar_controls') == 1 ) { echo 'col-xl-4'; }else{ echo 'col-xl-2'; } ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php get_template_part( '/sidebar/sidebar', 'right' ); ?>
		</div>
		<?php endif; ?>
		<!-- End of right Sidebar -->
	</div>
	<?php endif; ?>
</div>
<?php get_footer() ?>