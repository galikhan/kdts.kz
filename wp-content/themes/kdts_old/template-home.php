<?php
 /*
 * Template name: home
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">

		<style>
			@media (min-width: 640px) {
    .onepage-wrapper,.onepage-wrapper .section{width:100%;height:100%}
    body,html{margin:0;overflow:hidden;-webkit-transition:opacity 400ms;-moz-transition:opacity 400ms;transition:opacity 400ms}
}
		</style>
	<?php wp_head(); ?>
		     <script src="https://qaztourism.kz/themes/demo/assets/js/jquery-3.4.1.min.js"></script>

            </head>
            <body class="viewing-page-1 ">
            	<!-- Yandex.Metrika counter -->
            	<script type="text/javascript" >
            	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            	   ym(79124866, "init", {
            	        clickmap:true,
            	        trackLinks:true,
            	        accurateTrackBounce:true,
            	        webvisor:true
            	   });
            	</script>
            	<noscript><div><img src="https://mc.yandex.ru/watch/79124866" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            	<!-- /Yandex.Metrika counter -->
     <header class="header">
		 <div class="header-phone">
				<div class="header-top__left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel" alt="#" />
					<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><? echo CFS()->get('telefon1',606); ?> </a>
				</div>
				<div class="header-top__right">
					<p> <?php echo do_shortcode( '[bvi text="Нашар көретіндерге арналған нұсқа"]' ); ?>  </p>
				</div>
			</div>
			<div class="header-phone1">
				<div class="header-top__logo">
               		 <?php the_custom_logo();?>
				</div>
				<div class="header-top__right">
					<div class="yazyk">
						<?php wp_nav_menu ( array (
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
						<?php the_custom_logo();?>
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
					<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text">
					<!--	<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel-img" alt="#" /> -->
						<? echo CFS()->get('telefon1', 606); ?>
					</a>
				</div>
				<div class="header-top__right">
					<p> <?php echo do_shortcode( '[bvi text="Нашар көретіндерге арналған нұсқа"]' ); ?> </p>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="header-menu__wrapper">
				<div class="header-left header-left__kz">
					<div class="header-logo">
						<a href="<? echo home_url() ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Group4444446666.png"/>
                        </a>
					</div>
					<nav class="nav-menu">
						<?php wp_nav_menu ( array (
							'theme_location' => 'header-menu',
							'container' => false,
							'menu_class'      => 'menu',
                            'walker' => new Law_Header_Menu,
						)) ?>
					</nav>
				  </div>
				  <div class="header-right">
						<div class="search">
							<!-- <input type="search" class="search-input" name="search" /> -->
							<?php get_search_form(); ?>

						</div>

					  <div class="personal-area">
						  <a href="https://cabinet.kdts.kz:9150/">
						  	Жеке кабинет
						  </a>
					  </div>
				  </div>
			</div>
		</div>
	</header>
<div class="main-container">
    <div class="main">



        <!-- Первый экран -->
        <section id="first-screen" data-uk-height-viewport>
    		    <div class="insert">
    <div class="insert-container">
        <div class="insert-slider">
             <div class="insert-block">
               <div class="swiper-wrapper">
                  			<? $slaydery = CFS()->get('slayder-loop');
									foreach ($slaydery as $slayder) {
										echo '
										<div class="swiper-slide" style="width: 100% !important;">
											<div class="swiper-slide__block">
												<img src="'.$slayder["slayd-foto"].'" class="swiper-slide__block-img" alt="#" />
												<div class="insert-content">
													<a href="'.$slayder["url"].'">
														<div class="insert-content__text">
															'.$slayder["slayd-tekst"].'
														</div>
														<div class="insert-content__btn">
															Толығырақ
														</div>
													</a>
												</div>
											</div>
										</div>
										';
									}
								?>


                </div>

                <div class="insert-paginations"></div>

                <div class="insert-button-next"></div>
                <div class="insert-button-prev"></div>
              </div>
        </div>
					<div class="language languageInsert">
						<div class="language-block">
							<div class="language-line">

							</div>
							<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
							<div class="language-icon">
								<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="language-img" alt="#" />
								</a>
							</div>
						</div>
					</div>
    </div>
</div>
        </section>
        <!-- Первый экран -->

        <!-- Наша деятельность -->

        <section id="operation"  data-uk-height-viewport>
				<div class="abount-statistika">

              <div class="abount">
				<img src="<?php echo get_template_directory_uri(); ?>/img/aboutBg.png" alt="#" class="about-Bg" />
				<div class="abount-wrapper">
					<div class="abount-block">

						<div class="about-content">
							<p class="abount-title">
								<? echo CFS()->get('zagolovka'); ?>
							</p>
							<p class="abount-text">
							   <? echo CFS()->get('tekst1'); ?>
							</p>
							<a href="<? echo home_url('/kompaniya-turaly', 'https') ?>" class="abount-btn">
								Толығырақ
							</a>
						</div>
					</div>
				</div>
			</div>

			 <div class="statistika">
            <div class="statistika-block">
					<div class="statistika-title">
						<img src='<?php echo get_template_directory_uri(); ?>/img/bar-chart.svg' class="statistika-bar__chart"/> Статистика
					</div>
					<div class="statistika-items">

							<? $stblocki = CFS()->get('stblock');
									foreach ($stblocki as $stblock) {
										echo '
										<div class="statistika-item">
											<div class="statistika-item__photo">
												<img src="'.$stblock["stPhoto"].'" class="statistika-item__icon" alt="#" />
											</div>
											<p class="statistika-item__text">
												'.$stblock["stText"].'
											</p>
										</div>
										';
									}
								?>

					</div>
				</div>
				<div class="statistika-buttom">
					<div class="statistika-buttom__left">

					</div>
					<div class="statistika-buttom__right">
						<div class="statistika-buttom__one">
							<div class="statistika-buttom__one-block">
								<? echo CFS()->get('tekst711'); ?>
							</div>
						</div>
						<div class="statistika-buttom__two">
							<div class="statistika-buttom__two-block">
								<div class="statistika-buttom__two-left">
									<? echo CFS()->get('tekst8'); ?>
								</div>
								<div class="statistika-buttom__two-right">
								</div>
							</div>
						</div>
						<div class="statistika-buttom__three">

						</div>
					</div>
				</div>
			</div>
				<div class="language">
					<div class="language-block">
						<div class="language-line">

						</div>
						<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
						<div class="language-icon">
															<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebook.svg" class="language-img" alt="#" />
							</a>
						</div>
					</div>
				</div>
          </div>
        </section>
        <!-- Новости -->
		<section id="operation" data-uk-height-viewport>
				<div class="uslug">
					<div class="uslug-block">
						<div class="title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPP.svg" alt="#" class="title-icon"/>  <? echo CFS()->get('zagolovka1'); ?>
						</div>
						<div class="uslug-items">

							<? $uslugi = CFS()->get('blok-usluga');
									foreach ($uslugi as $uslug) {
										echo '
										<div class="uslug-item">
											<a href="'.$uslug["url"].'">
												<div class="uslug-item__photo">
													<img src="'.$uslug["foto"].'" class="uslug-item__icon" alt="#" />
												</div>
												<p class="uslug-item__text">
													'.$uslug["tekst6"].'
												</p>
											</a>
										</div>
										';
									}
								?>

						</div>
					</div>
					<div class="language">
						<div class="language-block">
							<div class="language-line">

							</div>
							<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
							<div class="language-icon">
								<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebook.svg" class="language-img" alt="#" />
								</a>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section id="operation" data-uk-height-viewport>
			<div class="tarif">
					<img src = "<?php echo get_template_directory_uri(); ?>/img/tarif.png" class="tarifBg" alt="#" />
					<div class="tarif-container">
						<div class="tarif-left">

						</div>
						<div class="tarif-right">
							<img src = "<?php echo get_template_directory_uri(); ?>/img/tarifRight.png" class="tarif-right__bg" alt="#" />
							<div class="tarif-right__block">
								<div class="tarif-right__items">

									<div class="tarif-right__item BtnModal" data-path="arPortfolioItem1">
										<div class="tarif-right__item-icon">
											<img src="<?php echo get_template_directory_uri(); ?>/img/posmotretIcon22.svg" alt="#" class="tarif-right__item-img" />
										</div>
										 <div class="tarif-right__item-text">
											<p>
												<? echo CFS()->get('tekst7'); ?>
											</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="language languageFFF">
						<div class="language-block">
							<div class="language-line">

							</div>
							<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
							<div class="language-icon">
								<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="language-img" alt="#" />
								</a>
							</div>
						</div>
					</div>
				</div>
        </section>
        <section id="operation" data-uk-height-viewport>
       			<div class="partnery">
					<div class="partnery-container">
						<div class="title">
							<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPP.svg" alt="#" class="title-icon"/> <? echo CFS()->get('zagolovka2'); ?>
						</div>
						<div class="production-slider">
							<div class="mySlider">
								<? $partnery = CFS()->get('partnery-blok');
									foreach ($partnery as $partner) {
										echo '
											<div class="mySlider__item">
												<img src="'.$partner["foto1"].'" class="partnery-item__img" alt="#" />
											</div>
												';
											}
										?>
							</div>
						</div> <!-- production-slider / -->
					</div>
				</div> <!-- partnery / -->
				<div class="language">
					<div class="language-block">
						<div class="language-line">

						</div>
							<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
						<div class="language-icon">
							<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebook.svg" class="language-img" alt="#" />
							</a>
						</div>
					</div>
				</div>
        </section>
		<section id="operation"  data-uk-height-viewport>
        	<?php include "news.php" ?>
		</section>
		<section id="operation"  class="footR" data-uk-height-viewport>
        	<footer class="footer-block footer-block1">
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
											<li class="footer-rigth__tel"><a href="mailto: kense@kdts.kz"> kense@kdts.kz</a></li>
										</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-block__bottom">
						<div class="container-footer">
							<div class="footer-items">
								<p class="footer-name">1997- 2021, “Кедентранссервис” АҚ</p>
								<div class="footer-adders">
									<? echo CFS()->get('adres1',606); ?>
									<p>"Мәскеу" БО</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<div class="language languageFFF">
					<div class="language-block">
						<div class="language-line">

						</div>
							<?php wp_nav_menu ( array (
								'theme_location' => 'yazyk-menu',
								'container' => false,
								'menu_class'      => 'language-list',
							)) ?>
						<div class="language-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="language-img" alt="#" />
						</div>
					</div>
				</div>
		</section>
        <!-- Контакты -->
	</div>

    </div>
	<!-- JS FILES -->
	<div class="modals">
	<div class="modal-overlay">
		<div class="arPortfolioModal" data-target="arPortfolioItem1">
			<p class="arPortfolioModal-title">Өтінім қалдыру</p>
			<?php echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); ?>
		</div>
	</div>
</div>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	  	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<!--<script src="//code.jivosite.com/widget/OF5ZNNK29W" async></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
	<script src="https://qaztourism.kz/themes/demo/assets/js/jquery.onepage-scroll.js"></script>
<?php wp_footer(); ?>
    <script>
    $(document).ready(function(){
    	$(".main").onepage_scroll({
           sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
           easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                            // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
           animationTime: 500,             // AnimationTime let you define how long each section takes to animate
           pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
           updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
           beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
           afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
           loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
           keyboard: false,                  // You can activate the keyboard controls
           responsiveFallback: 1220,        // You can fallback to normal page scroll by defining the width of the browser in which
                                            // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                            // the browser's width is less than 600, the fallback will kick in.
           direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
        });
    });
    </script>

<script>
	$(document).ready(function(){
    $('.news-items').slick({
      arrows: false,
      slidesToShow: 3,
      pauseOnFocus: true,
      centerMode: false,
      variabeWidth: false,

        responsive:[
          {
            breakpoint: 768,
              settings: {
                slidesToShow: 2,

              }
          },
		{
            breakpoint: 576,
              settings: {
                slidesToShow: 1,

              }
          }

        ]

    });
});
</script>

    <script>
        var swiper = new Swiper('.insert-block', {
          slidesPerView: 1,
          spaceBetween: 0,
			allowTouchMove: false,
          paginationClickable: true,
            loop: true,
          slidesPerGroup: 1,
          pagination: {
            el: '.partnery-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.insert-button-next',
            prevEl: '.insert-button-prev',
          },
        });
      </script>
      <script>
        const btns = document.querySelectorAll('.BtnModal');
          const modalOverlay = document.querySelector('.modal-overlay ');
          const modals = document.querySelectorAll('.arPortfolioModal');

          btns.forEach((el) => {
              el.addEventListener('click', (e) => {
                  let path = e.currentTarget.getAttribute('data-path');

                  modals.forEach((el) => {
                      el.classList.remove('modal--visible');
                  });

                  document.querySelector(`[data-target="${path}"]`).classList.add('modal--visible');
                  modalOverlay.classList.add('modal-overlay--visible');
              });
          });

          modalOverlay.addEventListener('click', (e) => {
              console.log(e.target);

              if (e.target == modalOverlay) {
                  modalOverlay.classList.remove('modal-overlay--visible');
                  modals.forEach((el) => {
                      el.classList.remove('modal--visible');
                  });
              }
          });
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
	$(document).ready(function(){
    $('.mySlider').slick({
      arrows: true,
      dots: true,
      slidesToShow:4 ,
      slidesToScroll: 4,
      pauseOnFocus: true,
      centerMode: false,
      variabeWidth: false,

        responsive:[
			 {
            breakpoint: 990,
              settings: {
                slidesToShow: 3,
				        slidesToScroll: 3,

              }
            },
          {
            breakpoint: 768,
              settings: {
                slidesToShow: 2,
				slidesToScroll: 2,

              }
            }

        ]

    });
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