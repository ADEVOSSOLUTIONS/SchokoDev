<?php

/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон страницы архивов
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
get_header();?>
<h1>
  <?php
    if ( is_day() ) :
      printf( __('Архив постов: %s','twentytwelve'), get_the_date());
    elseif ( is_month() ) :
      printf( __( 'Архив постов: %s','twentytwelve' ), get_the_date( _x('F Y', 'monthly archives date format','twentytwelve')));
    elseif ( is_year() ) :
      printf( __('Архив постов: %s','twentytwelve'), get_the_date( _x('Y','yearly archives date format','twentytwelve')));
    else :
      _e('Archives','twentytwelve');
    endif;
  ?>
</h1>
<?php 
  if (have_posts()) : while (have_posts()) : the_post();
?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_time('F j, Y');?>
<?php 
  if ( has_post_thumbnail() ) { the_post_thumbnail(); }
?>
<?php the_content('');?>
<?php endwhile;
  else: echo '<h2>Извините, ничего не найдено...</h2>'; endif;?>   
<?php // Пагинация
global $wp_query;
$big = 999999999;
  echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'type' => 'list',
    'prev_text'    => __('« Сюда'), 
      'next_text'    => __('Туда »'),
    'total' => $wp_query->max_num_pages
  ));
?>
<?php //get_sidebar();?>
<?php get_footer();?>