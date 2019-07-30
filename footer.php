<!-- End of Container -->
<footer itemscope itemtype="http://schema.org/WPFooter">
	<meta itemprop="name" content="Webpage footer for PUSAT INFO JUDI ONLINE"/>
	<meta itemprop="description" content="Information about imprint and data protection"/>
	<meta itemprop="keywords" content="Imprint, Data Protection, Copyright Data, QR-Code"/>
	<meta itemprop="copyrightYear" content="2017"/>
	<meta itemprop="copyrightHolder" content="TierThree.com"/>
	<?php wp_footer() ?>
	<div class="container-fluid footer-bg text-center">
		<div class="row">
			<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="row mt-5 mb-4">
						<div class="col-12">
							<div class="socials">
								<?php if ( !empty(get_theme_mod( 'facebook' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'facebook' ) ?>">
										<i class="fa fak fa-facebook"></i>
									</a>
								</div>
								<?php endif; ?>
								<?php if ( !empty(get_theme_mod( 'twitter' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'twitter' ) ?>">
										<i class="fa fak fa-twitter"></i>
									</a>
								</div>
								<?php endif; ?>
								<?php if ( !empty( get_theme_mod( 'instagram' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'instagram' ) ?>">
										<i class="fa fak fa-instagram"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'linkedin' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'linkedin' ) ?>">
										<i class="fa fak fa-linkedin"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'youtube' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'youtube' ) ?>">
										<i class="fa fak fa-youtube"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'google+' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'google+' ) ?>">
										<i class="fa fak fa-google-plus-square"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'RSS' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'RSS' ) ?>">
										<i class="fa fak fa-rss-square"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'flicker' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'flicker' ) ?>">
										<i class="fa fak fa-flickr"></i>
									</a>
								</div>
								<?php endif ?>
								<?php if ( !empty( get_theme_mod( 'pinterest' ) ) && get_theme_mod( 'display_social_icons' ) == 1 ): ?>
								<div class="icon-round ml-4 mb-2 pull-left">
									<a itemprop="url" href="<?php echo get_theme_mod( 'pinterest' ) ?>">
										<i class="fa fak fa-pinterest-p"></i>
									</a>
								</div>
								<?php endif ?>
							</div>
						</div>
						<div class="col-12">
							<div class="row text-white"></div>
						</div>
					</div>
				</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<div class="container-fluid footer-bg-2 text-center">
		<h5 class="copyright mb-0 pt-4 pb-4">Copyright 2018 All Right Reserved <a href="<?php echo home_url( ) ?>" itemprop="url" class="text-white"><?php echo force_relative_url(); ?></a></h5>
	</div>
</footer>
</body>
</html>