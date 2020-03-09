<?php
/**
 * Template Name: Alte bevande
 */
get_header();
?>

<h1 class="hide-title">Alte bevande</h1>
<div class="container">
    <div class="alte-bevande" id="js-alte-bevande">
        <ul class="alte-bevande__list" id="js-alte-bevande__list">
			<?php
			$terms = get_terms( [
				'taxonomy'   => 'type',
				'hide_empty' => false,
			] );
			?>
            <?php foreach($terms as $term): ?>
            <?php $term_img = carbon_get_term_meta($term->term_id, 'crb_bevanda_img'); ?>

                <li data-filter=".<?php echo $term->slug; ?>">
                    <div class="alte-bevande__img" style="background-image: url(<?php echo kama_thumb_src('w=420 &h=190', $term_img); ?>)"></div>
                    <h2 class="title"><?php echo $term->name; ?></h2>
                </li>

            <?php endforeach; ?>
        </ul>
        <div class="alte-bevande__content">
            <?php $bevande = new WP_Query([
                'post_type' => 'bevanda',
                'posts_per_page' => -1
            ]); ?>
            <?php if($bevande->have_posts()): ?>
            	<?php while($bevande->have_posts()): ?>
            		<?php $bevande->the_post(); ?>
                    <?php $term = get_the_terms(get_the_ID(), 'type')[0]->slug; ?>
		            <?php $show = carbon_get_the_post_meta('crb_show_link'); ?>
                    <?php
                    $post_link = '';
                    if($show === 'show'){
	                    $post_link = carbon_get_the_post_meta('crb_bevanda_link');
                    }else{
	                    $post_link = '';
                    }
                    ?>
                    <div class="alte-bevande__item mix <?php echo $term; ?>">
                        <a target="_blank" rel="noreferrer"  href="<?php echo $post_link; ?>" class="alte-bevande__img">
                            <?php if(has_post_thumbnail()): ?>
	                            <?php echo kama_thumb_img('w=430'); ?>
                            <?php else: ?>
	                            <?php echo kama_thumb_img('w=430', 287); ?>
                            <?php endif; ?>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <h3 class="title"><?php the_title(); ?></h3>
	                    <?php if($show === 'show'): ?>
                            <a class="link" target="_blank" rel="noreferrer"  href="<?php echo carbon_get_the_post_meta('crb_bevanda_link'); ?>">
                                <span> Visita il sito</span>
                                <img src="<?php echo get_template_directory_uri().'/assets/i/chevron-right.svg'; ?>" alt="">
                            </a>
                        <?php endif; ?>
                    </div>
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
	<?php get_footer(); ?>
