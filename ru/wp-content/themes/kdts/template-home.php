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
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
	<style type="text/css">

	</style>
	<script src="https://www.kdts.kz/wp-content/themes/kdts/js/jquery-3.4.1.min.js"></script>

</head>

<body>
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
			<div class="header-top__left">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel" alt="#" />
				<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><? echo CFS()->get('telefon1', 606); ?></a>
				<!--<a href="tel:+7 778 097 91 87" class="header-top__tel-text">+7 778 097 91 87,</a>
				<a href="tel:+7 778 097 91 80" class="header-top__tel-text">+7 778 097 91 80 </a>-->
			</div>
			<div class="header-top__right">
				<p style="text-align: center;"> <a href="" class="open-vote ov1 bvi-link-shortcode " style="margin: 0px 0px 10px; border:0px; display: none;">Телефон доверия АО «Кедентранссервис»<br>

						+7 717 2 64 89 11</a> <br><?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?> </p>
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
					<div href="" class="open-vote bvi-link-shortcode " style="margin: 0px 15px;
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
						<!--
						<a href="tel:+7 778 097 91 87" class="header-top__tel-text">
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
					justify-content: center; display: none;
					text-align: center">Телефон доверия АО «Кедентранссервис»<br>+7 717 2 64 89 11</a>
						<div id="hotline" class="hotline">
							<a href="">
								<img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> горячая линия
							</a>
						</div>
						<div class="hotline"> <a href="https://eotinish.kz/kk"> <img style="height:30px" src="https://www.kdts.kz/ru/wp-content/uploads/2024/02/logo-light.png"> </a> </div>
						<?php echo do_shortcode('[bvi text="Версия для слабовидящих"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="header-menu__wrapper">
				<div class="header-left">
					<div class="header-logo">
						<a href="<? echo home_url() ?>">
							<img src="https://www.kdts.kz/wp-content/themes/kdts/img/Group4444446666.png" />
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

					.open-vote {
						display: inline-block;
						border: 1px solid #fff;
						height: 40px;
						line-height: 40px;
						padding: 0px 15px !important;

					}

					@media screen and (min-width: 768px) {
						.hotline {
							margin-left: 0px;
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



					.menu li {
						font-weight: 500;
						font-size: 16px;
					}

					.visit-img {
						cursor: default;
						position: fixed;
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						z-index: 1000;
						display: none;
						width: 955px;
						max-width: 100%;
						background: #fff;
						border-radius: 8px;
						padding: 25px;
						font-family: 'Roboto', sans-serif;
						color: #000;
						text-align: left;
					}

					.visit-img hr {
						border-color: #000;
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
							font-size: 15px;
						}
					}

					@media screen and (max-width: 768px) {
						.header-menu .hotline a {
							display: flex
						}

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

						.visit-img p {
							font-size: 13px;
							line-height: 16px;
							text-indent: 20px !important;
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

						$('.hot-opaco2').on('click', function(e) {
							e.preventDefault();
							$('.hot-img2').toggleClass("active")
							$('.hot-opaco2').toggleClass("active")
							Cookies.set('bann2', '1', {
								path: '/',
								expires: 1
							})
						})

						$('.open-vote.ov1').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")
						})

						//Всплывающее окно автовизит

						$('.visit-opaco').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")

							Cookies.set('visit', '1', {
								path: '/',
								expires: 1
							})
						})

						$('.visit-img i').on('click', function(e) {
							e.preventDefault();
							$('.visit-img').toggleClass("active")
							$('.visit-opaco').toggleClass("active")

							Cookies.set('visit', '1', {
								path: '/',
								expires: 1
							})
						})

						if (Cookies.get('visit') != '1') {
							$('.visit-img').addClass("active")
							$('.visit-opaco').addClass("active")
						}

						if (Cookies.get('bann') != '1') {
							//$('.hot-img1').addClass("active")
							//$('.hot-opaco1').addClass("active")
						}

						if (Cookies.get('bann2') != '1') {
							//$('.hot-img2').addClass("active")
							//$('.hot-opaco2').addClass("active")
						}
					})
				</script>
				<div class="header-right" style="position: relative;">
					<a href="" class="search-icon"><img src="https://www.kdts.kz/wp-content/themes/kdts/img/search.png"></a>
					<div class="search" style="position: absolute;  top: 100%; right: 88%; width: 185px; display: none;">
						<form role="search" method="get" id="searchform" action="https://www.kdts.kz/ru/">
							<input type="text" value="" name="s" id="s" class="">
							<input type="submit" id="searchsubmit" value="">
						</form>

					</div>

					<div class="personal-area">
						<a href="https://my.kdts.kz/">
							Личный кабинет
						</a>
						<!--<a href="http://terminal.kdts.kz/" target="_blank">
						Автовизит
					</a>-->
						<div class="visit-opaco"></div>
						<div class="visit-img" style="font-size:17px; line-height: 24px; ">
							<!--<img src="/ru/ny2.gif" style=" width:  100%" />-->

							<i class="fa fa-times" style="position:absolute; cursor: pointer; right:5px; top: 5px; font-size:32px; transform: rotate(45deg); font-family: Arial, sans-serif; font-style: normal;">+</i>
							<p style="text-align:center;"><i><b>Уведомление об изменении тарифов</b></i></p><br>
							 
							<p style="text-align:center;"><strong>Уважаемые партнеры!</strong>
							
