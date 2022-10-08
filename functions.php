<?php

    function the_title_excerpt($before = '', $after = '', $echo = true, $length = false) 
    {
        $title = get_the_title();

        if ( $length && is_numeric($length) ) {
            $title = substr( $title, 0, $length );
        }

        if ( strlen($title)> 0 ) {
            $title = apply_filters('the_title_excerpt', $before . $title . $after, $before, $after);
            if ( $echo )
                echo $title;
            else
                return $title;
        }
    }

	function get_excerpt(){
$excerpt = get_the_excerpt();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 160);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'...';
return $excerpt;
}
   
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 100, 100, true );
	add_image_size( 'single-post-image', 250, 250, true );
}

add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
  
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );


  ?>