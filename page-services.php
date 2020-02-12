<?php
/**
 * Template Name: Servizi
 */
get_header();
?>
<?php if ( have_posts() ): ?>
	<?php the_post(); ?>
    <div class="services-page section">
		<?php $img_url = carbon_get_the_post_meta( 'crb_services_img' ); ?>

        <div class="section__intro" style="background-image: url('<?php echo $img_url; ?>')">
            <h1 class="section__title"><?php echo carbon_get_the_post_meta( 'crb_services_title' ); ?></h1>
        </div>

        <div class="container">
            <section class="services">
                <div class="services__wrap">
			        <?php $services = new WP_Query( [
				        'post_type'      => 'services',
				        'posts_per_page' => 4,
				        'order'          => 'ASC'
			        ] ); ?>
			        <?php if ( $services->have_posts() ): ?>
				        <?php while ( $services->have_posts() ): ?>
					        <?php $services->the_post(); ?>
                            <div class="services-item">
                                <div class="services-item__img"  style="background-image: url('<?php echo kama_thumb_src( 'w=892' ); ?>')"></div>
                                <footer class="services-item__footer">
                                    <h2 class="title"><?php the_title(); ?></h2>

                                    <div class="services-item__text">
								        <?php the_content(); ?>
                                    </div>
                                </footer>
                            </div>
				        <?php endwhile; ?>
				        <?php wp_reset_postdata(); ?>
			        <?php endif; ?>
                </div>
            </section>

        </div>
    </div>
<?php endif; ?>

<div class="container">
	<?php get_footer(); ?>
