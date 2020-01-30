<?php
/**
 * Template Name: Servizi
 */
get_header();
?>
<div class="services-page section">
    <?php $img_url = carbon_get_the_post_meta('crb_services_img'); ?>

	<div class="section__intro" style="background-image: url('<?php echo $img_url; ?>')">
		<h2 class="section__title"><?php echo carbon_get_the_post_meta('crb_services_title'); ?></h2>
	</div>

	<div class="container">
		<?php require __DIR__.'/template-parts/services-block.php';?>
	</div>
</div>

<div class="container">
<?php get_footer(); ?>
