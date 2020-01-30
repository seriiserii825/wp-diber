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
                            <p>Birreria storica di Monaco di Baviera. Nel 1634 l'ordine dei frati di San Francesco da Paola comincia la produzione di questa birra rispettando l'editto della purezza del 1516. Generazioni di Birrai hanno realizzato con passione e competenza un prodotto che oggi viene venduto in 70 Paesi.</p>
                        </div>
                        <div class="single-product__link"><a href="#">www.paulaner.it</a></div>
                    </div>
                    <div class="single-product__data">
                        <ul class="single-product__list">
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER HEFE-WEISSBIER NATURTRÜB</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER OKTOBERFEST BIER</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER ORIGINAL MÜNCHNER LAGER</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER SALVATOR</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER ST. THOMAS</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                            <li><a class="link link--reverse" href="#">
                                    <span> PAULANER ORIGINAL MÜNCHNER URTYP</span>
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>

    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>

<?php get_footer(); ?>
