<div class="container">
    <footer class="main-footer">
        <div class="main-footer__content">
            <div class="main-footer__info">
                <div class="main-footer__info-wrap">
                    <div class="main-footer__info-item">
                        <h3 class="title title--color">Contatti</h3>
                        <div class="main-footer__contacts">
                            <div class="main-footer__contacts__item">Via Trentino 22, 31029 - Vittorio Veneto (TV) (Zona Industriale S. Giacomo di Veglia)</div>
                            <div class="main-footer__contacts__item">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="main-footer__contacts__item"> Email. <a
                                        href="mailto:diber@diberbevande.it">diber@diberbevande.it</a></div>
                            <div class="main-footer__contacts__item">Tel. <a
                                        href="tel:+390438941681">+39 (0) 438 941681</a></div>
                            <div class="main-footer__contacts__item">
                                <span>Orario di apertura dal lunedì al venerdì:</span>
                                <span> 08.00 - 12.00 e 13.00 - 17.30</span>
                            </div>
                            <div class="main-footer__contacts__item">
                                <span>Sabato:</span>
                                <span>08.30 - 12.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer__info-item">
                        <h3 class="title title--color"> Alcune delle nostre birre speciali</h3>
                        <div class="main-footer__partners"><a class="main-footer__partners-item" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/1.png" alt="">
                            </a><a class="main-footer__partners-item" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/2.png" alt="">
                            </a><a class="main-footer__partners-item" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/3.png" alt="">
                            </a></div>
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
                <p>Rasera Gianni D.I. – Partita Iva: 03083120265.<br> Copyright (C) 2020. Tutti i diritti riservati. <a
                            href="#">Privacy and Cookie policy.</a></p>
            </div>
            <div class="copyright__item">
                <p>Diber Bevandel ha<br> scelto Altuofianco</p><a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/footer-logo.svg" alt="">
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