</p>
							<p>
							АО «Кедентранссервис» (далее – Общество) выражает Вам
благодарность за сотрудничество и настоящим уведомляет о предстоящем
изменении тарифов на оказываемые услуги Общества.</p>
														<p>Сообщаем, что с <b>1 апреля 2026 года</b> планируется корректировка
тарифов на следующие виды услуг:<ul>
<li>- терминальные услуги;</li>
<li>- аренду имущества (открытые площадки, складские помещения,
административные помещения и иные объекты).</li>
</ul></p>
							<p>При этом отмечаем, что с <b>1 января 2026 года тарифы на указанные
услуги Обществом не пересматривались</b>. Решение о корректировке тарифов
принято по итогам анализа деятельности Общества за 2025 год и первый
квартал 2026 года.</p>
														 
							<p>Необходимость изменения тарифов обусловлена рядом объективных
факторов, в том числе:
								<ul>
<li>- увеличением ставки налога на добавленную стоимость с 12% до 16%;</li>
<li>- ростом себестоимости оказываемых услуг;</li>
<li>- общим уровнем инфляции и индексации затрат;</li>
<li>- увеличением расходов на содержание и эксплуатацию
инфраструктуры.</li>
</ul></p>
							<p>В связи с вышеизложенным с <b>1 апреля 2026 года</b> будут введены в
действие <b>обновленные тарифы на терминальные услуги и аренду
имущества</b>.</p>
							<p>Дополнительная информация о новых тарифах будет доведена
посредством официального сайта Общества либо иным установленным
способом уведомления.</p>
							<p>Надеемся на дальнейшее взаимовыгодное сотрудничество и благодарим
Вас за оказанное доверие.</p>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSdJyELlvrbp0gGNGUCRz1CS1zVOKRBMzTVRSq8cZFVgbQDWTA/viewform?vc=0&c=0&w=1&flr=0&pli=1" style="color: blue;">Оценка уровня удовлетворенности клиентов услугами АО "Кедентранссервис"</a>
							<!--
							<hr>
							<p>Настоящим уведомляем Вас, об изменении тарифов оператора вагонов во внутриреспубликанском сообщении, действие которых применяется с 01 апреля 2023 года</p>
							<hr>

							<p>Настоящим Общество уведомляет Вас о необходимости заключения/перезаключения договоров на 2023 через личный кабинет Клиента (для резидентов РК).</p>
							<p>Вы можете авторизоваться по ссылке <a href="https://my.kdts.kz/login">https://my.kdts.kz/login</a> или на главной странице сайта <a href="https://kdts.kz">kdts.kz</a>, в разделе «Личный кабинет».</p>
							<p>При возникновении вопросов по заключению договоров обращайтесь в Call center: <a href="tel:+77172942626">+ 7 7172 94 26 26</a>, <a href="tel:>+77780979797.">+ 7 778 097 97 97.</a></p>
							<hr>

							<p>Сообщаем Вам о повышении тарифа с 11 декабря 2022 года по 30 апреля 2023 года включительно, по станции Достык на участке Бескуль-Достык-Бескуль за дополнительное крепление контейнеров в размере 13 440,00 тенге, с учетом (НДС).

							</p>
							<hr>
							<p>Согласно письма ТОО «КТЖ – Грузовые перевозки» №ГП/7680-И от 5 октября 2022 года АО «Кедентранссервис» сообщает Вам о повышении тарифных ставок Общества с 16 октября 2022 года.</p>
							<p>Для сведения клиентов: ранее выданные коммерческие предложения считаются неактуальными с 16 октября 2022 года. Прейскуранты остаются без изменений.</p>
							<hr>
							<p>Согласно пункту 4.1 Договора оказания услуг оператором вагонов,
								пункту 3.1.2. Договора оказания услуг оператора вагонов при перегрузе
								контейнеров через погранпереходы Достык, Алтынколь в международном
								сообщении (импорт, транзит) АО «Кедентранссервис» сообщает об
								изменениях ставок на услуги оператора вагонов при перевозках в
								международном (экспорт, импорт, транзит) и внутриреспубликанском
								сообщении с <b>01 января 2023 года</b>.</p>
							<p>Обновленные ставки на услуги оператора вагонов позже будут
								дополнительно размещены здесь на сайте, следите за новостями.</p>
