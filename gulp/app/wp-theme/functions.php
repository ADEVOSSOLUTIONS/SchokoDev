<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Функции шаблона
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее',
	// 'top_pages' => 'Для страниц'
) );
remove_filter( 'the_content', 'wpautop' );
add_theme_support('post-thumbnails');
set_post_thumbnail_size(254, 190);

if ( function_exists('register_sidebar') )
register_sidebar();

function is_subpage() {
	global $post;

	if ( is_page() && $post->post_parent ) {
		return $post->post_parent;
	} 
	return false;
}
 
function template_path(){
	return get_template_directory_uri();
}
add_shortcode( 'tu', 'template_path' );

function site_url_shortcode(){
	return get_site_url();
}
add_shortcode( 'su', 'site_url_shortcode' );
function last_posts(){
	$args = array(
	  'posts_per_page' => 4,
	  'category'    => 1,
	  'orderby'     => 'date',
	  'order'       => 'DESC',
	  'post_type'   => 'post',
	);
	query_posts( $args );
	$all_content = '';
	// Цикл WordPress
	if( have_posts() ){ 
		  while( have_posts() ){ 
			   the_post();
			   $link = get_the_permalink();
			   $title = get_the_title();
			   $excerpt = get_the_excerpt();
			   $thumb_url = get_the_post_thumbnail_url( $post, "large" );
			   $content = '';
			   $content .= '<div class="one-of-content-display-nine">
			        <div class="null-block">
			          <div class="block-more-display-nine">
			            <a href="';
			   $content .= $link;
			   $content .= '" class="more-display-nine">
			              подробнее
			            </a>
			          </div>
			        </div>

			        <div class="block-image-one-of-content-display-nine">
			          <img src="';
			   $content .= $thumb_url;
			   $content .= '" alt="">
			        </div>
			        <span class="header-more-display-nine">';
			   $content .= $title;
			   $content .= '</span>

			        <span class="text-more-display-nine">';
			   $content .= $excerpt;
			   $content .= '</span>
			      </div>';
			    $all_content .= $content;

			         
			     
		  }
		  wp_reset_query();
	}
	return $all_content;
}
add_shortcode( 'last_posts', 'last_posts' );

?>