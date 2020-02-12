<?php
/**
 * Template Name: Home
 */
get_header();
?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>
        <div class="main-slider" id="js-main-slider">
            <div class="main-slider__item"
                 style="background-image: url('<?php echo carbon_get_the_post_meta( 'crb_intro_img' ); ?>')">
                <div class="main-slider__content-wrap">
                    <div class="main-slider__content">
                        <h1 class="main-slider__title"><?php echo carbon_get_the_post_meta('crb_intro_title'); ?></h1>

                        <div class="main-slider__text">
							<?php echo carbon_get_the_post_meta('crb_intro_text'); ?>
                        </div>

                        <a class="link"
                           href="<?php echo get_page_link( carbon_get_the_post_meta( 'crb_intro_link_url' ) ); ?>">
                            <span><?php echo carbon_get_the_post_meta( 'crb_intro_link_text' ); ?></span>
                            <i class="fas fa-chevron-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<div class="container">
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>
            <section class="intro">
                <div class="intro__text"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/intro-bg.jpg');')">
                    <h2 class="title"><?php echo carbon_get_the_post_meta( 'crb_le_nostre_bire_title' ); ?></h2>
                    <p><?php echo carbon_get_the_post_meta( 'crb_le_nostre_bire_text' ); ?></p>
                    <a class="link"
                       href="<?php echo get_page_link( carbon_get_the_post_meta( 'crb_le_nostre_bire_link_id' ) ); ?>">
                        <span><?php echo carbon_get_the_post_meta( 'crb_le_nostre_bire_link' ); ?></span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
                <div class="intro__img">
					<?php echo kama_thumb_img( 'w=910 &h=585', carbon_get_the_post_meta( 'crb_le_nostre_bire_img' ) ); ?>
                </div>
            </section>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

    <div class="categories-block">
		<?php
		$terms = get_terms( [
			'taxonomy'   => 'type',
			'hide_empty' => false,
		] );
		?>
		<?php foreach ( $terms as $term ): ?>
			<?php
			$term_img = carbon_get_term_meta( $term->term_id, 'crb_bevanda_img' );
			?>
            <div class="categories-block__item"
                 style="background-image: url('<?php echo kama_thumb_src( 'w=430 $h=500', $term_img ) ?>')">
                <div class="categories-block__footer">
                    <h2 class="title"><?php echo $term->name; ?></h2>
                    <a class="link" href="<?php echo get_page_link( 9 ); ?>">
                        <span><?php echo carbon_get_post_meta( 5, 'crb_alte_bevande_link' ); ?></span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
            </div>
		<?php endforeach; ?>
    </div>

    <h3 class="title title--color services-block__title"><?php echo carbon_get_post_meta( 5, 'crb_nostri_servizi_link' ); ?></h3>
    <section class="services-block">
        <div class="services-block__wrap">
			<?php $services = new WP_Query( [
				'post_type'      => 'services',
				'posts_per_page' => 4,
				'order'          => 'ASC'
			] ); ?>
			<?php if ( $services->have_posts() ): ?>
				<?php while ( $services->have_posts() ): ?>
					<?php $services->the_post(); ?>
                    <a href="<?php echo get_page_link( 11 ); ?>" class="services-block__item"
                       style="background-image: url('<?php echo kama_thumb_src( 'w=892' ); ?>')">
                        <footer class="services-block__footer">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <div class="services-block__text">
								<?php echo wpautop(carbon_get_the_post_meta('crb_services_short_text')); ?>
                            </div>
                        </footer>
                    </a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
    </section>

	<?php get_footer(); ?>
