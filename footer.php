<footer class="main-footer">
    <div class="main-footer__content">
        <div class="main-footer__info">
            <div class="main-footer__info-wrap">
                <div class="main-footer__info-item">
                    <h3 class="title title--color"><?php echo carbon_get_theme_option( 'crb_contacts_title' ); ?></h3>
                    <div class="main-footer__contacts">
                        <div class="main-footer__contacts__item"><?php echo carbon_get_theme_option( 'crb_address' ); ?></div>
                        <div class="main-footer__contacts__item">
                            <a href="<?php echo carbon_get_theme_option( 'crb_facebook' ); ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo carbon_get_the_post_meta( 'crb_instagram' ); ?>">
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
                                    href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a></div>
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
                                <img src="<?php echo $beer['image']; ?>" alt="">
                            </a>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.612390166544!2d12.31806391580244!3d45.9590269083091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477913a9bd0bee31%3A0xf64f6a80d8fbe1fc!2zVmlhIFRyZW50aW5vLCAyMiwgMzEwMjkgVml0dG9yaW8gVmVuZXRvIFRWLCDQmNGC0LDQu9C40Y8!5e0!3m2!1sru!2s!4v1580207053086!5m2!1sru!2s"
                        width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

        </div>
        <div class="main-footer__form">
            <h2 class="title title--color">Scrivici</h2>
            <div class="form">
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="oggetto">Oggetto</label>
                        <input type="text" name="oggetto" id="oggetto">
                    </div>
                    <div class="form-group">
                        <label for="messaggio">Messaggio</label>
                        <textarea name="messaggio" id="messaggio"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Invia">
                        <input class="checkbox" type="checkbox" name="check" id="check">
                        <label for="check">Cliccando su invia dichiari di aver preso visione e di accettare la nostra privacy policy</label>
                    </div>
                </form>
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
