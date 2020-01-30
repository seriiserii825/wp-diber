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
        <?php
        $terms = get_terms( [
	        'taxonomy' => 'type',
	        'hide_empty' => false,
        ] );
        ?>
        <?php foreach($terms as $term): ?>
        <?php
            $term_img = carbon_get_term_meta($term->term_id, 'crb_bevanda_img');
            ?>
            <div class="categories-block__item" style="background-image: url('<?php echo kama_thumb_src('w=430 $h=500', $term_img) ?>')">
                <div class="categories-block__footer">
                    <h4 class="title"><?php echo $term->name; ?></h4>
                    <a class="link" href="<?php echo get_page_link(9); ?>">
                        <span><?php echo carbon_get_post_meta(5, 'crb_alte_bevande_link'); ?></span>
                        <i class="fas fa-chevron-circle-right"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h3 class="title title--color services-block__title"><?php echo carbon_get_post_meta(5, 'crb_nostri_servizi_link'); ?></h3>
    <?php require __DIR__.'/template-parts/services-block.php';?>
<?php get_footer(); ?>
