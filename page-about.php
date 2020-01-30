<?php
/**
 * Template Name: Chi si amo
 */
get_header();
?>
<?php if ( have_posts() ): ?>
	<?php the_post(); ?>
    <div class="about section">
		<?php $img_url = carbon_get_the_post_meta( 'crb_services_img' ); ?>

        <div class="section__intro" style="background-image: url('<?php echo $img_url; ?>')">
            <h2 class="section__title"><?php echo carbon_get_the_post_meta( 'crb_services_title' ); ?></h2>
        </div>

        <div class="container">
            <div class="about__content">
                <div class="about__item">
                    <div class="about__big-item"
                         style="background-image: url(<?php echo carbon_get_the_post_meta( 'crb_grande_blocco_image' ); ?>)">
                        <div class="about__big-item-content">
							<?php echo carbon_get_the_post_meta( 'crb_about_block_big' ); ?>
                        </div>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__small-item">
						<?php echo carbon_get_the_post_meta( 'crb_about_block_small_1' ); ?>
                    </div>
                    <div class="about__small-item">
						<?php echo carbon_get_the_post_meta( 'crb_about_block_small_2' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container">
	<?php get_footer(); ?>
