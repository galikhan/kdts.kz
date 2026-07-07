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

			.onepage-wrapper,
			.onepage-wrapper .section {
				width: 100%;
				height: 100%
			}

			body,
			html {
				margin: 0;
				overflow: hidden;
				-webkit-transition: opacity 400ms;
				-moz-transition: opacity 400ms;
				transition: opacity 400ms
			}
		}
	</style>
	<?php wp_head(); ?>
	<script src="https://www.kdts.kz/wp-content/themes/kdts/js/jquery-3.4.1.min.js"></script>

</head>

<body class="viewing-page-1 ">
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
				<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><? echo CFS()->get('telefon1', 606); ?>,</a>
				<a href="tel:+7 778 097 91 87" class="header-top__tel-text">+7 778 097 91 87,</a>
				<a href="tel:+7 778 097 91 80" class="header-top__tel-text">+7 778 097 91 80 </a>
			</div>

			<div class="header-top__right">
				<p style="text-align: center;"> <a href="" class="open-vote ov1 bvi-link-shortcode " style="margin: 0px 0px 10px; border: 0px; display: none;">«Кедентранссервис» АҚ cенім телефоны <br>

						+7 717 2 64 89 11</a> <br><?php echo do_shortcode('[bvi text="Нашар көретіндерге арналған нұсқа"]'); ?> </p>
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
					<div href="" class="open-vote bvi-link-shortcode " style="margin: 0px 5px;
															line-height: 16px;
															height: 37px;
															display: inline-flex;
															align-items: center;
															justify-content: center;
															text-align: center">Call center:
						<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text">
							<!--	<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel-img" alt="#" /> -->
							<? echo CFS()->get('telefon1', 606); ?>
						</a>
						<!--<a href="tel:+7 778 097 91 87" class="header-top__tel-text">
							+7 778 097 91 87
						</a>
						,
						<a href="tel:+7 778 097 91 80" class="header-top__tel-text">
							+7 778 097 91 80
						</a>-->
					</div>

				</div>

				<div class="header-top__right ">
					<div class="d-flex"> <a href="" class="open-vote ov1 bvi-link-shortcode " style="margin: 0px 15px;
					line-height: 16px;
					border: 0px;
					height: 37px;
					display: inline-flex;
					align-items: center;
					justify-content: center;display: none;
					text-align: center">«Кедентранссервис» АҚ cенім телефоны<br>+7 717 2 64 89 11</a>
						<div id="hotline" class="hotline">
							<a href="">
								<img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> Жедел желі
							</a>
						</div>
						<div class="hotline"> <a href="https://eotinish.kz/kk"> <img style="height:30px" src="https://www.kdts.kz/ru/wp-content/uploads/2024/02/logo-light.png"> </a> </div>
						<?php echo do_shortcode('[bvi text="Нашар көретіндерге арналған нұсқа"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="header-menu__wrapper">
				<div class="header-left header-left__kz">
					<div class="header-logo">
						<a href="<? echo home_url() ?>">
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
				</div>
				<style type="text/css">
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

					@media screen and (min-width:1600px) {
						.footer-rigth {
							display: flex;
							align-items: flex-start;
							padding-top: 3rem;
						}
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
							padding-bottom: 10px;
						}

						.menu li a {
							padding: 15px 10px;
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

					.hot-img1 {
						position: fixed;
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						z-index: 1000;
						display: none;
					}

					.hot-img1.active {
						display: block;
					}

					.hot-opaco1 {
						position: fixed;
						left: 0%;
						top: 0%;
						width: 100%;
						height: 100%;
						background: rgba(0, 0, 0, 0.5);
						z-index: 999;
						display: none;
						cursor: pointer;
					}

					.hot-opaco1.active {
						display: block;
					}



					.visit-img {
						cursor: default;
						position: fixed;
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						z-index: 1000;
						display: none;
						width: 800px;
						max-width: 100%;
						background: #fff;
						border-radius: 8px;
						padding: 25px;
						font-family: 'Roboto', sans-serif;
						color: #000;
						text-align: left;
					}

					.visit-img.active {
						display: block;
					}

					.visit-opaco {
						position: fixed;
						left: 0%;
						top: 0%;
						width: 100%;
						height: 100%;
						background: rgba(0, 0, 0, 0.2);
						z-index: 999;
						display: none;
					}

					.visit-opaco.active {
						display: block;
					}

					.menu li {
						font-weight: 500;
						font-size: 14px;
					}

					.hot-img2 {
						position: fixed;
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						z-index: 1000;
						display: none;
						min-width: 300px;
					}

					.hot-img2.active {
						display: block;
					}

					.hot-opaco2 {
						position: fixed;
						left: 0%;
						top: 0%;
						width: 100%;
						height: 100%;
						background: rgba(0, 0, 0, 0.2);
						z-index: 999;
						display: none;
					}

					.hot-opaco2.active {
						display: block;
					}

					@media screen and (max-width:1320px) {
						.menu li {
							font-weight: 500;
							font-size: 14px;
						}

						.menu li a {
							padding: 15px 8px;
							padding-bottom: 0;
						}
					}

					.open-vote {
						display: inline-block;
						border: 1px solid #fff;
						height: 40px;
						line-height: 40px;
						padding: 0px 15px !important;

					}

					@media screen and (max-width: 768px) {
						.search-icon {
							display: none;
						}

						.hotline {
							margin-top: 20px;
						}

						.hot-img1 img {
							min-width: 300px;
						}

						.open-vote {
							display: inline-block;
							border: 1px solid #fff;
							height: auto;
							line-height: 20px;
							padding: 5px 15px !important;
						}
					}
				</style>
				<script type="text/javascript">
					$(function() {
						$('.search-icon').on('click', function(e) {
							e.preventDefault();
							$('.header-right .search').toggleClass("active")
						})
						$('#hotline a').on('click', function(e) {
							e.preventDefault();
							$('.hot-img').toggleClass("active")
							$('.hot-opaco').toggleClass("active")
						})
						$('.hot-opaco').on('click', function(e) {
							e.preventDefault();
							$('.hot-img').toggleClass("active")
							$('.hot-opaco').toggleClass("active")
						})

						$('.hot-opaco1').on('click', function(e) {
							e.preventDefault();
							$('.hot-img1').toggleClass("active")
							$('.hot-opaco1').toggleClass("active")
							Cookies.set('bann', '1', {
								path: '/',
								expires: 1
							})
						})

						$('.visit-opaco').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")

							Cookies.set('visit2', '1', {
								path: '/',
								expires: 1
							})
						})

						$('.visit-img i').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")

							Cookies.set('visit2', '1', {
								path: '/',
								expires: 1
							})
						})

						$('.hot-opaco2').on('click', function(e) {
							e.preventDefault();
							$('.hot-img2').toggleClass("active")
							$('.hot-opaco2').toggleClass("active")
							Cookies.set('bann3', '1', {
								path: '/',
								expires: 1
							})
						})

						if (Cookies.get('visit2') != '1') {
							//$('.visit-img').addClass("active")
							//$('.visit-opaco').addClass("active")
						}

						$('.open-vote').on('click', function(e) {
							//e.preventDefault();
							//$('.visit-img').toggleClass("active")
							//$('.visit-opaco').toggleClass("active")
						})

						if (Cookies.get('bann') != '1') {
							//$('.hot-img1').addClass("active")
							//$('.hot-opaco1').addClass("active")
						}

						if (Cookies.get('bann3') != '1') {
							//$('.hot-img2').addClass("active")
							//$('.hot-opaco2').addClass("active")
						}
						/*

						Всплывающее окно автовизит

						$('.visit-opaco').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")

							Cookies.set('visit', '1', { path: '/', expires: 1  })
						})

						if (Cookies.get('visit')!='1'){
							$('.visit-img').addClass("active")
							$('.visit-opaco').addClass("active")
						}*/
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
						<!--<a href="http://terminal.kdts.kz/" target="_blank">
						Автовизит
					</a>-->
						<div class="visit-opaco"></div>
						<div class="visit-img" style="font-size:17px; line-height: 24px; ">
							<!--<img src="/ru/ny2.gif" style=" width:  100%" />-->

							<i class="fa fa-times" style="position:absolute; cursor: pointer; right:5px; top: 5px; font-size:32px; transform: rotate(45deg); font-family: Arial, sans-serif; font-style: normal;">+</i>
							<p style="text-align:center;"><i><b>Құрметті клиент, қош келдіңіз!</b></i></p><br>
							<p>
								Клиенттердің тауарларға немесе қызметтерге қызығушылық деңгейін анықтау және осы тауарлармен немесе қызметтерге  қанағаттану үшін сауалнаманы толтыруға бірнеше минут уақыт бөлуіңізді сұраймыз. <br>
								"Кедентранссервис"АҚ ұсынатын қызметтердің сапасы туралы өз пікіріңізбен бөлісіңіз.<br><br>
								Анонимді сауалнама.<br>
								Сауалнамаға сілтеме:<br>
								<u><a href="https://docs.google.com/forms/d/e/1FAIpQLSdJyELlvrbp0gGNGUCRz1CS1zVOKRBMzTVRSq8cZFVgbQDWTA/viewform?vc=0&c=0&w=1&flr=0" target="_blank">https://docs.google.com/forms/d/e/1FAIpQLSdJyELlvrbp0gGNGUCRz1CS1zVOKRBMzTVRSq8cZFVgbQDWTA/viewform?vc=0&c=0&w=1&flr=0</a></u>
							</p>


						</div>

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
					<div class="hot-opaco1"></div>
					<div class="hot-img1">
						<a href="https://translogistica.kz/kz/kelushilerge/kormege-bilet-alu" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/bann.png"></a>
					</div>
					<!--<div class="hot-opaco2"></div>
					<div class="hot-img2">
						<img src="/img/ny_kz.png">
					</div>-->
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
										if ($slayder["url"] == '#operation') {
											echo '
										<div class="swiper-slide" style="width: 100% !important;">
										<div class="swiper-slide__block">
										<img src="' . $slayder["slayd-foto"] . '" class="swiper-slide__block-img" alt="#" />
										<div class="insert-content">
										<a href="#" class="BtnModal" data-path="arPortfolioItem1">
										<div class="insert-content__text">
										' . $slayder["slayd-tekst"] . '
										</div>
										<div class="insert-content__btn">
										Толығырақ
										</div>
										</a>
										</div>
										</div>
										</div>
										';
										} else {
											echo '
										<div class="swiper-slide" style="width: 100% !important;">
										<div class="swiper-slide__block">
										<img src="' . $slayder["slayd-foto"] . '" class="swiper-slide__block-img" alt="#" />
										<div class="insert-content">
										<a href="' . $slayder["url"] . '">
										<div class="insert-content__text">
										' . $slayder["slayd-tekst"] . '
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
								<?php wp_nav_menu(array(
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

			<section id="operation" data-uk-height-viewport>
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
<!-- 							<div class="statistika-title">
								<img src='<?php echo get_template_directory_uri(); ?>/img/bar-chart.svg' class="statistika-bar__chart" /> Статистика
							</div> -->
<!-- 							<div class="statistika-items">

								<? $stblocki = CFS()->get('stblock');
								foreach ($stblocki as $stblock) {
									echo '
								<div class="statistika-item">
								<div class="statistika-item__photo">
								<img src="' . $stblock["stPhoto"] . '" class="statistika-item__icon" alt="#" />
								</div>
								<p class="statistika-item__text">
								' . $stblock["stText"] . '
								</p>
								</div>
								';
								}
								?>

							</div> -->
						</div>
						<div class="statistika-buttom">
							<div class="statistika-buttom__left">

							</div>
							<div class="statistika-buttom__right">
								<div class="statistika-buttom__one">
									<div class="statistika-buttom__one-block">
<!-- 										<? echo CFS()->get('tekst711'); ?> -->
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
							<?php wp_nav_menu(array(
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPP.svg" alt="#" class="title-icon" /> <? echo CFS()->get('zagolovka1'); ?>
						</div>
						<div class="uslug-items">

							<? $uslugi = CFS()->get('blok-usluga');
							foreach ($uslugi as $uslug) {
								echo '
							<div class="uslug-item">
							<a href="' . $uslug["url"] . '">
							<div class="uslug-item__photo">
							<img src="' . $uslug["foto"] . '" class="uslug-item__icon" alt="#" />
							</div>
							<p class="uslug-item__text">
							' . $uslug["tekst6"] . '
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
							<?php wp_nav_menu(array(
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/tarif.png" class="tarifBg" alt="#" />
					<div class="tarif-container">
						<div class="tarif-left">

						</div>
						<div class="tarif-right">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tarifRight.png" class="tarif-right__bg" alt="#" />
							<div class="tarif-right__block">
								<div class="tarif-right__items">

									<div class="tarif-right__item BtnModal" data-path="arPortfolioItem1">
										<div class="tarif-right__item-icon">
											<img src="<?php echo get_template_directory_uri(); ?>/img/posmotretIcon22.svg" alt="#" class="tarif-right__item-img" />
										</div>
										<div class="tarif-right__item-text">
											<p>
												Қайта тиеу құнын есептеу
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
							<?php wp_nav_menu(array(
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPP.svg" alt="#" class="title-icon" /> <? echo CFS()->get('zagolovka2'); ?>
						</div>
						<div class="production-slider">
							<div class="mySlider">
								<? $partnery = CFS()->get('partnery-blok');
								foreach ($partnery as $partner) {
									echo '
								<div class="mySlider__item">
								<img src="' . $partner["foto1"] . '" class="partnery-item__img" alt="#" />
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
						<?php wp_nav_menu(array(
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
			<section id="operation" data-uk-height-viewport>
				<?php include "news.php" ?>
			</section>
			<section id="operation" class="footR" data-uk-height-viewport>
				<footer class="footer-block footer-block1">
					<div class="footer-block__top">
						<img src="<?php echo get_template_directory_uri(); ?>/img/footerBlockBg.png" class="footer-block__bg" alt="#" />
						<div class="container-footer">

							<div class="footer-wrapper">
								<div class="footer-left">
									<div class="footer-logo">
										<?php the_custom_logo(); ?>
									</div>
									<div class="footer-menu">
										<?php wp_nav_menu(array(
											'theme_location' => 'footer-menu',
											'container' => false,
											'menu_class'      => '',
										)) ?>
									</div>
								</div>
								<div class="footer-rigth">
									<div class="footer-rigth__block">
										<!--<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="footer-rigth__icon" alt="#" />
										</a>-->
										<ul>
										<li style="margin-bottom:1rem"><a href="/caualnamalar-men-saualnamalar/">Сауалнамалар мен анкеталар</a></li>
											<!--<li class="footer-rigth__tel"><a href="tel:87780979707">8 (778) 097-9707</a></li>
											<li class="footer-rigth__tel"><a href="tel:87780979779">8 (778) 097-9779</a></li>
											<li class="footer-rigth__tel"><a href="tel:87780979187">8 (778) 097-9187</a></li>-->

											<li class="footer-rigth__tel"><a href="tel:+7 7172 648 888"> Call center  +7 7172 648 888</a><br>
												<a style="visibility:hidden"> Call center  </a> <a href="tel:+7 778 097 97 97">+7 778 097 97 97</a>
											</li>
											<li class="footer-rigth__tel"><a href="mailto: kense@kdts.kz"> kense@kdts.kz</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-block__bottom">
						<div class="container-footer">
							<div class="footer-items">
								<div class="footer-name">
									1997- <?= date('Y') ?>, “Кедентранссервис” АҚ<br>
								<!--<div style=" font-size:12px; padding-top:10px;"><a href="https://bestweb.kz/sozdaniye-saytov/" target="_blank">Создание и поддержка сайта</a> Digital агентство Bestweb.kz</div>-->
								</div>

								<div class="footer-adders">
									<? echo CFS()->get('adres1', 606); ?>
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
						<?php wp_nav_menu(array(
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
	<style type="text/css">
		.order-form label {
			display: block;
			color: #fff;
			margin-bottom: 0.15rem;
			text-align: left;
		}

		.order-form .form-group {
			margin-bottom: 0.5rem;
			position: relative;
		}

		.order-form .form-control {
			height: 32px;
			width: 100%;
			background: #fff;
			border-radius: 8px;
			border: 0px;
			outline: 0px;
		}

		.order-form .row {
			display: flex;
			align-items: flex-start;
			justify-content: space-between;
		}

		.order-form .row .form-group {
			width: 45%;
		}

		.form-group.country {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.form-group.country label {
			width: 33%;
			white-space: nowrap;
		}

		.phone-form .form-group {
			margin-bottom: 1rem;
			position: relative;
			padding: 0px 50px;
		}

		.phone-form .form-control {
			height: 32px;
			width: 100%;
			background: #fff;
			border-radius: 8px;
			border: 0px;
			outline: 0px;
		}

		@media screen and (min-width: 767px) {
			.arPortfolioModal {
				width: 700px;
				max-width: 700px;
			}
		}

		@media screen and (max-width: 767px) {

			.order-form label,
			.order-form .form-control {
				font-size: 12px;
			}
		}
	</style>

	<!-- JS FILES -->
	<div class="modals">
		<div class="modal-overlay">
			<div class="arPortfolioModal arPortfolioModal-order" data-target="arPortfolioItem1">
				<p class="arPortfolioModal-title">Ставканы есептеуге арналған өтініш</p>
				<?php //echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); 
				?>


				<form method="post" id="order-form" class="order-form">
					<input type="hidden" name="do" value="order">
					<div class="row">
						<div class="form-group">
							<label>БСН*</label>
							<input type="text" name="bin" class="form-control" placeholder="" required="">
						</div>
						<div class="form-group">
							<label>Компанияның Аты*</label>
							<input type="text" name="name" class="form-control" placeholder="" required="">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div>
								<label>Байланыс телефоны*</label>
								<input type="text" name="phone" class="form-control" placeholder="" required="">
							</div>
						</div>
						<div class="form-group">
							<div>
								<label>Электрондық пошта*</label>
								<input type="email" name="email" class="form-control" placeholder="" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Ұшу станциясы*</label>
							<input type="text" name="from" id="state-from" class="form-control" placeholder="" required="">
							<input type="hidden" name="state_from_id" id="state-from-id">
							<input type="hidden" name="state_from_id2" id="state-from-id2">
							<input type="hidden" name="state_from_code" id="state-from-code">
							<img class="state-from-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
						<div class="form-group">
							<label>Мақсатты станция*</label>
							<input type="text" name="to" class="form-control" id="state-to" placeholder="" required="">
							<input type="hidden" name="state_to_id" id="state-to-id">
							<input type="hidden" name="state_to_id2" id="state-to-id2">
							<input type="hidden" name="state_to_code" id="state-to-code">
							<img class="state-to-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>ЕТСНГ жүктері*</label>
							<input type="text" name="gruz1" id="cargo1" class="form-control" placeholder="" required="">
							<input type="hidden" name="cargo_id1" id="cargo-id1">
							<img class="cargo1-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
						<div class="form-group">
							<label>ГНГ жүктері*</label>
							<input type="text" name="gruz2" id="cargo2" class="form-control" placeholder="" required="">
							<input type="hidden" name="cargo_id2" id="cargo-id2">
							<img class="cargo2-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Есептеу түрі*</label>
							<select name="typecalc" class="form-control" placeholder="" required="">
								<option value="Пайдалану">Пайдалану</option>
								<option value="Жіберу">Жіберу</option>
								<option value="Кешенді мөлшерлеме">Кешенді мөлшерлеме</option>
								<!--<option value="Тізбек">Тізбек</option>-->
							</select>
						</div>
						<div class="form-group">
							<label>Жіберу түрі*</label>
							<select name="type" class="form-control" placeholder="" required="">
								<option value="Бойдақ">Бойдақ</option>
								<option value="Топ">Топ</option>
								<option value="Контейнерлік пойыз">Контейнерлік пойыз</option>
							</select>
						</div>

					</div>
					<div class="row" style="display: none;">
						<div class="form-group">
							<label>Вес груза в контейнере</label>
							<input type="text" name="weight" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Объем перевозки</label>
							<input type="text" name="count" class="form-control" placeholder="кол-во вагонов/кол-во контейнеров">
						</div>
					</div>
					<div class="form-group country" style="display: none;">
						<label style="width: 100%">Жеделдетілген аумақтар </label>
						<label>
							<input type="checkbox" name="country[]" value="Қазақстан"> Қазақстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Ресей"> Ресей
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Өзбекстан"> Өзбекстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Қырғызстан"> Қырғызстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Тәжікстан"> Тәжікстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Түрікменстан"> Түрікменстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Қытай"> Қытай
						</label>
					</div>
					<div class=" type-cont-row">
						<div class="form-group type-cont" style="display: none;">
							<label>Контейнер түрі</label>
							<select name="typec" class="form-control" placeholder="" required="">
								<option value="20 фут (24)">20 фут (24)</option>
								<option value="20 фут (30)">20 фут (30)</option>
								<option value="40 фут">40 фут</option>
							</select>
						</div>
						<div class="form-group">
							<label>Вагондар / контейнерлер*</label>
							<select name="vagon" class="form-control" placeholder="" required="">
								<option value="Меншікті">Меншікті</option>
								<option value="Түгендеу">Түгендеу</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Сұраныс бойынша қосымша ақпарат</label>
						<textarea name="info" class="form-control" placeholder=""></textarea>
					</div>



					<p style="color:#fff;">Есептеу контейнерлердің барлық түрлері үшін жүргізіледі (20, 40/45)</p>

					<p style="text-align: center;"><button class="modalBtn">Жіберу</button></p>
				</form>


			</div>


			<div class="arPortfolioModal arPortfolioModal-phone" data-target="arPortfolioItemPhone" style="max-width: 452px;">
				<p class="arPortfolioModal-title">Қайта қоңырау шалуды сұраңыз</p>
				<?php //echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); 
				?>

				<form method="post" id="phone-form" class="phone-form">
					<input type="hidden" name="do" value="phone">

					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Аты-жөні" required="">
					</div>
					<div class="form-group" style="position: relative;">
						<div style="position: relative;">
							<img src="/ru/js/flag.png" style="position: absolute; left: 5px; top: 8px;">
							<input type="text" name="phone" class="form-control" placeholder="+7" required="" style="padding-left: 44px;">
						</div>
					</div>
					<div class="form-group">
						<div>
							<input type="email" name="email" class="form-control" placeholder="Электронды адрес" required="">
						</div>
					</div>


					<p style="text-align: center;"><button class="modalBtn">Жіберу</button></p>
				</form>

			</div>
		</div>
	</div>
	<style type="text/css">
		@media screen and (max-width:767px) {
			.telegram {
				position: fixed !important;
				top: auto !important;
				right: 20px !important;
				bottom: 20px !important;
				z-index: 1010 !important;
			}

			.telegram img {
				width: 50px;
			}

			.BtnModal.phone {
				position: fixed !important;
				top: auto !important;
				right: 20px !important;
				bottom: 80px !important;
				z-index: 1010 !important;
			}

			.BtnModal.phone img {
				width: 50px;
			}
		}
	</style>
	<a href="https://t.me/ao_kdts_bot" target="_blank" class="telegram" style="position: absolute; right: 198px; top: 150px; z-index: 98;">
		<img src="/ru/js/telegram.png">
	</a>
	<a href="#" class="BtnModal phone" data-path="arPortfolioItemPhone" style="position: absolute; right: 128px; top: 150px; z-index: 98;">
		<img src="/ru/js/phone.png">
	</a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--<script src="//code.jivosite.com/widget/OF5ZNNK29W" async></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
<script src="https://www.kdts.kz/wp-content/themes/kdts/js/jquery.onepage-scroll.js"></script>
<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$('select[name=typecalc]').on('change', function(e) {
			if ($(this).val() == 'Жіберу' || $(this).val() == 'Кешенді мөлшерлеме') {
				$('.form-group.country').css("display", "flex")
				$('.type-cont-row').addClass("row")
				$('.type-cont').show();
			} else {
				$('.form-group.country').css("display", "none")
				$('.type-cont-row').removeClass("row")
				$('.type-cont').hide();
			}
		})

		jQuery('#order-form').on('submit', function(e) {
			e.preventDefault();
			var $form = jQuery(this)
			var $btn = $form.find('button');
			$btn.attr("disabled", "disabled");
			jQuery.ajax({
				url: "/send.php",
				data: new FormData(this),
				processData: false,
				type: "POST",
				dataType: "JSON",
				contentType: false,
				success: function(data) {
					if (data.success == 1) {
						$('.arPortfolioModal-order').html(data.msg);
						$form[0].reset();
					} else {
						alert(data.msg);
					}
					$btn.removeAttr("disabled");
				}
			})
		})

		jQuery('#phone-form').on('submit', function(e) {
			e.preventDefault();
			var $form = jQuery(this)
			var $btn = $form.find('button');
			$btn.attr("disabled", "disabled");
			jQuery.ajax({
				url: "/send.php",
				data: new FormData(this),
				processData: false,
				type: "POST",
				dataType: "JSON",
				contentType: false,
				success: function(data) {
					if (data.success == 1) {
						$('.arPortfolioModal-phone').html(data.msg);
						$form[0].reset();
					} else {
						alert(data.msg);
					}
					$btn.removeAttr("disabled");
				}
			})
		})

		$(".main").onepage_scroll({
			sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
			easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
			// "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
			animationTime: 500, // AnimationTime let you define how long each section takes to animate
			pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
			updateURL: false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
			beforeMove: function(index) {}, // This option accepts a callback function. The function will be called before the page moves.
			afterMove: function(index) {}, // This option accepts a callback function. The function will be called after the page moves.
			loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
			keyboard: false, // You can activate the keyboard controls
			responsiveFallback: 1220, // You can fallback to normal page scroll by defining the width of the browser in which
			// you want the responsive fallback to be triggered. For example, set this to 600 and whenever
			// the browser's width is less than 600, the fallback will kick in.
			direction: "vertical" // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
		});
	});
</script>

<script>
	$(document).ready(function() {
		$('.news-items').slick({
			arrows: false,
			slidesToShow: 3,
			pauseOnFocus: true,
			centerMode: false,
			variabeWidth: false,

			responsive: [{
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
	$(document).ready(function() {
		$('.mySlider').slick({
			arrows: true,
			dots: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			pauseOnFocus: true,
			centerMode: false,
			variabeWidth: false,

			responsive: [{
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

<link type="text/css" href="/ru/js/ui/jquery-ui.css" rel="stylesheet" />
<script src="/ru/js/ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/ru/js/ui/jquery-ui.min.js" type="text/javascript"></script>
<style>
	.ui-widget {
		font-family: inherit;
		font-size: 14px;
	}

	.ui-widget-content.ui-autocomplete {
		max-height: 200px;
		overflow-y: auto;
		overflow-x: hidden;
	}

	.modal-header .close {
		margin-top: -30px;
		font-size: 40px;
		line-height: 30px;
	}

	.modal-title {
		font-size: 24px;
	}
</style>
<script type="text/javascript">
	jQuery(function() {
		jQuery("#state-from").autocomplete({
			source: function(request, response) {
				jQuery.ajax({
					url: "/send.php",
					dataType: "jsonp",
					data: {
						do: 'station',
						q: function() {
							return jQuery("#state-from").val()
						},
						name_startsWith: function() {
							return jQuery("#state-from").val()
						}
					},
					beforeSend: function() {
						jQuery('.state-from-loader').show();
					},
					success: function(data) {
						jQuery('.state-from-loader').hide();
						response(jQuery.map(data.result, function(item) {
							return {
								label: item.text,
								code: item.value,
								id2: item.value,
								value: item.text,
								id: item.value
							}

						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				jQuery('#state-from').val(ui.item.value);
				jQuery('#state-from-id').val(ui.item.id).change();
				jQuery('#state-from-id2').val(ui.item.id2).change();
				jQuery('#state-from-code').val(ui.item.code).change();
			}
		});

		jQuery("#state-to").autocomplete({
			source: function(request, response) {
				jQuery.ajax({
					url: "/send.php",
					dataType: "jsonp",
					data: {
						do: 'station',
						q: function() {
							return jQuery("#state-to").val()
						},
						name_startsWith: function() {
							return jQuery("#state-to").val()
						}
					},
					beforeSend: function() {
						jQuery('.state-to-loader').show();
					},
					success: function(data) {
						jQuery('.state-to-loader').hide();
						response(jQuery.map(data.result, function(item) {
							return {
								label: item.text,
								code: item.value,
								id2: item.value,
								value: item.text,
								id: item.value
							}

						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				jQuery('#state-to').val(ui.item.value);
				jQuery('#state-to-id').val(ui.item.id).change();
				jQuery('#state-to-id2').val(ui.item.id2).change();
				jQuery('#state-to-code').val(ui.item.code).change();
			}
		});

		jQuery("#cargo1").autocomplete({
			source: function(request, response) {
				jQuery.ajax({
					url: "/send.php",
					dataType: "jsonp",
					data: {
						do: 'cargo1',
						q: function() {
							return jQuery("#cargo1").val()
						},
						name_startsWith: function() {
							return jQuery("#cargo1").val()
						}
					},
					beforeSend: function() {
						jQuery('.cargo1-loader').show();
					},
					success: function(data) {
						jQuery('.cargo1-loader').hide();
						response(jQuery.map(data.result, function(item) {
							return {
								label: item.text,
								code: item.value,
								id2: item.value,
								value: item.text,
								id: item.value
							}

						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				jQuery('#cargo1').val(ui.item.value);
				jQuery('#cargo-id1').val(ui.item.id).change();
			}
		});
		jQuery("#cargo2").autocomplete({
			source: function(request, response) {
				jQuery.ajax({
					url: "/send.php",
					dataType: "jsonp",
					data: {
						do: 'cargo2',
						q: function() {
							return jQuery("#cargo2").val()
						},
						name_startsWith: function() {
							return jQuery("#cargo2").val()
						}
					},
					beforeSend: function() {
						jQuery('.cargo2-loader').show();
					},
					success: function(data) {
						jQuery('.cargo2-loader').hide();
						response(jQuery.map(data.result, function(item) {
							return {
								label: item.text,
								code: item.value,
								id2: item.value,
								value: item.text,
								id: item.value
							}

						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				jQuery('#cargo2').val(ui.item.value);
				jQuery('#cargo-id2').val(ui.item.id).change();
			}
		});
	});
</script>
<script src="/ru/js/jquery.maskedinput-1.2.2.js" type="text/javascript" data-cfasync="false"></script>
<script type="text/javascript">
	jQuery(function() {
		jQuery('input[name=phone]').mask('+7 (999) 999-99-99');

	})
</script>
</body>

</html>