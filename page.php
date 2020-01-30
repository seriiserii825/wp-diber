<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs-diber
 */

get_header();
?>

<div class="container">
    <?php if(have_posts()): ?>
    	<?php while(have_posts()): ?>
    		<?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>

<?php
get_footer();
