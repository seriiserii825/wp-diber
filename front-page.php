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
<div class="main-slider" id="js-main-slider">
    <div class="main-slider__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider.jpg')">
        <div class="main-slider__content-wrap">
            <div class="main-slider__content">
                <h3 class="main-slider__title">DI.BE.R Bevande.</h3>
                <p class="main-slider__text">Le migliori birre e bevande per ristoranti, pub ed eventi.</p><a class="link" href="#"><span> Scoprile nostre birre</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="main-slider__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider.jpg')">
        <div class="main-slider__content-wrap">
            <div class="main-slider__content">
                <h3 class="main-slider__title">DI.BE.R Bevande.</h3>
                <p class="main-slider__text">Le migliori birre e bevande per ristoranti, pub ed eventi.</p><a class="link" href="#"><span> Scoprile nostre birre</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="main-slider__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/slider.jpg')">
        <div class="main-slider__content-wrap">
            <div class="main-slider__content">
                <h3 class="main-slider__title">DI.BE.R Bevande.</h3>
                <p class="main-slider__text">Le migliori birre e bevande per ristoranti, pub ed eventi.</p><a class="link" href="#"><span> Scoprile nostre birre</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="intro">
        <div class="intro__text" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/intro-bg.jpg')">
            <h2 class="title">Le migliori birre artigianali per la tua attività.</h2>
            <p>Da oltre 40 anni selezioniamo direttamente le migliori birre artigianali italiane ed estere (Germania, Austria, Inghilterra e Belgio). I nostri beer sommelier non solo individuano i migliori birrifici italiani e stranieri, ma sono anche in grado di consigliarti e guidarti nella scelta delle migliori birre per il tuo pubblico. Siamo inoltre in grado di garantire l’esclusività territoriale delle birre speciali più pregiate.</p><a class="link" href="#"><span> Vedi tutte le nostre birre</span><i class="fas fa-chevron-circle-right"></i></a>
        </div>
        <div class="intro__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/intro.jpg" alt=""></div>
    </section>
    <div class="categories-block">
        <div class="categories-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/1.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Bibite</h4><a class="link" href="#"><span> Vai al catalogo</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
        <div class="categories-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/2.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Acque</h4><a class="link" href="#"><span> Vai al catalogo</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
        <div class="categories-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/3.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Vini</h4><a class="link" href="#"><span> Vai al catalogo</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
        <div class="categories-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/categories-block/4.jpg')">
            <div class="categories-block__footer">
                <h4 class="title">Grappe, distillati e liquori</h4><a class="link" href="#"><span> Vai al catalogo</span><i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    </div>
    <h3 class="title title--color services-block__title">I nostri servizi</h3>
    <section class="services-block">
        <div class="services-block__wrap">
            <div class="services-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/1.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Servizio specializzato</h2>
                    <div class="services-block__text">I nostri sommelier sono in grado di suggerirti le migliori birre speciali per la tua attività, valorizzando le tue caratteristiche e peculiarità.</div>
                </footer>
            </div>
            <div class="services-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/2.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Allestimento locali</h2>
                    <div class="services-block__text">I nostri sommelier sono in grado di suggerirti le migliori birre speciali per la tua attività, valorizzando le tue caratteristiche e peculiarità.</div>
                </footer>
            </div>
            <div class="services-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/3.jpg')">
                <footer class="services-block__footer">
                    <h2 class="title">Fiere ed eventi</h2>
                    <div class="services-block__text">Forniamo postazioni mobili per manifestazioni, sagre, ed eventi con impianti di spillatura, tavoli, ombrelloni, chioschi ed eventuale rimorchio / truck allestito.</div>
                </footer>
            </div>
            <div class="services-block__item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/services-block/4.jpg')">
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
    <footer class="main-footer">
        <div class="main-footer__content">
            <div class="main-footer__info">
                <div class="main-footer__info-wrap">
                    <div class="main-footer__info-item">
                        <h3 class="title title--color">Contatti</h3>
                        <div class="main-footer__contacts">
                            <div class="main-footer__contacts__item">Via Trentino 22, 31029 - Vittorio Veneto (TV) (Zona Industriale S. Giacomo di Veglia)</div>
                            <div class="main-footer__contacts__item"><i class="fab fa-facebook-f"></i><i class="fab fa-instagram"></i></div>
                            <div class="main-footer__contacts__item"> Email. <a href="mailto:diber@diberbevande.it">diber@diberbevande.it</a></div>
                            <div class="main-footer__contacts__item">Tel. <a href="tel:+390438941681">+39 (0) 438 941681</a></div>
                            <div class="main-footer__contacts__item"><span>Orario di apertura dal lunedì al venerdì:</span><span> 08.00 - 12.00 e 13.00 - 17.30</span></div>
                            <div class="main-footer__contacts__item"><span>Sabato:</span><span>08.30 - 12.00</span></div>
                        </div>
                    </div>
                    <div class="main-footer__info-item">
                        <h3 class="title title--color"> Alcune delle nostre birre speciali</h3>
                        <div class="main-footer__partners"><a class="main-footer__partners-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/1.png" alt=""></a><a class="main-footer__partners-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/2.png" alt=""></a><a class="main-footer__partners-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/partners/3.png" alt=""></a></div>
                    </div>
                </div>
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.612390166544!2d12.31806391580244!3d45.9590269083091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477913a9bd0bee31%3A0xf64f6a80d8fbe1fc!2zVmlhIFRyZW50aW5vLCAyMiwgMzEwMjkgVml0dG9yaW8gVmVuZXRvIFRWLCDQmNGC0LDQu9C40Y8!5e0!3m2!1sru!2s!4v1580207053086!5m2!1sru!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
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
                <p>Rasera Gianni D.I. – Partita Iva: 03083120265.<br> Copyright (C) 2020. Tutti i diritti riservati. <a href="#">Privacy and Cookie policy.</a></p>
            </div>
            <div class="copyright__item">
                <p>Diber Bevandel ha<br> scelto Altuofianco</p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/footer-logo.svg" alt=""></a>
            </div>
        </div>
    </footer>
</div><!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->

<?php wp_footer(); ?>
</body>
</html>
