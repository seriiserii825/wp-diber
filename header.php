<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
				<?php echo kama_thumb_img( 'w=170 &h=90', carbon_get_theme_option( 'crb_logo' ) ); ?>
            </a>

            <ul class="header-socials">
                <li>
                    <a target="_blank" rel="noreferrer" href="<?php echo carbon_get_theme_option( 'crb_facebook' ); ?>">
                        <svg width="10" height="21" viewBox="0 0 10 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M2.16987 15.59C2.16987 13.9769 2.16056 12.3638 2.17918 10.7507C2.17918 10.4773 2.1047 10.3952 1.82541 10.4044C1.31337 10.4226 0.801335 10.4044 0.279988 10.4135C0.075173 10.4226 -0.00861499 10.3588 0.000694781 10.1492C0.0100046 9.14667 0.0100046 8.13506 0.000694781 7.13256C0.000694781 6.94118 0.0565537 6.87738 0.261369 6.87738C0.782716 6.8865 1.31337 6.85916 1.83472 6.8865C2.14194 6.90472 2.1978 6.79536 2.1978 6.52195C2.17918 5.75641 2.17918 4.99086 2.1978 4.22532C2.21642 3.28662 2.47709 2.41171 3.04499 1.65528C3.76184 0.689235 4.78592 0.251781 5.96826 0.197099C7.17853 0.142417 8.39811 0.169758 9.61769 0.160645C9.78527 0.160645 9.84113 0.215326 9.84113 0.379372C9.83182 1.4001 9.83182 2.41171 9.84113 3.43243C9.84113 3.61471 9.78527 3.66939 9.59907 3.66939C9.01256 3.66027 8.42604 3.66939 7.84883 3.66939C7.06681 3.66939 6.60133 4.06127 6.55478 4.8177C6.51754 5.4192 6.54547 6.02982 6.52685 6.64043C6.51754 6.85916 6.65718 6.84093 6.79683 6.84093C7.68126 6.84093 8.575 6.85004 9.45943 6.83181C9.7201 6.83181 9.80389 6.8865 9.77596 7.15079C9.66424 8.1624 9.57114 9.17402 9.47804 10.1947C9.45942 10.4226 9.34771 10.4681 9.14289 10.4681C8.44466 10.459 7.73712 10.459 7.03888 10.4681C6.53616 10.4681 6.5827 10.3952 6.5827 10.8965C6.5827 14.0589 6.5734 17.2122 6.59201 20.3747C6.59201 20.7119 6.50823 20.7939 6.17308 20.7848C4.97211 20.7665 3.76184 20.7574 2.56088 20.7848C2.22573 20.7939 2.16987 20.6754 2.16987 20.3838C2.17918 18.7707 2.16987 17.1758 2.16987 15.59Z"
                                  fill="#008BCF"/>
                        </svg>
                    </a>
                </li>
                <li><a target="_blank" rel="noreferrer"
                       href="<?php echo carbon_get_theme_option( 'crb_instagram' ); ?>">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2167 1.89167C14.0814 1.89167 14.4177 1.90417 15.55 1.95417C16.5971 2 17.1632 2.17083 17.5421 2.31667C18.0444 2.50833 18.4019 2.73333 18.7765 3.1C19.1511 3.46667 19.3852 3.81667 19.5768 4.30833C19.7215 4.67917 19.9003 5.23333 19.9471 6.25833C19.9982 7.36667 20.0109 7.69583 20.0109 10.5C20.0109 13.3042 19.9982 13.6333 19.9471 14.7417C19.9003 15.7667 19.7257 16.3208 19.5768 16.6917C19.381 17.1833 19.1511 17.5333 18.7765 17.9C18.4019 18.2667 18.0444 18.4958 17.5421 18.6833C17.1632 18.825 16.5971 19 15.55 19.0458C14.4177 19.0958 14.0814 19.1083 11.2167 19.1083C8.35194 19.1083 8.01567 19.0958 6.88339 19.0458C5.83626 19 5.27012 18.8292 4.89128 18.6833C4.38899 18.4917 4.03143 18.2667 3.65684 17.9C3.28226 17.5333 3.04814 17.1833 2.85659 16.6917C2.71186 16.3208 2.53308 15.7667 2.48626 14.7417C2.43518 13.6333 2.42241 13.3042 2.42241 10.5C2.42241 7.69583 2.43518 7.36667 2.48626 6.25833C2.53308 5.23333 2.70761 4.67917 2.85659 4.30833C3.0524 3.81667 3.28226 3.46667 3.65684 3.1C4.03143 2.73333 4.38899 2.50417 4.89128 2.31667C5.27012 2.175 5.83626 2 6.88339 1.95417C8.01567 1.9 8.3562 1.89167 11.2167 1.89167ZM11.2167 0C8.30512 0 7.93905 0.0125 6.794 0.0625C5.65322 0.1125 4.87425 0.291667 4.19318 0.55C3.48658 0.816667 2.89064 1.17917 2.29471 1.7625C1.69878 2.34583 1.3327 2.93333 1.05602 3.62083C0.792107 4.2875 0.609071 5.05 0.557991 6.17083C0.506911 7.2875 0.494141 7.64583 0.494141 10.4958C0.494141 13.3458 0.506911 13.7042 0.557991 14.825C0.609071 15.9417 0.792107 16.7042 1.05602 17.375C1.32845 18.0667 1.69878 18.65 2.29471 19.2333C2.89064 19.8167 3.49083 20.175 4.19318 20.4458C4.87425 20.7042 5.65322 20.8833 6.79826 20.9333C7.9433 20.9833 8.30512 20.9958 11.2209 20.9958C14.1368 20.9958 14.4986 20.9833 15.6436 20.9333C16.7844 20.8833 17.5634 20.7042 18.2487 20.4458C18.9553 20.1792 19.5512 19.8167 20.1472 19.2333C20.7431 18.65 21.1092 18.0625 21.3858 17.375C21.6498 16.7083 21.8328 15.9458 21.8839 14.825C21.935 13.7042 21.9477 13.35 21.9477 10.4958C21.9477 7.64167 21.935 7.2875 21.8839 6.16667C21.8328 5.05 21.6498 4.2875 21.3858 3.61667C21.1134 2.925 20.7431 2.34167 20.1472 1.75833C19.5512 1.175 18.951 0.816667 18.2487 0.545833C17.5676 0.2875 16.7887 0.108333 15.6436 0.0583333C14.4943 0.0125 14.1282 0 11.2167 0Z"
                                  fill="#008BCF"/>
                            <path d="M11.2161 5.10834C8.17688 5.10834 5.70801 7.52084 5.70801 10.5C5.70801 13.4792 8.17262 15.8917 11.2161 15.8917C14.2597 15.8917 16.7243 13.4792 16.7243 10.5C16.7243 7.52084 14.2597 5.10834 11.2161 5.10834ZM11.2161 13.9958C9.24105 13.9958 7.64054 12.4292 7.64054 10.4958C7.64054 8.56251 9.24105 6.99584 11.2161 6.99584C13.1912 6.99584 14.7917 8.56251 14.7917 10.4958C14.7917 12.4292 13.1912 13.9958 11.2161 13.9958Z"
                                  fill="#008BCF"/>
                            <path d="M16.9417 6.14996C17.6517 6.14996 18.2272 5.58659 18.2272 4.89163C18.2272 4.19668 17.6517 3.6333 16.9417 3.6333C16.2318 3.6333 15.6562 4.19668 15.6562 4.89163C15.6562 5.58659 16.2318 6.14996 16.9417 6.14996Z"
                                  fill="#008BCF"/>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </div>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159867108-1"></script>
    <script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'UA-159867108-1', {'anonymize_ip': true});
    </script>
</header>
