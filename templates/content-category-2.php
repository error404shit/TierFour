<article id="post-<?php the_ID(); ?>" <?php post_class('category-post-2'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="Blog">
    <div class="row">
        <div class="col-xs-12 col-xl-6">
        	<figure class="article-thumb" itemprop="image" itemscope itemType="http://schema.org/ImageObject">
                <a href="<?php the_permalink(); ?>" itemprop="url">
                    <link itemprop="url" href="<?php the_post_thumbnail_url(); ?>">
                    <img class="category-post-2-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/assets/img/No_image.png"; ?>'" itemprop="image"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                </a>
            </figure>
        </div>
        <div class="col-xs-12 col-xl-6">
        	<header class="category-header">
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
        	    <?php the_title( sprintf( '<h3 itemprop="headline" class="pb-0 categories-title-height"><a href="%s" itemprop="url" class="h5 sub-recent-title" title="'.get_the_title().'">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        	</header>
            <div class="category-post-content">
                <?php echo "<p class='lead' itemprop='articleBody'>".excerpt(10)."</p>"; ?>
            </div>
        </div>
    </div>
</article>