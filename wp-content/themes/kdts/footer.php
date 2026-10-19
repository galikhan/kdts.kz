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

$phone   = CFS()->get( 'telefon1', 606 );
$phones  = $phone ? array_map( 'trim', explode( ',', $phone ) ) : array();
$address = CFS()->get( 'adres1', 606 );
?>
<footer class="site-footer" id="contacts">
	<div class="container footer-main">
		<div class="footer-brand">
			<?php
			$footer_logo_id = get_theme_mod( 'custom_logo' );
			if ( $footer_logo_id ) {
				echo wp_get_attachment_image( $footer_logo_id, 'full', false, array( 'class' => 'footer-logo' ) );
			} else {
				echo '<img src="' . esc_url( get_template_directory_uri() . '/img/logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="footer-logo">';
			}
			?>
			<div class="footer-contacts">
				<?php foreach ( $phones as $p ) : if ( ! $p ) continue; ?>
					<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $p ) ); ?>"><?php echo esc_html( $p ); ?></a>
				<?php endforeach; ?>
				<a href="mailto:kense@kdts.kz">kense@kdts.kz</a>
				<?php if ( $address ) : ?>
					<p><?php echo esc_html( trim( $address ) ); ?></p>
				<?php endif; ?>
			</div>
			<div class="footer-social">
				<a href="https://t.me/ao_kdts_bot" target="_blank" rel="noopener" aria-label="Telegram">
					<svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 4.2L2.9 11.6c-1.2.5-1.2 1.2-.2 1.5l4.9 1.5 1.9 5.8c.2.6.4.9.9.9.4 0 .6-.2.9-.5l2.2-2.1 4.6 3.4c.8.5 1.4.2 1.6-.8l3-14.1c.3-1.2-.4-1.7-1.4-1.4zM8.4 13.6l9.3-5.9c.5-.3.9-.1.5.2l-7.7 7-0.3 3.2-1.6-4.5z"/></svg>
				</a>
				<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank" rel="noopener" aria-label="Facebook">
					<svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-7.5h2.5l.5-3h-3V8.5c0-.9.4-1.5 1.6-1.5H16.5V4.3c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4V10.5H8v3h2.3V21h3.2z"/></svg>
				</a>
			</div>
		</div>

		<div class="footer-col">
			<p class="footer-col-title">Компания туралы</p>
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>">Компания туралы</a>
			<a href="<?php echo esc_url( home_url( '/kyzmetter' ) ); ?>">Қызметтер</a>
			<a href="<?php echo esc_url( home_url( '/zhanalyktar' ) ); ?>">Жаңалықтар</a>
			<a href="<?php echo esc_url( home_url( '/seriktester' ) ); ?>">Серіктестер</a>
		</div>

		<div class="footer-col">
			<p class="footer-col-title">Клиенттерге</p>
			<a href="<?php echo esc_url( home_url( '/molsherlemeler-zhane-tarifter' ) ); ?>">Мөлшерлемелер және тарифтер</a>
			<span class="footer-link-static">Тасымалдау маршруттары</span>
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener">Жеке кабинет</a>
		</div>

		<div class="footer-col">
			<p class="footer-col-title">Акционерлерге</p>
			<a href="<?php echo esc_url( home_url( '/zhyldy-zh-ne-arzhy-eseptiligi' ) ); ?>">Жылдық және қаржы есептілігі</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>">Байланыстар</a>
		</div>
	</div>

	<div class="container footer-bottom">
		<p>© 1997–<?php echo date( 'Y' ); ?>. Барлық құқықтар қорғалған.</p>
		<p>«Кедентранссервис» АҚ</p>
	</div>
</footer>

<div class="float-actions">
	<a href="#" class="BtnModal float-btn float-btn-hr" data-path="arPortfolioItemHr" aria-label="HR-ға хабарлама жазу" title="HR-ға хабарлама жазу">
		<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
	</a>
	<a href="https://sk-hotline.kz" target="_blank" rel="noopener" class="float-btn float-btn-hotline" title="Самрұқ-Қазына">
		<img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg" alt="Самрұқ-Қазына">
	</a>
	<a href="https://eotinish.kz/kk" target="_blank" rel="noopener" class="float-btn float-btn-eotinish" title="e-Otinish">
		<img src="https://www.kdts.kz/ru/wp-content/uploads/2024/02/logo-light.png" alt="e-Otinish">
	</a>
	<a href="https://t.me/ao_kdts_bot" target="_blank" rel="noopener" class="float-btn float-btn-tg" title="Telegram">
		<svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 4.2L2.9 11.6c-1.2.5-1.2 1.2-.2 1.5l4.9 1.5 1.9 5.8c.2.6.4.9.9.9.4 0 .6-.2.9-.5l2.2-2.1 4.6 3.4c.8.5 1.4.2 1.6-.8l3-14.1c.3-1.2-.4-1.7-1.4-1.4zM8.4 13.6l9.3-5.9c.5-.3.9-.1.5.2l-7.7 7-0.3 3.2-1.6-4.5z"/></svg>
	</a>
	<a href="#" class="BtnModal float-btn float-btn-phone" data-path="arPortfolioItemPhone" aria-label="Қоңырау шалуды сұрау" title="Қоңырау шалуды сұрау">
		<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.85a16 16 0 0 0 6 6l.85-1.85a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
	</a>
