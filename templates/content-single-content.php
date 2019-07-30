<article id="post-<?php the_ID() ?>" <?php post_class('single-post mb-5') ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="hasPart">
	<div class="col-12 col-md-12 p-0 single-container">
		<?php if ( get_theme_mod('thumbnail_display') == 0 ) : ?>
		<figure class="article-single-page-thumb ml-0 mr-0 mt-0" itemprop="image" itemscope itemType="http://schema.org/ImageObject">
	    	<a href="<?php the_permalink(); ?>" itemprop="url">
	      		<link itemprop="url" href="<?php the_post_thumbnail_url(); ?>">
	            <img class="responsive-img single-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/assets/img/No_image.png"; ?>'" itemprop="image"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
	        </a>
		</figure>	
		<header class="single-header">
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
			<div class="excerpt-text-size-small cats-top date-item">
				<?php $archive_year  = get_the_time('Y'); ?>
				<?php $archive_month = get_the_time('m'); ?>
				<a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
					<?php the_time('F Y'); ?>
				</a>			

			<?php
			$category = get_the_category();
			echo '<ul class="post-categories">';
			if ( !empty( $category[0]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>' . '</li>';
			endif;
			if ( !empty( $category[1]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[1]->term_id) . '">' . $category[1]->cat_name . '</a>' . '</li>';
			endif;
			if ( !empty( $category[2]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[2]->term_id) . '">' . $category[2]->cat_name . '</a>' . '</li>';
			endif;
			echo '</ul>';
			?>
			</div>
			<?php the_title( sprintf( '<h3 itemprop="headline" class="featured-top"><strong><a href="%s" itemprop="url" class="h2 text-white"  title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></strong></h3>' ); ?>
		</header>
	</div>
	<?php endif; ?>
	<?php if ( get_theme_mod( 'thumbnail_display' ) == 1 ) : ?>
		<header>
		    <link itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" href="<?php echo esc_url( get_permalink( ) ); ?>">    
		    <meta itemprop="author" content="<?php the_author();?>">
		    <meta itemprop="datePublished" content="<?php the_time('c'); ?> ">
		    <meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>">
		    <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
	        	<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
	        		<link itemprop="url" href="https://schema.org/itemLogo">
	        	</span>
	      		<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
	        </span>
			<div class="excerpt-text-size-small cats-top date-item">
				<?php $archive_year  = get_the_time('Y'); ?>
				<?php $archive_month = get_the_time('m'); ?>
					<a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
						<?php the_time('F Y'); ?>
					</a>			
			<?php
			$category = get_the_category();
			echo '<ul class="post-categories">';
			if ( !empty( $category[0]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>' . '</li>';
			endif;
			if ( !empty( $category[1]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[1]->term_id) . '">' . $category[1]->cat_name . '</a>' . '</li>';
			endif;
			if ( !empty( $category[2]->cat_name ) ) :
				echo '<li>' . '<a href="' . get_category_link($category[2]->term_id) . '">' . $category[2]->cat_name . '</a>' . '</li>';
			endif;
			echo '</ul>';
			?>
			</div>
			<?php the_title( sprintf( '<h3 itemprop="headline" class="featured-top"><strong><a href="%s" itemprop="url" class="h2 text-dark"  title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></strong></h3>' ); ?>
		</header>
	<?php endif; ?>
	<div class="col-12 col-md-12 p-0">
		<div class="edit-container">
			<?php edit_post_link( 'Edit this', '| ' ); ?>
		</div>
		<div class="lead single-post-content text-dark aritcle-content-img">
			<?php the_content() ?>
		</div>
	</div>
</article>