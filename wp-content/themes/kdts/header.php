<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style type="text/css">

    </style>
</head>

<body class="page<?php the_ID(); ?> body-bc">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(79124866, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/79124866" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <header class="header">
        <div class="header-phone">
            <div class="header-top__left" style="flex-wrap:wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel" alt="#" />
               <!--<a href="tel:<?php echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><?php echo CFS()->get('telefon1',606); ?></a>-->
                    <!--<a href="tel:+7 778 097 91 87" class="header-top__tel-text">+7 778 097 91 87,</a>
					<a href="tel:+7 778 097 91 80" class="header-top__tel-text">+7 778 097 91 80 </a>-->
                
            </div>
            <div class="header-top__right">
                <p> <?php echo do_shortcode('[bvi text="Нашар көретіндерге арналған нұсқа"]'); ?> </p>
            </div>
        </div>
        <div class="header-phone1">
            <div class="header-top__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="header-top__right">
                <div class="yazyk">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'yazyk-menu',
                        'container' => false,
                        'menu_class'      => '',
                    )) ?>
                </div>
            </div>
        </div>
        <div class="headerV-top">
            <div class="header-search">
                <?php get_search_form(); ?>
            </div>
            <div class="header-top__wrapper">
                <div class="search-phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/searchFfff.png" class="search-phone" />
                </div>
                <div class="header-phone__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="phone-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" alt="#" class="phone-menu__img" />
                </div>
            </div>
        </div>
        <div class="header-top">
            <div class="header-top__wrapper">
                <div class="header-top__left">
                    Call center:
                    <a href="tel:<?php echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text">
                        <!--	<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel-img" alt="#" /> -->
                        <?php echo CFS()->get('telefon1', 606); ?>
                    </a><!--
                    <a href="tel:+7 778 097 91 87" class="header-top__tel-text">
                        +7 778 097 91 87
                    </a>
                    ,
                    <a href="tel:+7 778 097 91 80" class="header-top__tel-text">
                    +7 778 097 91 80
                    </a>-->
                </div>
                <div class="header-top__right">
                    <div class="d-flex">
                        <div class="hotline">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> Жедел желі
                            </a>
                        </div>
                        <?php echo do_shortcode('[bvi text="Нашар көретіндерге арналған нұсқа"]'); ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="header-menu__wrapper">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Group4444446666.png" />
                        </a>
                    </div>
                    <nav class="nav-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class'      => 'menu',
                            'walker' => new Law_Header_Menu,
                        )) ?>
                    </nav>
                    <style type="text/css">
                        @media screen and (min-width:1600px) {
                            .footer-rigth {
                                display: flex;
                                align-items: flex-start;
                                padding-top: 3rem;
                            }
                        }

                        .d-flex {
                            display: flex;
                            flex-wrap: nowrap;
                            align-items: center;
                        }

                        .search-icon {
                            margin-right: 20px;

                        }

                        .header-right {
                            align-items: center;
                        }

                        @media screen and (min-width: 768px) {
                            .hotline {
                                margin-left: 20px;
                            }

                            .header-left,
                            .header-right__block {
                                align-items: flex-end;
                            }

                            .header-right {
                                padding-bottom: 0px;
                            }

                            .menu li a {
                                padding: 15px 8px;
                                padding-bottom: 0;
                            }
                        }

                        .header-menu .hotline a {
                            display: none;
                            align-items: center;
                            padding: 0px 15px;
                            border: 1px solid #005bbf;
                            text-transform: uppercase;
                            color: #676767;
                            height: 37px;
                            line-height: 37px;
                            font-family: Roboto, sans-serif;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            justify-content: center;
                            max-width: 300px;
                            margin: 0 auto
                        }

                        .header-menu .hotline a img {
                            margin-right: 10px;
                        }

                        .header-top .hotline a {
                            display: flex;
                            align-items: center;
                            padding: 0px 15px;
                            border: 1px solid #fff;
                            background-color: #fff;
                            text-transform: uppercase;
                            color: #676767;
                            height: 37px;
                            line-height: 37px;
                            font-family: Roboto, sans-serif;
                            font-style: normal;
                            font-weight: 500;
                            font-size: 16px;
                            justify-content: center;
                            max-width: 300px;
                            margin: 0 15px 0 0
                        }

                        .header-top .hotline a img {
                            margin-right: 10px;
                        }

                        .header-right .search.active {
                            display: block !important;
                        }

                        .hot-img {
                            position: fixed;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%, -50%);
                            z-index: 1000;
                            display: none;
                        }

                        .hot-img.active {
                            display: block;
                        }

                        .hot-opaco {
                            position: fixed;
                            left: 0%;
                            top: 0%;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.2);
                            z-index: 999;
                            display: none;
                        }

                        .hot-opaco.active {
                            display: block;
                        }

                        .menu li {
                            font-weight: 500;
                            font-size: 14px;
                        }

                        @media screen and (max-width:1320px) {
                            .menu li {
                                font-weight: 500;
                                font-size: 14px;
                            }
                        }

                        @media screen and (max-width: 768px) {
                            .search-icon {
                                display: none;
                            }

                            .hotline {
                                margin-top: 20px;
                            }
                        }
                    </style>
                    <script type="text/javascript">
                        $(function() {
                            $('.search-icon').on('click', function(e) {
                                e.preventDefault();
                                $('.header-right .search').toggleClass("active")
                            })
                            $('.hotline a').on('click', function(e) {
                                e.preventDefault();
                                $('.hot-img').toggleClass("active")
                                $('.hot-opaco').toggleClass("active")
                            })
                            $('.hot-opaco').on('click', function(e) {
                                e.preventDefault();
                                $('.hot-img').toggleClass("active")
                                $('.hot-opaco').toggleClass("active")
                            })
                        })
                    </script>
                    <div class="header-right" style="position: relative;">
                        <a href="" class="search-icon"><img src="https://www.kdts.kz/wp-content/themes/kdts/img/search.png"></a>
                        <div class="search" style="position: absolute;  top: 100%; right: 88%; width: 185px; display: none;">
                            <form role="search" method="get" id="searchform" action="https://www.kdts.kz/">
                                <input type="text" value="" name="s" id="s" class="">
                                <input type="submit" id="searchsubmit" value="">
                            </form>

                        </div>

                        <div class="personal-area">
                            <a href="https://my.kdts.kz/">
                                Жеке кабинет
                            </a>
                        </div>
                        <div class="hotline">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> жедел желі
                            </a>
                        </div>
                        <div class="hot-opaco"></div>
                        <div class="hot-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/h3.jpg">
                        </div>
                    </div>
                </div>
            </div>
    </header>