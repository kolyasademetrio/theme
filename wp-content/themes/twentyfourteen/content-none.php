<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Нет записей', 'twentyfourteen' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Хотите создать запись? <a href="%1$s">Создать новую запись здесь</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'По вашему запросу ничего не найдено. Попробуйте ещё раз', 'twentyfourteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'Кажется, мы не можем найти то, что вы ищете. Возможно, поиск может помочь' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
