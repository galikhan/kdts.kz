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
<footer class="footer-block">
	<div class="footer-block__top">
    	<img src="<?php echo get_template_directory_uri(); ?>/img/footerBlockBg.png" class="footer-block__bg"  alt="#" />
        <div class="container-footer">

            <div class="footer-wrapper">
                <div class="footer-left">
                    <div class="footer-logo">
                        <?php the_custom_logo();?>
                    </div>
                    <div class="footer-menu">
                        <?php wp_nav_menu ( array (
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class'      => '',
					)) ?>
                    </div>
                </div>
                <div class="footer-rigth">
					<div class="footer-rigth__block">
					<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="footer-rigth__icon" alt="#" />
					</a>
					<ul>
						<!--<li class="footer-rigth__tel"><a href="tel:87780979707">8 (778) 097-9707</a></li>
                            <li class="footer-rigth__tel"><a href="tel:87780979779">8 (778) 097-9779</a></li>
                            <li class="footer-rigth__tel"><a href="tel:87780979187">8 (778) 097-9187</a></li>-->

                            <li class="footer-rigth__tel"><a href="tel:+7 7172 942626"> Call center  +7 7172 942626</a></li>
						<li class="footer-rigth__tel"><a href="mailto:kense@kdts"> kense@kdts.kz</a></li>
					</ul>
					</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-block__bottom">
        <div class="container-footer">
            <div class="footer-items">
                <p class="footer-name">1997- 2021, “Кедентранссервис” АҚ </p>
                <div class="footer-adders">
                    <?php echo CFS()->get('adres1',606); ?>
					<p>"Мәскеу" БО</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<!--<script src="//code.jivosite.com/widget/OF5ZNNK29W" async></script>-->
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
			lastItems.slice(lastItems.length -1).addClass("istoriya-items__bottom");
			console.log(lastItems)
		</script>
    <script>
        var istoriyaThumbs = new Swiper('.istoriya-thumbs', {
            spaceBetween: 20,
            slidesPerView: 2,
          /*  loop: true, */
            freeMode: true,
            pagination:false,
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
            pagination:false,
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
        let phone_menu = document.querySelector('.phone-menu__img');
        let header_menu = document.querySelector('.header-menu');
        phone_menu.addEventListener('click', () => {
            header_menu.classList.toggle('menu-phone__active')
            console.log(phone_menu)
        })
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
            pagination:false,
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
 	 <script>
		let searchPhone = document.querySelector('.search-phone');
		let headerSearch = document.querySelector('.header-search');
			searchPhone.addEventListener('click', () => {
				  headerSearch.classList.add('header-searchBlock')

			})
	</script>
</body>
</html>
