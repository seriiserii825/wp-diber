<?php
/**
 * Template Name: Birre
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="products">
		<?php $beers = new WP_Query( [
			'post_type'      => 'beer',
			'posts_per_page' => - 1
		] ); ?>
		<?php if ( $beers->have_posts() ): ?>
			<?php while ( $beers->have_posts() ): ?>
				<?php $beers->the_post(); ?>
                <div class="product__item">
                    <a href="<?php the_permalink(); ?>" class="product__img">
						<?php if ( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
                    </a>
                    <h3 class="title"><?php the_title(); ?></h3>
                    <a class="link" href="<?php the_permalink(); ?>">
                        <span> Scopri tutte le birre</span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>
	<?php get_footer(); ?>
