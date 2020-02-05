<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <div class="main-header__wrap">
            <div class="sandwitch-wrap">
                <div class="sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
            </div>
           <?php wp_nav_menu( [
           	'theme_location'  => 'menu-top',
           	'menu'            => '',
           	'container'       => '',
           	'container_class' => '',
           	'container_id'    => '',
           	'menu_class'      => 'main-menu',
           	'menu_id'         => 'js-main-menu',
           	'echo'            => true,
           	'fallback_cb'     => 'wp_page_menu',
           	'before'          => '',
           	'after'           => '',
           	'link_before'     => '',
           	'link_after'      => '',
           	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
           	'depth'           => 0,
           	'walker'          => '',
           ] ); ?>

            <a class="logo" href="<?php echo home_url(); ?>">
                <?php echo kama_thumb_img('w=170 &h=90', carbon_get_theme_option('crb_logo')); ?>
            </a>

            <ul class="header-socials">
                <li><a target="_blank" href="<?php echo carbon_get_theme_option('crb_facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="<?php echo carbon_get_theme_option('crb_instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</header>
