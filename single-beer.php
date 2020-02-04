<?php get_header(); ?>
<div class="container">
    <?php if(have_posts()): ?>
    	<?php while(have_posts()): ?>
    		<?php the_post(); ?>
            <div class="single-product">
                <div class="single-product__image">
				    <?php the_post_thumbnail(); ?>
                </div>
                <div class="single-product__content">
                    <h2 class="single-product__title"><?php the_title(); ?>: <?php echo carbon_get_the_post_meta('crb_beer_title'); ?></h2>
                    <div class="single-product__content-wrap">
                        <div class="single-product__text">
                            <?php the_content(); ?>
                        </div>
                        <div class="single-product__link">
                            <a target="_blank" href="<?php echo carbon_get_the_post_meta('crb_beer_url'); ?>"><?php echo carbon_get_the_post_meta('crb_beer_link');?></a>
                        </div>
                    </div>

                    <div class="single-product__data">
                        <ul class="single-product__list">
                            <?php $productions = carbon_get_the_post_meta('crb_beer_links'); ?>
                            <?php foreach($productions as $item): ?>
                                <li>
                                    <a class="link link--reverse" target="_blank" href="<?php echo $item['file']; ?>">
                                        <span><?php echo $item['text']; ?></span>
                                        <i class="fas fa-chevron-circle-right"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>

<?php get_footer(); ?>
