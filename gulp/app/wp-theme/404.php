<?php
/**
 * Шаблон для разработки от студии Cava Art Studio
 * Шаблон 404 ошибки
 * 2017
 * @package WordPress
 * @subpackage cava-theme
 */
get_header(); // Подключаем хедер ?> 
<h1>Страница не найдена</h1>
<a href="<?php echo get_site_url(); ?>">
	<h2>Вернуться на главную</h2>
</a>
<?php get_sidebar();  // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>