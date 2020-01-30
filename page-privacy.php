<?php
/**
 * Template Name: Privacy
 */
get_header();
?>
<div class="privacy-page">
	<div class="container">
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
		<?php endif; ?>
    </div>
</div>
<div class="container">
<?php get_footer(); ?>
