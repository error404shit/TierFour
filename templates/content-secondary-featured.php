<article id="post-<?php the_ID() ?>" <?php post_class('secondary-featured p-0') ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="Blog">
	<div class="row">
		<div class="col-12 col-xl-7">
			<figure class="article-featured-thumb m-0" itemprop="image" itemscope itemType="http://schema.org/ImageObject">
			    <a href="<?php the_permalink(); ?>" itemprop="url">
			    	<link itemprop="url" href="<?php the_post_thumbnail_url(); ?>">
			    	<img class="secondary-featured-img" src="<?php if(wp_get_attachment_url( get_post_thumbnail_id() )){ echo wp_get_attachment_url( get_post_thumbnail_id() ); }else{ echo get_template_directory_uri() . "/assets/img/No_image.png"; }  ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/assets/img/No_image.png"; ?>'" itemprop="image"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
			    </a>
			</figure>
		</div>
		<div class="col-12 col-xl-5 mb-3">
			<header class="secondary-featured-header p-3">
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
			    <?php the_title( sprintf( '<h3 itemprop="headline" class="featured-top"><strong><a href="%s" itemprop="url" class="text-white h2" title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></strong></h3>' ); ?>
			    <small class="excerpt-text-size-small featured-calendar"><i class="fa fa-calendar p-1" style="font-size:15px"></i>
					<?php $archive_year  = get_the_time('Y'); ?>
					<?php $archive_month = get_the_time('m'); ?>
					<a class="" href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
						<?php the_time('F Y'); ?>
					</a>
			    </small>
			    <small class="comment-feat"><?php echo ' ' . ' '. comment_count() ?></small>
			</header>
			<div class="pl-3 pr-3 pt-0 pb-0">
				<?php echo "<p class='lead' itemprop='articleBody'>".excerpt(35)."</p>"; ?>
				<a class="btn btn-custom pull-left mt-3" href="<?php the_permalink(); ?>" itemprop="url">Read More</a>
			</div>
		</div>
	</div>
</article>