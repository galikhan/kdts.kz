<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kdts
 */

?>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <div class="f-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <p>АО «Кедентранссервис» — ведущий оператор таможенно-складской логистики Казахстана.</p>
            </div>

            <div class="footer-col">
                <h4>Разделы</h4>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container'      => false,
                    'menu_class'     => '',
                )); ?>
            </div>

            <div class="footer-col">
                <h4>Контакты</h4>
                <ul class="footer-contact">
                    <li>
                        <svg class="icon"><use href="#icon-phone"></use></svg>
                        <a href="tel:+77172648888">+7 (7172) 648 888</a>
                    </li>
                    <li>
                        <svg class="icon"><use href="#icon-phone"></use></svg>
                        <a href="tel:+77780979797">+7 778 097 97 97</a>
                    </li>
                    <li>
                        <svg class="icon"><use href="#icon-mail"></use></svg>
                        <a href="mailto:kense@kdts.kz">kense@kdts.kz</a>
                    </li>
                    <li style="margin-top:8px;opacity:0.7;">
                        <svg class="icon"><use href="#icon-map-pin"></use></svg>
                        <span><?php echo CFS()->get('adres1', 606); ?><br>БЦ «Москва»</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div>1997–<?php echo date('Y'); ?>, АО «Кедентранссервис»</div>
            <div class="footer-socials">
                <a href="https://www.facebook.com/Kedentransservice.kz" target="_blank" rel="noopener" title="Facebook">
                    <svg class="icon"><use href="#icon-facebook"></use></svg>
                </a>
                <a href="https://www.instagram.com/kdts.kz" target="_blank" rel="noopener" title="Instagram">
                    <svg class="icon"><use href="#icon-instagram"></use></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="float-actions">
    <a href="https://sk-hotline.kz" target="_blank" rel="noopener" class="float-btn hotline" title="Горячая линия">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg" alt="Самрук-Қазына" />
    </a>
    <a href="https://eotinish.kz/ru" target="_blank" rel="noopener" class="float-btn eotinish" title="e-Otinish">
        <img src="https://www.kdts.kz/ru/wp-content/uploads/2024/02/logo-light.png" alt="e-Otinish" />
    </a>
    <a href="#" class="BtnModal float-btn" data-path="arPortfolioItemPhone" aria-label="Заказать звонок" style="background:var(--c-dark);">
        <svg class="icon"><use href="#icon-phone"></use></svg>
    </a>
</div>

<?php wp_footer(); ?>
<!--<script src="//code.jivosite.com/widget/t5KQ39PfPV" async></script>-->
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        /* loop: true,*/
        watchSlidesProgress: true,

        breakpoints: {

            650: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 45
            },
            1120: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1220: {
                slidesPerView: 3,
                spaceBetween: 45
            }
        },
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        /*loop: true,*/
        pagination: {
            el: '.rukovodstvo-pagination',
            type: 'progressbar',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
        navigation: {
            nextEl: '.rukovodstvo-next',
            prevEl: '.rukovodstvo-prev',
        },
    });
</script>
<script>
    var lastItems = $(".istoriya-items");
    lastItems.slice(lastItems.length - 1).addClass("istoriya-items__bottom");
    console.log(lastItems)
</script>
<script>
    var istoriyaThumbs = new Swiper('.istoriya-thumbs', {
        spaceBetween: 20,
        slidesPerView: 2,
        /*  loop: true, */
        freeMode: true,
        pagination: false,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            476: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            650: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            1120: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        },

    });
    var istoriyaTop = new Swiper('.istoriya-top', {
        spaceBetween: 10,
        /*  loop: true, */
        loopedSlides: 5, //looped slides should be the same
        pagination: {
            el: '.rukovodstvo-pagination',
            type: 'progressbar',
        },
        thumbs: {
            swiper: istoriyaThumbs,
        },
        navigation: {
            nextEl: '.godovaya-prev',
            prevEl: '.godovaya-next',
        },
    });
</script>
<script>
    var otchetnostThumbs = new Swiper('.gallery-otchetnost1', {
        spaceBetween: 20,
        slidesPerView: 2,
        /*   loop: true, */
        freeMode: true,
        pagination: false,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            476: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            650: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            1120: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        },

    });
    var galleryTop = new Swiper('.gallery-otchetnost2', {
        spaceBetween: 10,
        /*  loop: true, */
        loopedSlides: 5, //looped slides should be the same
        pagination: {
            el: '.rukovodstvo-pagination',
            type: 'progressbar',
        },
        thumbs: {
            swiper: otchetnostThumbs,
        },
        navigation: {
            nextEl: '.godovaya-prev',
            prevEl: '.godovaya-next',
        },
    });
</script>
<script>
    var lastItems = $(".novosti-right__item");
    lastItems.slice(lastItems.length - 1).addClass("novosti-right__item-bottom");
    console.log(lastItems)
</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<script>
    var istoriya = new Swiper('.istoriya', {
        spaceBetween: 10,
        slidesPerView: 2,
        freeMode: true,
        pagination: false,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            476: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            650: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            1120: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        },
        navigation: {
            nextEl: '.godovaya-prev',
            prevEl: '.godovaya-next',
        },
    });
</script>
</body>

</html>
