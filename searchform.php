<form class="my-2 my-lg-0 " role="search" method="get" action="<?php echo home_url('/') ?>">
	<div class="input-group">
		<input class="form-control text-control change py-2 border-right-0 border2 override-search" type="search" value="<?php echo get_search_query(); ?>" id="example-search-input" name="s" title="Search" placeholder="Search">
		<div class="input-group-append">
			<button type="submit" id="searchbutton" class="btn btn-custom" name="submit" value="<?php esc_attr_x('Search', 'submit button') ?>">Search</button>
		</div>
	</div>
</form>