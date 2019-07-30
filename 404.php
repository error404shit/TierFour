<?php get_header() ?>
<!-- Start Categories and Widgets -->
<div class="container">
	<div class="row">
		<!-- Start 404 Page -->
		<div class="col-xl-12 text-center mb-5 page-404">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" class="mx-auto d-block page-404" alt="error-404-outlet" title="Error 404">
			<a href="<?php echo home_url() ?>" class="btn btn-custom pt-3 pb-3 pl-5 pr-5 mt-3 font-404">BACK TO HOME</a>
		</div>
		<!-- End 404 Page -->
	</div>
</div>
<?php get_footer() ?>