<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон отдельного поста
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
get_header();?> 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>

  <?php $id = get_the_ID(); ?>
  <?php the_title();?>
  <?php the_content();?>
  <?php endwhile;?>             
<?php
  // Если нужны похожие статьи, без текущей
  $args = array(
    'numberposts' => 4,
    'orderby'     => 'rand',
    'order'       => 'DESC',
    'exclude'     => array($id),
  );

  $posts = get_posts( $args );

  foreach($posts as $post){ setup_postdata($post);
  ?>
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  <?php the_title(); ?> 
  <?php echo get_the_excerpt(); ?>
<?php
  }
  wp_reset_postdata(); 
?>
<?php get_footer();?>