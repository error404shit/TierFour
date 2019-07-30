<article id="post-<?php the_ID() ?>" <?php post_class('p-0 related-2') ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="Blog">
	<div class="col-12 p-0">
		<figure class="related-2-thumb m-0" itemprop="image" itemscope itemType="http://schema.org/ImageObject">
		    <a href="<?php the_permalink(); ?>" itemprop="url">
		    	<link itemprop="url" href="<?php the_post_thumbnail_url(); ?>">
	        	<img class="responsive-img related-2-img" src="<?php if(wp_get_attachment_url( get_post_thumbnail_id() )){ echo wp_get_attachment_url( get_post_thumbnail_id() ); }else{ echo get_template_directory_uri() . "/assets/img/No_image.png"; }  ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/assets/img/No_image.png"; ?>'" itemprop="image"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
		    </a>
		</figure>
	</div>
	<div class="col-12 p-0">
		<header class="related-2-header text-dark">
	        <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" content="<?php echo esc_url( get_permalink( ) ); ?>">	    
	        <meta itemprop="author" content="<?php the_author();?>">
	        <meta itemprop="datePublished" content="<?php the_time('c'); ?> ">
	        <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>">
	        <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
	            <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
	            	<link itemprop="url" href="https://schema.org/itemLogo">
	            </span>
	            <meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
	        </span>
		     <?php the_title( sprintf( '<h3 itemprop="headline" class="recent-title-height mt-1"><a href="%s" itemprop="url" class="h5" title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		    <small class="excerpt-text-size-small"><i class="fa fa-calendar p-1 text-dark" style="font-size:15px"></i>
				<?php $archive_year  = get_the_time('Y'); ?>
				<?php $archive_month = get_the_time('m'); ?>
				<a class="text-dark" href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
					<?php the_time('F Y'); ?>
				</a>
		    </small>
		    <small><?php echo ' ' . comment_count() ?></small>
		</header>
	</div>
</article>