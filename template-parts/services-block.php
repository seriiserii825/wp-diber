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
                <div class="services-block__item"
                     style="background-image: url('<?php echo kama_thumb_src( 'w=892' ); ?>')">
                    <footer class="services-block__footer">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <div class="services-block__text">
							<?php the_content(); ?>
                        </div>
                    </footer>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </div>
</section>

