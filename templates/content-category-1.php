<article id="post-<?php the_ID(); ?>" <?php post_class('category-post-1'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="Blog">
    <div class="col-xl-12 p-0">
    	<figure class="article-thumb" itemprop="image" itemscope itemType="http://schema.org/ImageObject">
            <a href="<?php the_permalink(); ?>" itemprop="url">
                <link itemprop="url" href="<?php the_post_thumbnail_url(); ?>">
                <img class="category-post-1-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" onerror="javascript:this.src='<?php echo get_template_directory_uri() . "/assets/img/No_image.png"; ?>'" itemprop="image"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
            </a>
        </figure>
    </div>
    <div class="col-xl-12 p-0">
    	<header class="category-header-1 p-2">
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
    	    <h3 class="h4" itemprop="headline"><?php the_title(); ?></h3>
    	</header>
        <div class="category-post-content-1 p-2">
            <?php echo "<p class='lead' itemprop='articleBody'>".excerpt(20)."</p>"; ?>
            <a class="btn btn-custom" href="<?php the_permalink() ?>" itemprop="url">Read More</a>
        </div>
    </div>
</article>