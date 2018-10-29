<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон обычной страницы
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
get_header();?> 
<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

<?php the_content();?>
<?php endwhile;?>     
<?php get_footer();?>