-->
							<!--<hr>
							<p>Сообщаем Вам, что в настоящее время Общество в Личном кабинете запустило функцию «Заявка на перевозку». С помощью данной функции, после подписания ПДЦ (протокол договорной цены), у вас появилась возможность подать заявку по договорам ОВ (оперирование) и ТЭО (транспортно-экспедиционное обслуживание) в Личном кабинете.</p><br>
							<p>При возникновении вопросов обращайтесь в <strong>Call center:</strong></p><br>
							<ul>
								<li>+7 7172 94 26 26</li>
								<li>+7 778 097 97 97</li>
							</ul>-->
							<!--
							<p style="text-align:center;"><i><b>АО «Кедентранссервис» примет участие в 25-й Международной выставке Trans Logistica Kazakhstan 2022</b></i></p><br>
							<p>АО «Кедентранссервис» (далее – Общество) информирует Вас о том, что в период с 20 по 22 сентября 2022 года планируется проведение в г. Алматы отраслевой 25-й Международной выставки «Транспорт и Логистика» - Trans Logistica Kazakhstan 2022 (далее – Выставка). Общество примет участие в Выставке и ждет своих клиентов для обсуждения перспективных планов по сотрудничеству.</p>
							<p>&nbsp;</p>
							<p>В связи с этим, приглашаем Вас в период с 20 по 22 сентября 2022 года посетить стенд АО «Кедентранссервис» (11 павильон, 251 место) в рамках юбилейной Выставки. По вопросам организации деловых встреч с руководством просим связаться с Руководителем Сектора продаж Исиным Кайратом Амангельдиновичем +7 778 097 9187.
							<p>&nbsp;</p>
							<ul>
 								<li>Место проведения: г. Алматы, Республика Казахстан, КЦДС «Атакент»</li>
 								<li>Регистрация по ссылке: <a href="https://translogistica.kz/ru/poluchite-bilet-na-vystavku">https://translogistica.kz/ru/poluchite-bilet-na-vystavku</a></li>
 								<li>Промокод: <strong>TRAF414F1S</strong></li>
 								<li>Общество желает Вам успехов и процветания вашего бизнеса.</li>
							</ul>
							<!--
						<p style="text-align:center;"><i><b>Уважаемый клиент!</b></i></p><br>
						<p>
								Сообщаем Вам, что в настоящее время Общество в Личном кабинете запустило функцию «Заявка на перевозку». С помощью данной функции у вас появилась возможность подать заявку по договорам ОВ (оперирование) и ТЭО (транспортно-экспедиционное обслуживание) в Личном кабинете.<br><br>
								При возникновении вопросов обращайтесь в Call center:<br><br>+7 7172 94 26 26, + 7 778 097 97 97.
						</p>
						<hr style="width:100%;text-align:center">
						<p>Акционерное общество &laquo;Кедентранссервис&raquo; проводит исследование по оценке удовлетворенности наших клиентов качеством предоставляемых услуг.</p><br>
						<p>Просим Вас выделить всего несколько минут для заполнения анкеты. Пожалуйста поделитесь своим мнением о качестве услуг, оказываемых АО &laquo;Кедентранссервис&raquo;.</p>
						<p><i>Анкета анонимная.</i></p>
						<p>&nbsp;</p>
						<p>Для прохождения опроса можно щелкнуть по следующей ссылке:</p>

						<p>&nbsp;</p>
						<p><a target="_blank" style="word-break: break-all ; text-decoration:underline" href="https://docs.google.com/forms/d/1crFUfR7b6GDJDl70VZhdsDL0RCAgjujZLn22WKJMgFI/edit">https://docs.google.com/forms/d/1crFUfR7b6GDJDl70VZhdsDL0RCAgjujZLn22WKJMgFI/edit</a></p>
						<p>&nbsp;</p>
							<!--
						<p style="text-align:center;"><i><b>Уважаемые клиенты акционерного общества &laquo;Кедентранссервис&raquo;!</b></i></p><br>
						<p>В связи с установлением права собственности на <u><a href="/ru/wp-content/uploads/2022/01/активная опция_Перечень контейнеров.doc">141 единицу контейнеров</a></u>, хранящихся на территории грузового двора филиала АО &laquo;Кедентранссервис&raquo; по городу Алматы и Алматинской, Общество принимает требования собственников об истребовании контейнеров, при наличии подтверждающих документов на право владения или право собственности, либо уведомления об отказе от права собственности без намерения сохранить какие-либо права на контейнеры физическим или юридическим лицом. Обращения собственников контейнеров принимаются по адресу:</p>
						<ul style="list-style:disc; margin-left:30px;">
							<li>
								<p>050014, РК, г. Алматы, улица Северное кольцо, 57</p>
							</li>
							<li>
								<p>010000, РК, г. Нұр-Сұлтан, ул. Достык 18, БЦ &laquo;Москва&raquo;</p>
							</li>
						</ul>
						<hr>
						<p>Сообщаем Вам о том, что в связи с проведением технической работы на стороне сервера АО "Кедентранссервис" временно приостановлена работа  корпоративной почты.<br>
						В связи с этим, просим все заявки для расчета ставок направлять через Личный кабинет клиента до возобновления работы корпоративной почты. </p><br>

						<p>Вы можете авторизоваться по ссылке <u><a href="https://my.kdts.kz/login">https://my.kdts.kz/login</a></u> или на главной странице сайта kdts.kz, в разделе «Личный кабинет».</p><br>

						<p>Приносим извинения за возможные неудобства.<br>
						При возникновении вопросов Вы можете обращаться:<br>
						+7 717 2 94 26 26         +7 778 097 97 97 </p>
						<p>Акционерное общество &laquo;Кедентранссервис&raquo; запустило в работу сервис &laquo;Личный кабинет&raquo;.</p><br>
						<p>Личный кабинет - это более удобный и эффективный инструмент в руках наших клиентов, который позволит:</p><br>
						<ul>
							<li>
								<p>✔подать заявки на расчет ставки</p>
							</li>
							<li>
								<p>✔получить коммерческое предложение</p>
							</li>
							<li>
								<p>✔заключить договор на получение транспортных услуг с применением ЭЦП (НУЦ РК)</p>
							</li>
							<li>
								<p>✔регистрировать автовизит на терминале Алматы-1 филиала АО &laquo;Кедентранссервис&raquo;.</p>
							</li>
						</ul><br>
						<p>Вы можете авторизоваться по ссылке <u><a href="https://my.kdts.kz/login">https://my.kdts.kz/login</a></u> или на главной странице сайта kdts.kz, в разделе &laquo;Личный кабинет&raquo;.</p><br>
					<p>Если на каком-то этапе регистрации у Вас возникнут сложности, Вы можете написать на <u><a href="mailto:support@kdts.kz">support@kdts.kz</a></u> в рабочие дни с 09:00 час.– до 18:30 час. и позвонить на тел. +7 778 097 9266; +7 7172 648 888 (вн. 9266)</p>
