<?php
/**
 * Template Name: Contatti
 */
get_header();
?>
<h1 class="hide-title">Contattaci</h1>
<?php if(have_posts()): ?>
		<?php the_post(); ?>
    <div class="contacts"></div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<div class="container">
<?php get_footer(); ?>
