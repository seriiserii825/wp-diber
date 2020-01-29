<?php
/**
 * Template Name: Home
 */
get_header();
?>
<div class="main-slider" id="js-main-slider">
    <?php
        $slider = new WP_Query([
            'post_type' => 'slider',
            'posts_per_page' => -1
        ]);
    ?>
    <?php if($slider->have_posts()): ?>
    	<?php while($slider->have_posts()): ?>
    		<?php $slider->the_post(); ?>
            <div class="main-slider__item" style="background-image: url('<?php echo kama_thumb_src('w=1920 &h=1080'); ?>')">
                <div class="main-slider__content-wrap">
                    <div class="main-slider__content">
                        <h3 class="main-slider__title"><?php echo the_title(); ?></h3>

                        <div class="main-slider__text">
                            <?php the_content(); ?>
                        </div>

                        <a class="link" href="<?php echo get_page_link(carbon_get_the_post_meta('crb_slider_link_id')); ?>">
                            <span><?php echo carbon_get_the_post_meta('crb_slider_link'); ?></span>
                            <i class="fas fa-chevron-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<div class="container">
    <?php if(have_posts()): ?>
    	<?php while(have_posts()): ?>
    		<?php the_post(); ?>
            <section class="intro">
                <div class="intro__text" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/intro-bg.jpg');')">
                    <h2 class="title"><?php echo carbon_get_the_post_meta('crb_le_nostre_bire_title'); ?></h2>
                    <p><?php echo carbon_get_the_post_meta('crb_le_nostre_bire_text'); ?></p>
                    <a class="link" href="<?php echo get_page_link(carbon_get_the_post_meta('crb_le_nostre_bire_link_id')); ?>">
                        <span><?php echo carbon_get_the_post_meta('crb_le_nostre_bire_link'); ?></span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
                <div class="intro__img">
                    <?php echo kama_thumb_img('w=910 &h=585', carbon_get_the_post_meta('crb_le_nostre_bire_img')); ?>
                </div>
            </section>
    	<?php endwhile; ?>
    	<?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <div class="categories-block">
        <div class="categories-block__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/1.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Bibite</h4><a class="link" href="#">
                    <span> Vai al catalogo</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="categories-block__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/2.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Acque</h4><a class="link" href="#">
                    <span> Vai al catalogo</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="categories-block__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/3.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Vini</h4><a class="link" href="#">
                    <span> Vai al catalogo</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="categories-block__item"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/4.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Grappe, distillati e liquori</h4><a class="link" href="#">
                    <span> Vai al catalogo</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <h3 class="title title--color services-block__title">I nostri servizi</h3>
    <section class="services-block">
        <div class="services-block__wrap">
            <div class="services-block__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/1.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Servizio specializzato</h2>
                    <div class="services-block__text">I nostri sommelier sono in grado di suggerirti le migliori birre speciali per la tua attività, valorizzando le tue caratteristiche e peculiarità.</div>
                </footer>
            </div>
            <div class="services-block__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/2.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Allestimento locali</h2>
                    <div class="services-block__text">I nostri sommelier sono in grado di suggerirti le migliori birre speciali per la tua attività, valorizzando le tue caratteristiche e peculiarità.</div>
                </footer>
            </div>
            <div class="services-block__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/3.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Fiere ed eventi</h2>
                    <div class="services-block__text">Forniamo postazioni mobili per manifestazioni, sagre, ed eventi con impianti di spillatura, tavoli, ombrelloni, chioschi ed eventuale rimorchio / truck allestito.</div>
                </footer>
            </div>
            <div class="services-block__item"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/4.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">E molto altro ancora</h2>
                    <div class="services-block__text">
                        <ul class="services-block__list">
                            <li>Altissima qualità</li>
                            <li>Consulenze e supporto</li>
                            <li>Partner selezionati</li>
                            <li>Servizio personalizzato</li>
                            <li>Agenti e sommelier qualificati</li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    </section>
	<?php get_footer(); ?>
