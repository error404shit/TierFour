<article id="post-<?php the_ID() ?>" <?php post_class('news-container') ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" <?php (is_active_sidebar( 'sidebar-0' )) ? '' : 'itemprop="blogPost"' ?>>
	<div class="col-12 pl-0 flex">
	    <small class="excerpt-text-size-small date-items">
	    	<?php the_time( 'g:i a' ) ?>
	    </small>
		<div class="pl-2 pr-2">
		    <?php the_title( sprintf( '<h3 itemprop="headline" class="pb-0 mb-0 h5"><a href="%s" itemprop="url" class=" text-dark" title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</div>
	</div>
</article>