<?php

if ( ! function_exists('TierFour_setup') ) {
	function TierFour_setup(){

		add_theme_support('post-thumbnails');

		add_theme_support('post-formats', array('aside','image','video'));

		add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));

		add_theme_support( 'title-tag' );

		add_theme_support('custom-background');

		 $args = array(
	        'flex-width'    => true,
	        'width'         => 980,
	        'flex-height'    => true,
	        'height'        => 200
	    );
	    add_theme_support( 'custom-header', $args );
	}
	add_action( 'after_setup_theme', 'TierFour_setup' );
}

/*Include Scripts*/
function tierFour_script_enqueue(){

	// CSS Styles
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/assets/css/fonts/font-awesome.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), '4.1.1', 'all' );
	wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), '4.1.1', 'all' );

	// JS Scripts
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true );
	wp_enqueue_script( 'custom', get_template_directory_uri(). '/assets/js/custom.js', array(), '1.1.1', true );
	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '4.1.1', true );
	wp_enqueue_script( 'slicksjs', get_template_directory_uri() . '/assets/js/slick1.min.js', array(), '4.1.1', true );
	wp_enqueue_script( 'slickscript', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '4.1.1', true );
}

add_action( 'wp_enqueue_scripts', 'tierFour_script_enqueue' );

function TierFour_theme_setup(){

	add_theme_support( 'menus' );
	register_nav_menu( 'main', 'Main Navigation' );

}

add_action( 'init', 'TierFour_theme_setup' );

require get_template_directory() . '/assets/inc/walker.php';
require get_template_directory() . '/assets/inc/customizer.php';
require get_template_directory() . '/assets/inc/breadcrumb.php';
// require get_template_directory() . '/assets/inc/theme-settings.php';

/*Comment Count Function*/
function comment_count(){
	$comments_num = get_comments_number();
	if(comments_open()){
		if( $comments_num == 0 ){
			$comments = __(' 0 Comments');
		} elseif ( $comments_num > 1 ) {
			$comments = $comments_num . __(' Comments');
		} else{
			$comments = __( ' 1 Comment' );
		}
		$comments = '<a class="comment" href="'.get_comments_link().'">' .$comments.'</a>';
	} else{
		$comments = __('Comments are closed!');
	}

	return $comments;
}

/*Excerpt*/
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . '...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

      return $excerpt;
}

/*Sidebar Functions*/
function awsome_widget_setup(){
	
		register_sidebar(
		array(
			'name'			=> 'Sidebar left',
			'id'			=> 'sidebar-left',
			'class'			=> 'custom_left',
			'description' 	=> 'Right Sidebar',
			'before_widget' => '<div class="division mb-3"><aside id="%1$s" class="%2$s" itemscope itemtype="http://schema.org/WPSideBar">',
			'after_widget' 	=> '</aside></div>',
			'before_title' 	=> '<div class="title-content-bg"><h4 class="titles p-1 mb-0 h6">',
			'after_title'	=> '</h4></div>',
		)

	);

		register_sidebar(
		array(
			'name'			=> 'Sidebar right',
			'id'			=> 'sidebar-right',
			'class'			=> 'custom_right',
			'description' 	=> 'Right Sidebar',
			'before_widget' => '<div class="division mb-3"><aside id="%1$s" class="%2$s" itemscope itemtype="http://schema.org/WPSideBar">',
			'after_widget' 	=> '</aside></div>',
			'before_title' 	=> '<div class="title-content-bg"><h4 class="titles p-1 mb-0 h6">',
			'after_title'	=> '</h4></div>',
		)


	);

		register_sidebar( 
		array(
			'name'			=> 'Custom Header Widget Area',
			'id'			=> 'sidebar-header',
			'class'			=> 'custom_header_widget',
			'description'	=> 'This widget is for banner ads only',
			'before_widget'	=> '<aside class="chw-widget">',
			'after_widget'	=> '</aside>',
			'before_title'	=> '<h3 class="chw-title">',
			'after_title'	=> '</h3>'
		)
	);

}

add_action('widgets_init', 'awsome_widget_setup');


// / Blog URL /
function force_relative_url(){
// get host name from URL
preg_match("/^(http:\/\/)?([^\/]+)/i",home_url(), $matches);
$host = $matches[2];
// get last two segments of host name
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
return strtoupper($matches[0]);
}

/* Pagination */

function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<nav class='pagination-nav' aria-label='Page navigation example'><ul class=\"pagination center-align\">";
         // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class=\"mr-2 page-item waves-effect\"><a class='page-link' href='".get_pagenum_link(1)."'><i class='mr-2 fa fa-chevron-left text-white' style='font-size:15px'></i></a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li class=\"mr-2 page-item waves-effect\"><a class='page-link' href='".get_pagenum_link($paged - 1)."'><i class='mr-2 fa fa-chevron-left text-white' style='font-size:15px'></i></a></li>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"page-item mr-2 active\"><a href=\"\" class=\"page-link white-text\">".$i."</a></li>":"<li class=\"page-item mr-2 waves-effect\"><a class='page-link' href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<li class=\"page-item waves-effect\"><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\"><i class='fa fa-chevron-right' style='font-size:15px'></i></a></li>";  
         // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class=\"page-item waves-effect\"><a class='page-link' href='".get_pagenum_link($pages)."'>Last &raquo;</a><li>";
         // echo "</ul></nav>\n";
     }
}


/*Hentry Function*/
function post_class_remove_hentry( $post_class ) {
        $post_class = array_diff( $post_class, array( 'hentry' ) );
        return $post_class;
}


/**
 * Menu fallback. Link to the menu editor if that is useful.
 *
 * @param  array $args
 * @return string
 */
function link_to_menu_editor( $args )
{
    if ( ! current_user_can( 'manage_options' ) )
    {
        return;
    }

    // see wp-includes/nav-menu-template.php for available arguments
    extract( $args );

    $link = $link_before
        . '<a class="nav-link" href="' .admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu' . $after . '</a>'
        . $link_after;

    // We have a list
    if ( FALSE !== stripos( $items_wrap, '<ul' )
        or FALSE !== stripos( $items_wrap, '<ol' )
    )
    {
        $link = "<li class='nav-item'>$link</li>";
    }

    $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
    if ( ! empty ( $container ) )
    {
        $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
    }

    if ( $echo )
    {
        echo $output;
    }

    return $output;
}

/**
 * Remove parts of the Options menu we don't use.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function de_register( $wp_customize ) {
    $wp_customize->remove_control('display_header_text');
}
add_action( 'customize_register', 'de_register', 11 );