</div>

<button class="scroll-top" id="scrollTop" aria-label="Жоғарыға өту">
	<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
</button>

<div class="modal-overlay">
	<div class="arPortfolioModal" data-target="arPortfolioItemPhone" style="max-width:420px;">
		<button type="button" class="modal-close" aria-label="Жабу">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
		</button>
		<p class="arPortfolioModal-title">Қайта қоңырау шалуды сұраңыз</p>
		<form method="post" id="phone-form" class="phone-form">
			<input type="hidden" name="do" value="phone">
			<div class="form-row-1 form-fld">
				<label>Аты-жөні</label>
				<input type="text" name="name" required>
			</div>
			<div class="form-row-1 form-fld">
				<label>Телефон</label>
				<input type="text" name="phone" placeholder="+7" required>
			</div>
			<div class="form-row-1 form-fld">
				<label>Электрондық пошта</label>
				<input type="email" name="email" required>
			</div>
			<div class="form-foot" style="justify-content:center;">
				<button type="submit" class="modalBtn">Жіберу</button>
			</div>
		</form>
	</div>

	<div class="arPortfolioModal" data-target="arPortfolioItemHr" style="max-width:480px;">
		<button type="button" class="modal-close" aria-label="Жабу">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
		</button>
		<p class="arPortfolioModal-title">HR бөліміне хабарлама</p>
		<form method="post" id="hr-form" class="hr-form" novalidate
			data-ajax="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>"
			data-sending="Жіберілуде…" data-ok="Хабарламаңыз жіберілді. Рахмет!" data-fail="Жіберу мүмкін болмады. Кейінірек қайталап көріңіз." data-invalid="Барлық өрістерді дұрыс толтырыңыз." data-rate="Сұраныс тым көп. Кейінірек қайталап көріңіз.">
			<input type="hidden" name="action" value="kdts_hr_message">
			<input type="text" name="website" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;height:0;width:0;">
			<div class="form-row-1 form-fld">
				<label for="hr-email">Электрондық пошта</label>
				<input type="email" id="hr-email" name="email" required maxlength="120">
			</div>
			<div class="form-row-1 form-fld">
				<label for="hr-phone">Телефон</label>
				<input type="tel" id="hr-phone" name="hr_phone" placeholder="+7" required maxlength="40">
			</div>
			<div class="form-row-1 form-fld">
				<label for="hr-subject">Тақырып</label>
				<input type="text" id="hr-subject" name="subject" required maxlength="200">
			</div>
			<div class="form-row-1 form-fld">
				<label for="hr-message">Хабарлама</label>
				<textarea id="hr-message" name="message" required maxlength="5000" rows="5"></textarea>
			</div>
			<p class="hr-status" role="status" aria-live="polite"></p>
			<div class="form-foot" style="justify-content:center;">
				<button type="submit" class="modalBtn">Жіберу</button>
			</div>
		</form>
	</div>
</div>

<div class="modal-overlay" id="personOverlay">
	<div class="person-modal">
		<button type="button" class="callback-close person-modal-close" id="personClose" aria-label="Жабу">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
		</button>
		<div class="person-modal-photo-wrap">
			<img class="person-modal-photo" id="personModalPhoto" src="" alt="">
		</div>
		<div class="person-modal-body">
			<h3 id="personModalName"></h3>
			<p class="info-role" id="personModalRole"></p>
			<div id="personModalBio"></div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

<script>
jQuery(function($) {
	if ($.fn.mask) $('input[name=phone]').mask('+7 (999) 999-99-99');

	$('#phone-form').on('submit', function(e) {
		e.preventDefault();
		var $form = $(this);
		var $btn = $form.find('button[type=submit]');
		$btn.attr('disabled', 'disabled');
		$.ajax({
			url: '/send.php',
			data: new FormData(this),
			processData: false,
			type: 'POST',
			dataType: 'JSON',
			contentType: false,
			success: function(data) {
				if (data.success == 1) {
					$('.arPortfolioModal[data-target="arPortfolioItemPhone"]').html(data.msg);
					$form[0].reset();
				} else {
					alert(data.msg);
				}
				$btn.removeAttr('disabled');
			}
		});
	});
});
</script>
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