-->
							<!--<p>Если на каком-то этапе регистрации у Вас возникнут сложности, Вы можете обратиться к администратору системы Айдару Махметову в рабочие дни с 09:00час.– до 18:30час.  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="24px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
							<path d="M256,32c123.5,0,224,100.5,224,224S379.5,480,256,480S32,379.5,32,256S132.5,32,256,32 M256,0C114.625,0,0,114.625,0,256
							s114.625,256,256,256s256-114.625,256-256S397.375,0,256,0L256,0z M398.719,341.594l-1.438-4.375
							c-3.375-10.063-14.5-20.563-24.75-23.375L334.688,303.5c-10.25-2.781-24.875,0.969-32.406,8.5l-13.688,13.688
							c-49.75-13.469-88.781-52.5-102.219-102.25l13.688-13.688c7.5-7.5,11.25-22.125,8.469-32.406L198.219,139.5
							c-2.781-10.25-13.344-21.375-23.406-24.75l-4.313-1.438c-10.094-3.375-24.5,0.031-32,7.563l-20.5,20.5
							c-3.656,3.625-6,14.031-6,14.063c-0.688,65.063,24.813,127.719,70.813,173.75c45.875,45.875,108.313,71.344,173.156,70.781
							c0.344,0,11.063-2.281,14.719-5.938l20.5-20.5C398.688,366.063,402.063,351.656,398.719,341.594z"/>
						</svg> +7 778 097 9177, или написать на <u><a href="mailto:a.makhmetov@kdts.kz">a.makhmetov@kdts.kz</a></u>.</p>

						<p>Если на каком-то этапе регистрации  у Вас возникнут сложности, Вы можете обратиться в рабочие дни 09:00 час. – до 18:00 час. +7 7172 942626, +7 778 097 9797 и нажать цифру 1.</p>-->


							<!--<p align="center" style="text-indent: 0px!important;"><i><b>Уважаемый Клиент, приветствуем Вас!</b></i></p>
							<p>&nbsp;</p>
							<p style="text-indent: 40px; margin-bottom:10px;">Акционерное общество &laquo;Кедентранссервис&raquo; проводит исследование по оценке удовлетворенности наших клиентов качеством предоставляемых услуг.</p>
							<p style="text-indent: 40px;">Просим Вас выделить всего несколько минут для заполнения анкеты. Пожалуйста поделитесь своим мнением о качестве услуг, оказываемых АО &laquo;Кедентранссервис&raquo;.</p>
							<p style="text-indent: 0px!important;"><i>Анкета анонимная.</i></p>
							<p>&nbsp;</p>
							<p style="text-indent: 0px!important;">Для прохождения опроса можно щелкнуть по следующей ссылке (или нажмите CTRL и щелкните ссылку):</p>

							<p>&nbsp;</p>
							<p style="text-indent: 0px!important;"><a target="_blank" style="word-break: break-all ; text-decoration:underline" href="https://docs.google.com/forms/d/1crFUfR7b6GDJDl70VZhdsDL0RCAgjujZLn22WKJMgFI/edit">https://docs.google.com/forms/d/1crFUfR7b6GDJDl70VZhdsDL0RCAgjujZLn22WKJMgFI/edit</a></p>
							<p>&nbsp;</p>


							<p align="center" style="text-indent: 0px!important;"><i><b>Уважаемые клиенты АО &laquo;Кедентранссервис&raquo;!</b></i></p>
							<p >&nbsp;</p>
							<p style="text-indent: 40px; margin-bottom:10px;">Компания благодарит вас за сотрудничество, желает успехов и процветания в вашей деятельности.</p>
							<p style="text-indent: 40px; margin-bottom:10px;">Сообщаем Вам, что на сайте в разделе <u><a href="http://www.kdts.kz/ru/klientam/tipovye-dogovora/"><b>Клиентам</b></a></u> можете ознакомиться с информацией о заключении и перезаключении договоров на 2022 год.</p>
							<p style="text-indent: 40px; margin-bottom:10px;">Call center: +7 7172 94 26 26, + 7 778 097 97 97</p>
							<p style="text-indent: 40px; margin-bottom:10px;"><u><a href="mailto:kense@kdts.kz">kense@kdts.kz</a></u></p>-->


							<!--<p align="center"><b>Уважаемые клиенты АО &laquo;Кедентранссервис&raquo;!</b></p>
								<p >&nbsp;</p>
								<p style="text-indent: 40px; margin-bottom:10px;" >Компания благодарит вас за сотрудничество, желает успехов и процветания в вашей деятельности.</p>
								<p style="text-indent: 40px; margin-bottom:10px;">Сообщаем Вам, что на сайте в разделе Клиентам размещена важная информация о заключении и перезаключении договоров на 2022 год.</p>
								<p style="text-indent: 40px; margin-bottom:10px;">Напоминаем, что с порядком подачи заявки на заключение договоров Вы можете ознакомиться <a href="https://www.kdts.kz/ru/klientam/tipovye-dogovora/"><b><u>по ссылке</u></b></a>.</p>
								<p style="text-indent: 40px; margin-bottom:10px;">При возникновении вопросов по заключению договоров обращайтесь в Call center: +7 7172 94 26 26, + 7 778 097 97 97.</p>
								<p style="text-indent: 40px; margin-bottom:10px;">Заявку также можете отправить на электронную почту: <a href="mailto:kense@kdts.kz"><u>kense</u><u>@</u><u>kdts</u><u>.</u><u>kz</u></a>.</p>-->

						</div>
					</div>
					<div class="hotline">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> горячая линия
						</a>
					</div>
					<div class="hot-opaco"></div>
					<div class="hot-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/h1.jpg">
					</div>
					<div class="hot-opaco1"></div>
					<div class="hot-img1">
						<a href="https://translogistica.kz/ru/poluchite-bilet-na-vystavku?promo=TRA7QEH8VD" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/bann.png"></a>
					</div>

					<!--<div class="hot-opaco2"></div>
					<div class="hot-img2">
						<img src="/img/ny_ru.png">
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
												<a href="https://my.kdts.kz/login"  >
												<div class="insert-content__text">
												' . $slayder["slayd-tekst"] . '
												</div>
												<div class="insert-content__btn">
												Перейти
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
												ПОДРОБНЕЕ
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
									<a href="<? echo home_url('/o-kompanii', 'https') ?>" class="abount-btn">
										ПОДРОБНЕЕ
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
<!-- 							<div class="statistika-items" style="max-width:666px;">

								<? $stblocki = CFS()->get('stblock');
								foreach ($stblocki as $stblock) {
									echo '
										<div class="statistika-item">
										<div class="statistika-item__photo">
										<img src="' . $stblock["stPhoto"] . '" class="statistika-item__icon" alt="#" />
										</div>
										<p class="statistika-item__text" style="line-height: 22.4px;">
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
									<a href="https://my.kdts.kz/login">
										<div class="tarif-right__item ">
											<div class="tarif-right__item-icon">
												<img src="<?php echo get_template_directory_uri(); ?>/img/posmotretIcon22.svg" alt="#" class="tarif-right__item-img" />
											</div>
											<div class="tarif-right__item-text">
												<p>
													Расчет стоимости перевозки
												</p>
											</div>
										</div>
									</a>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="language-img" alt="#" />
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
											<li style="margin-bottom:1rem"><a href="/ru/oprosy-i-ankety/">Опросы и анкеты</a></li>
											<!--<li class="footer-rigth__tel"><a href="tel:87780979707">8 (778) 097-9707</a></li>
													<li class="footer-rigth__tel"><a href="tel:87780979779">8 (778) 097-9779</a></li>
													<li class="footer-rigth__tel"><a href="tel:87780979187">8 (778) 097-9187</a></li>-->

											<li class="footer-rigth__tel"><a href="tel:77172648888"> Call center  +7 7172 648 888</a><br>
												<a style="visibility:hidden"> Call center  </a> <a href="tel:+7 778 097 97 97">+7 778 097 97 97</a>
											</li>
											<li class="footer-rigth__tel"><a href="mailto:kense@kdts.kz">kense@kdts.kz</a></li>
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
									1997- <?= date('Y') ?>, АО «Кедентранссервис»<br>
									<!--<div style=" font-size:12px; padding-top:10px;"><a href="https://bestweb.kz/sozdaniye-saytov/" target="_blank">Создание и поддержка сайта</a> Digital агентство Bestweb.kz</div>-->
								</div>

								<div class="footer-adders">
									<? echo CFS()->get('adres1', 606); ?>
									<p>БЦ «Москва»</p>
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
							<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">

								<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebookFFF.svg" class="language-img" alt="#" />
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- Контакты -->
		</div>

	</div>

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
				<p class="arPortfolioModal-title">Заявка на расчет ставки</p>
				<?php //echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); 
				?>

				<form method="post" id="order-form" class="order-form">
					<input type="hidden" name="do" value="order">
					<div class="row">
						<div class="form-group">
							<label>БИН*</label>
							<input type="text" name="bin" class="form-control" placeholder="" required="">
						</div>
						<div class="form-group">
							<label>Наименование компании*</label>
							<input type="text" name="name" class="form-control" placeholder="" required="">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div>
								<label>Контактный телефон*</label>
								<input type="text" name="phone" class="form-control" placeholder="" required="">
							</div>
						</div>
						<div class="form-group">
							<div>
								<label>Электронная почта*</label>
								<input type="email" name="email" class="form-control" placeholder="" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Станция отправления*</label>
							<input type="text" name="from" id="state-from" class="form-control" placeholder="" required="">
							<input type="hidden" name="state_from_id" id="state-from-id">
							<input type="hidden" name="state_from_id2" id="state-from-id2">
							<input type="hidden" name="state_from_code" id="state-from-code">
							<img class="state-from-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
						<div class="form-group">
							<label>Станция назначения*</label>
							<input type="text" name="to" class="form-control" id="state-to" placeholder="" required="">
							<input type="hidden" name="state_to_id" id="state-to-id">
							<input type="hidden" name="state_to_id2" id="state-to-id2">
							<input type="hidden" name="state_to_code" id="state-to-code">
							<img class="state-to-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Груз ЕТСНГ*</label>
							<input type="text" name="gruz1" id="cargo1" class="form-control" placeholder="" required="">
							<input type="hidden" name="cargo_id1" id="cargo-id1">
							<img class="cargo1-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
						<div class="form-group">
							<label>Груз ГНГ*</label>
							<input type="text" name="gruz2" id="cargo2" class="form-control" placeholder="" required="">
							<input type="hidden" name="cargo_id2" id="cargo-id2">
							<img class="cargo2-loader" src="/ru/js/bx_loader.gif" style="position: absolute;z-index: 10; right: 10px;height: 25px;  width: 25px;  top: 24px; display: none;">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Тип расчета*</label>
							<select name="typecalc" class="form-control" placeholder="" required="">
								<option value="Оперирование">Оперирование</option>
								<option value="Экспедирование">Экспедирование</option>
								<option value="Комплексная ставка">Комплексная ставка</option>
								<!--<option value="Кругорейс">Кругорейс</option>-->
							</select>
						</div>
						<div class="form-group">
							<label>Тип отправки*</label>
							<select name="type" class="form-control" placeholder="" required="">
								<option value="Одиночная">Одиночная</option>
								<option value="Групповая">Групповая</option>
								<option value="Контейнерный поезд">Контейнерный поезд</option>
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
						<label style="width: 100%">Экспедируемые территории </label>
						<label>
							<input type="checkbox" name="country[]" value="Казахстан"> Казахстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Россия"> Россия
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Узбекистан"> Узбекистан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Киргизстан"> Киргизстан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Таджикистан"> Таджикистан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Туркменистан"> Туркменистан
						</label>
						<label>
							<input type="checkbox" name="country[]" value="Китай"> Китай
						</label>
					</div>
					<div class=" type-cont-row">
						<div class="form-group type-cont" style="display: none;">
							<label>Тип контейнера</label>
							<select name="typec" class="form-control" placeholder="" required="">
								<option value="20 фут (24)">20 фут (24)</option>
								<option value="20 фут (30)">20 фут (30)</option>
								<option value="40 фут">40 фут</option>
							</select>
						</div>
						<div class="form-group">
							<label style="white-space: nowrap">Принадлежность вагонов/контейнеров</label>
							<select name="vagon" class="form-control" placeholder="">
								<option value="Собственный">Собственный</option>
								<option value="Инвентарный">Инвентарный</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Дополнительная информация по запросу</label>
						<textarea name="info" class="form-control" placeholder=""></textarea>
					</div>



					<p style="color:#fff;">Расчет проводится по всем видам контейнеров (20, 40/45)</p>

					<p style="text-align: center;"><button class="modalBtn">Отправить</button></p>
				</form>

			</div>


			<div class="arPortfolioModal arPortfolioModal-phone" data-target="arPortfolioItemPhone" style="max-width: 452px;">
				<p class="arPortfolioModal-title">Заказать обратный звонок</p>
				<?php //echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); 
				?>

				<form method="post" id="phone-form" class="phone-form">
					<input type="hidden" name="do" value="phone">

					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Имя" required="">
					</div>
					<div class="form-group" style="position: relative;">
						<div style="position: relative;">
							<img src="/ru/js/flag.png" style="position: absolute; left: 5px; top: 8px;">
							<input type="text" name="phone" class="form-control" placeholder="+7" required="" style="padding-left: 44px;">
						</div>
					</div>
					<div class="form-group">
						<div>
							<input type="email" name="email" class="form-control" placeholder="Электронная почта" required="">
						</div>
					</div>


					<p style="text-align: center;"><button class="modalBtn">Отправить</button></p>
				</form>

			</div>
			
			<div class="arPortfolioModal arPortfolioModal-phone" data-target="hrPortfolioItemPhone" style="max-width: 452px;">
				<p class="arPortfolioModal-title">Заказать обратный звонок</p>
				<?php //echo do_shortcode('[contact-form-7 id="928" title="Контактная форма 1"]'); 
				?>

				<form method="post" id="phone-form" class="phone-form">
					<input type="hidden" name="do" value="phone">

					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Имя" required="">
					</div>
					<div class="form-group" style="position: relative;">
						<div style="position: relative;">
							<img src="/ru/js/flag.png" style="position: absolute; left: 5px; top: 8px;">
							<input type="text" name="phone" class="form-control" placeholder="+7" required="" style="padding-left: 44px;">
						</div>
					</div>
					<div class="form-group">
						<div>
							<input type="email" name="email" class="form-control" placeholder="Электронная почта" required="">
						</div>
					</div>


					<p style="text-align: center;"><button class="modalBtn">Отправить</button></p>
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

<!-- <a href="#"   data-path="hrPortfolioItemPhone" style="position: absolute;  right: 258px; top: 150px; z-index: 98;">
		<img src="/ru/js/flag.png">
	</a> -->

	<a href="https://t.me/ao_kdts_bot" target="_blank" class="telegram" style="position: absolute; right: 198px; top: 150px; z-index: 98;">
			<img src="/ru/js/telegram.png">
	</a>

	<a href="#" class="BtnModal phone" data-path="arPortfolioItemPhone" style="position: absolute; right: 128px; top: 150px; z-index: 98;">
		<img src="/ru/js/phone.png">
	</a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
<script src="https://www.kdts.kz/wp-content/themes/kdts/js/jquery.onepage-scroll.js"></script>



<?php wp_footer(); ?>
<script>
	$(document).ready(function() {


		$('select[name=typecalc]').on('change', function(e) {
			if ($(this).val() == 'Экспедирование' || $(this).val() == 'Комплексная ставка') {
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
				url: "/ru/send.php",
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
				url: "/ru/send.php",
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
	var swiper = new Swiper('.container-partnery', {
		slidesPerView: 2,
		spaceBetween: 10,
		loop: true,
		slidesPerGroup: 2,
		breakpoints: {
			920: {
				slidesPerView: 4,
				slidesPerGroup: 4,
			},
			720: {
				slidesPerView: 3,
				slidesPerGroup: 3,
			},
		},
		pagination: {
			el: '.partnery-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.partnery-next',
			prevEl: '.partnery-prev',
		},
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
	let phone_menu = document.querySelector('.phone-menu__img');
	let header_menu = document.querySelector('.header-menu');
	phone_menu.addEventListener('click', () => {
		header_menu.classList.toggle('menu-phone__active')
		console.log(phone_menu)
	})
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
<!--<script src="//code.jivosite.com/widget/t5KQ39PfPV" async></script>-->

</html>