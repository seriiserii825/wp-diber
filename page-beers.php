<?php
/**
 * Template Name: Birre
 */
?>

<?php get_header(); ?>
<h1 class="hide-title">Le nostre birre</h1>
<div class="container">
    <div class="alte-bevande" id="js-alte-bevande">
        <ul class="alte-bevande__list" id="js-alte-bevande__list">
			<?php
			$terms = get_terms( [
				'taxonomy'   => 'country',
				'hide_empty' => false,
			] );
			?>
			<?php foreach ( $terms as $term ): ?>
				<?php $term_img = carbon_get_term_meta( $term->term_id, 'crb_bevanda_img' ); ?>

                <li data-filter=".<?php echo $term->slug; ?>">
                    <div class="alte-bevande__img"
                         style="background-image: url(<?php echo kama_thumb_src( 'w=420 &h=190', $term_img ); ?>)"></div>
                    <h2 class="title"><?php echo $term->name; ?></h2>
                </li>

			<?php endforeach; ?>
        </ul>
        <div class="alte-bevande__content">
			<?php $bevande = new WP_Query( [
				'post_type'      => 'beer',
				'posts_per_page' => - 1
			] ); ?>
			<?php if ( $bevande->have_posts() ): ?>
				<?php while ( $bevande->have_posts() ): ?>
					<?php $bevande->the_post(); ?>
					<?php $term = get_the_terms( get_the_ID(), 'country' )[0]->slug; ?>
                    <div class="alte-bevande__item mix <?php echo $term; ?>">
                        <a href="<?php the_permalink(); ?>" class="alte-bevande__img">
							<?php if ( has_post_thumbnail() ): ?>
								<?php echo kama_thumb_img( 'w=430' ); ?>
							<?php else: ?>
								<?php echo kama_thumb_img( 'w=430', 287 ); ?>
							<?php endif; ?>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <a class="link" href="<?php the_permalink_rss(); ?>">
                            <span> Scopri tutte le birre</span>
                            <img src="<?php echo get_template_directory_uri().'/assets/i/chevron-right.svg'; ?>" alt="">
                        </a>
                    </div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
    </div>
	<?php get_footer(); ?>
