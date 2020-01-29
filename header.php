<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="assets/libs/fontawesome/css/all.min.css">-->
    <!--<link rel="stylesheet" type="text/css" href="assets/css/my.css">-->
	<?php wp_head(); ?>
</head>

<body>
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
            <ul class="main-menu" id="js-main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="nostre-bire.html">Le nostre birre</a></li>
                <li><a href="alte-bevande.html">Altre bevande</a></li>
                <li><a href="services.html">Servizi</a></li>
                <li><a href="about.html">Chi siamo</a></li>
                <li><a href="contacts.html">Contatti</a></li>
            </ul><a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.svg" alt=""></a>
            <ul class="header-socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</header>
