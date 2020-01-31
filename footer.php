<footer class="main-footer">
    <div class="main-footer__content">
        <div class="main-footer__info">
            <div class="main-footer__info-wrap">
                <div class="main-footer__info-item">
                    <h3 class="title title--color"><?php echo carbon_get_theme_option( 'crb_contacts_title' ); ?></h3>
                    <div class="main-footer__contacts">
                        <div class="main-footer__contacts__item"><?php echo carbon_get_theme_option( 'crb_address' ); ?></div>
                        <div class="main-footer__contacts__item">
                            <a target="_blank" href="<?php echo carbon_get_theme_option( 'crb_facebook' ); ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a target="_blank" href="<?php echo carbon_get_theme_option( 'crb_instagram' ); ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="main-footer__contacts__item"> Email. <a
                                    href="mailto:<?php echo carbon_get_theme_option( 'crb_email' ); ?>"><?php echo carbon_get_theme_option( 'crb_email' ); ?></a>
                        </div>
						<?php
						$phone       = carbon_get_theme_option( 'crb_phone' );
						$phone_clear = clear_phone( $phone );
						?>
                        <div class="main-footer__contacts__item">Tel. <a
                                    href="tel:+<?php echo $phone_clear; ?>"><?php echo $phone; ?></a></div>
                        <div class="main-footer__contacts__item">
                            <span>Orario di apertura dal lunedì al venerdì:</span>
                            <span><?php echo carbon_get_theme_option( 'crb_orar_monday' ); ?></span>
                        </div>
                        <div class="main-footer__contacts__item">
                            <span>Sabato:</span>
                            <span><?php echo carbon_get_theme_option( 'crb_orar_sunday' ); ?></span>
                        </div>
                    </div>
                </div>
                <div class="main-footer__info-item">
                    <h3 class="title title--color"><?php echo carbon_get_theme_option( 'crb_special_beer_title' ); ?></h3>
                    <div class="main-footer__partners">
						<?php $special_beers = carbon_get_theme_option( 'crb_special_beer_images' ); ?>
						<?php foreach ( $special_beers as $beer ): ?>
                            <a class="main-footer__partners-item" href="#">
                                <span class="main-footer__partners-item-front">
                                    <img src="<?php echo $beer['image']; ?>" alt="">
                                </span>
                                <span class="main-footer__partners-item-back">
                                    <img src="<?php echo $beer['image']; ?>" alt="">
                                </span>
                            </a>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.it/maps/embed?pb=!1m18!1m12!1m3!1d2773.612390166544!2d12.31806391580244!3d45.9590269083091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477913a9bd0bee31%3A0xf64f6a80d8fbe1fc!2zVmlhIFRyZW50aW5vLCAyMiwgMzEwMjkgVml0dG9yaW8gVmVuZXRvIFRWLCDQmNGC0LDQu9C40Y8!5e0!3m2!1sru!2s!4v1580402534690!5m2!1sru!2s"
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

        </div>
        <div class="main-footer__form">
            <h2 class="title title--color">Scrivici</h2>
            <div class="form">
				<?php echo do_shortcode( '[contact-form-7 id="160" title="Modulo di contatto"]' ); ?>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="copyright__item">
			<?php echo wpautop( carbon_get_theme_option( 'crb_copyright' ) ) ?>
        </div>
        <div class="copyright__item">
            <div class="copyright_description">
				<?php echo carbon_get_theme_option( 'crb_copyright_description' ); ?>
            </div>
            <a href="<?php echo carbon_get_theme_option( 'crb_altuofianco_link' ); ?>" target="_blank">
                <img src="<?php echo carbon_get_theme_option( 'crb_altuofianco_img' ) ?>" alt="">
            </a>
        </div>
    </div>
    <a href="#" id="js-arrow-up" class="arrow-up">
        <i class="fas fa-arrow-circle-up"></i>
    </a>
</footer>
</div>
</div><!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->

<?php wp_footer(); ?>
</body>
</html>

