<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="canonical" href="currentpermalink"> 
	<link rel="alternate" href="site-domain/lang" hreflang="locale_code" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head() ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" itemprop="mainContentOfPage">
<!-- Start of Container -->
<div class="container">
	<!-- Start of Logo -->
	<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<meta itemprop="name" content="TierFour">
		<meta itemprop="description" content="TierFour Website">
		<div class="row no-gutters bg-top-nav">
			<div class="col-12 p-2">
				<div class="loggo">
					<?php if ( get_theme_mod( 'site_title_option' ) == 'logo-only' ) : ?>
					<a href="<?php echo home_url() ?>">
						<img src="<?php echo get_theme_mod( 'logo' ) ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/img/tier-.png"; ?>'" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" itemprop="image" title="TierFour">
						<h1 class="sr-only site-title" itemprop="headline">
							<a  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
					</a>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'site_title_option' ) == 'text-only' ||  get_theme_mod( 'site_title_option' ) == '' ) : ?>
						<h1 class="site-title" itemprop="headline">
							<a style="color:#<?php echo get_theme_mod( 'header_textcolor' );?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
					<?php $description = get_bloginfo( 'description', 'display' );?>
					<?php endif; ?>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<h2 class="h6" itemprop="description" style="color:#<?php echo get_theme_mod( 'header_textcolor' );?>"><?php echo $description; ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<!-- <div class="col-xl-8"></div> -->
		</div>	
	</header>
	<!-- End of Logo -->
</div>
<!-- Start of Navigation -->
<div class="container-fluid <?php if ( get_theme_mod( 'navigation-style' ) == 0 || get_theme_mod( 'navigation-style' ) == '' ) { echo 'bg-light'; } ?> ">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
			<!-- <a class="navbar-brand" href="<?php echo home_url(  ) ?>"><i class="fa fa-home text-white p-0" style="font-size:35px"></i></a> -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span><i class="fa fa-reorder" style="font-size:24px"></i></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<?php 
					wp_nav_menu( array(
						'theme_location'  => 'main',
						'container'       => false,
						'menu_class'      => 'nav navbar-nav mr-auto mt-2 mt-lg-0',
						'depth'           => 0,
						'fallback_cb'	  => 'link_to_menu_editor',
						'walker'          => new Walker_Nav()
					) );
				 ?>
				<form class="form-inline my-2 my-lg-0 d-none d-lg-block d-sm-none p-2" role="search" method="get" action="<?php echo home_url('/') ?>">
					<div class="input-group">
					    <input class="form-control form-control-sm change py-2 border-right-0 border2" type="search" value="<?php echo get_search_query(); ?>" id="example-search-input-1" name="s" title="Search" placeholder="Search...">
					    <div class="input-group-append">
					    	<span class="input-group-text bg-search-btn border3 override-search"><i class="fa fa-search text-white"></i></span>
					    </div>
					</div>
				</form>
			</div>
		</nav>
	</div>
</div>
<!-- End of Navigation -->
<!-- Start of Header Image -->
<div class="container"><img class="header-image mt-1 mb-1" src="<?php header_image() ?>" itemprop="image" height="<?php echo get_custom_header()->height; ?>"></div>
<!-- End of Header Image -->
<!-- Start News -->
<?php if ( is_404() || !is_front_page() ) : ?>
<?php else : ?>
<?php if ( get_theme_mod( 'news_option' ) == 0 ) : ?>
<div class="container mb-3">
	<div class="row no-gutters">
		<div class="col-xl-2 marquee-news-flex">
			<p class="h5 text-center mb-0 p-3"><span><i class="fa fa-bolt"></i></span>&nbsp;BREAKING NEWS</p>
		</div>
		<div class="col-xl-10 news-bg">
			<marquee class="pt-3 m-auto" behavior="scroll" scrollamount="8" hspace="500px" onmouseover="this.stop()" onmouseout="this.start()">
				<div class="flex">
					<?php 
						$news = new WP_Query( array( 
							'type'					=> 'post',
							'posts_per_page'		=> 6,
							'ignore_sticky_posts'	=> 1
						 ) );
						if ( $news->have_posts() ) :
							while ( $news->have_posts() ) : $news->the_post();
					?>
					<?php 
					 	get_template_part( 'templates/content', 'news' );
					?>
					<?php endwhile ?> 
				</div>
				<?php endif ?>
			</marquee>
		</div>
	</div>
</div>
<?php endif ?>
<?php endif ?>
<!-- End News -->
<!-- Start Banner -->
<?php if ( is_404() ) : ?>
<?php else : ?>
<div class="container">
	<div id="header-widget" class="header-widget-container row no-gutters" itemscope itemtype="http://schema.org/WPSideBar">
		<?php 
			get_template_part( '/sidebar/sidebar', 'header-widget' );
		 ?>
	</div>
</div>
<?php endif ?>
<!-- End banner -->
<!-- Start Breadcrumb -->
<?php 
if ( is_home() || is_front_page() || !is_page() && is_404() ) {
// }elseif (is_404()) {					
}else {
?>
<div class="container mb-4">
	<div class="breadcrumb"><?php echo custom_breadcrumbs(); ?></div>
</div>
<?php } ?>
<!-- End Breadcrumb -->
<!-- Scroll Top -->
<div class="container">	
	<button id="btn-scroll-top" class="scroll-top-arrow" style="display: none;">
		<i class="fa fa-chevron-up text-white" style="font-size:24px"></i>
	</button>
</div>