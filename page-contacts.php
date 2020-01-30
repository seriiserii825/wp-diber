<?php
/**
 * Template Name: Contatti
 */
get_header();
?>
<?php if(have_posts()): ?>
		<?php the_post(); ?>
    <div class="contacts"></div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<div class="container">
<?php get_footer(); ?>
