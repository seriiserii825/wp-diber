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
                    <h1 class="single-product__title"><?php the_title(); ?>: <?php echo carbon_get_the_post_meta('crb_beer_title'); ?></h1>
                    <div class="single-product__content-wrap">
                        <div class="single-product__text">
                            <?php the_content(); ?>
                        </div>
                        <div class="single-product__link">
                            <a target="_blank" rel="noreferrer"  href="<?php echo carbon_get_the_post_meta('crb_beer_url'); ?>"><?php echo carbon_get_the_post_meta('crb_beer_link');?></a>
                        </div>
                    </div>

                    <div class="single-product__data">
                        <ul class="single-product__list">
                            <?php $productions = carbon_get_the_post_meta('crb_beer_links'); ?>
                            <?php foreach($productions as $item): ?>
                                <li>
                                    <a class="link link--reverse" target="_blank" rel="noreferrer"  href="<?php echo $item['file']; ?>">
                                        <!--<span>--><?php //echo $item['text']; ?><!--</span>-->
                                        <h2><?php echo $item['text']; ?></h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20pt" height="20pt" viewBox="0 0 20 20" version="1.1">
                                            <g id="surface1">
                                                <path d="M 10 0 C 4.476562 0 0 4.476562 0 10 C 0 15.523438 4.476562 20 10 20 C 15.523438 20 20 15.523438 20 10 C 20 4.476562 15.523438 0 10 0 Z M 8.769531 15.628906 L 7.835938 14.699219 L 12.519531 10 L 7.835938 5.300781 L 8.769531 4.371094 L 14.378906 10 Z M 8.769531 15.628906 "/>
                                            </g>
                                        </svg>
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
