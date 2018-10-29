<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон страницы с выводом постов
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */

get_header();?>        
<!-- Тут контейнеры -->

<!-- Цикл -->
<?php 
  if( have_posts() ){ while( have_posts() ){ 
    the_post(); 
?>
  <?php the_title(); ?>
  <?php the_permalink(); ?>
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  <?php echo get_the_excerpt(); ?>
<?php 
    }
  } 
  else{
   echo "<h2>Записей нет.</h2>";
  }
?>

<!-- Тут конец контейнеров -->

<?php get_footer(); // Подключаем футер ?>