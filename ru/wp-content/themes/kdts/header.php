<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<style type="text/css">

		</style>
	</head>

	<body class="page<?php the_ID(); ?> body-bc">
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

		<?php if (strstr($_SERVER["REQUEST_URI"], '/klientam123/')){ ?>

		<style type="text/css">
		.visit-img{
			cursor: default;
			position: fixed;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			z-index: 1000;display: none;
			width: 800px;
			max-width:100%;
			background: #fff;
			border-radius:8px;
			padding:25px;
			font-family: 'Roboto', sans-serif;
			color: #000;
			text-align:left;
		}

		.visit-img.active{
			display: block;
		}
		.visit-opaco{
			position: fixed;
			left: 0%;
			top: 0%;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.2);
			z-index: 999;display: none;
		}
		.visit-opaco.active{
			display: block;
		}



		@media screen and (max-width:767px) {
			.visit-img p{
				font-size: 13px;
				line-height:15px;
			}
		}
	</style>
	<div class="visit-opaco"></div>
	<div class="visit-img" style="font-size:17px; line-height: 24px;">
		<i class="fa fa-times" style="position:absolute; cursor: pointer; right:15px; top: 15px; font-size:32px; transform: rotate(45deg); font-family: Arial, sans-serif;">+</i>
		<p align="center"><b>Уважаемые клиенты АО &laquo;Кедентранссервис&raquo;!</b></p>
		<p >&nbsp;</p>
		<p style="text-indent: 40px; margin-bottom:10px;">АО &laquo;Кедентранссервис&raquo; выражает признательность за доверие и сотрудничество! Желаем процветания и успехов в Вашей деятельности.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">На сегодняшний день Общество является крупнейшим оператором логистических терминалов в Республике Казахстан, который присутствует на рынке транспортных услуг более 20 лет.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">Общество занимает лидирующее положение по перегрузу ввозимых из Китая грузов и контейнеров на пограничных станциях Достык и Алтынколь, оперирует 5 000 фитинговыми платформами, осуществляет контейнерные перевозки по различным маршрутам.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">Напоминаем Вам, что с декабря 2020 года заключаемые договоры с Обществом действуют один календарный год. В связи с чем, а также в целях дальнейшего сотрудничества, Общество уведомляет Вас о необходимости заключения/перезаключения договоров на 2022 год, в том числе договоров, заключенных с Обществом до декабря 2020 года.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">С порядком подачи заявки на заключение договоров Вы можете ознакомиться на сайте Общества в данном <a href="https://www.kdts.kz/ru/klientam/tipovye-dogovora/"><b><u>разделе Клиентам</u></b></a>.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">При возникновении вопросов по заключению договоров обращайтесь в Call center: +7 7172 94 26 26, + 7 778 097 97 97.</p>
		<p style="text-indent: 40px; margin-bottom:10px;">Заявку также можете отправить на электронную почту: <a href="mailto:kense@kdts.kz"><u>kense</u><u>@</u><u>kdts</u><u>.</u><u>kz</u></a>.</p>


	</div>
	<script type="text/javascript">
		$(function() {
			$('.visit-opaco').on('click', function(e) {
				e.preventDefault();
				$('.visit-img').toggleClass("active")
				$('.visit-opaco').toggleClass("active")

				Cookies.set('visitt1', '1', { path: '/', expires: 1  })
			})

			$('.visit-img i').on('click', function(e) {
				e.preventDefault();
				$('.visit-img').toggleClass("active")
				$('.visit-opaco').toggleClass("active")

				Cookies.set('visitt1', '1', { path: '/', expires: 1  })
			})

			$('.visit-img a').on('click', function(e) {
				$('.visit-img').toggleClass("active")
				$('.visit-opaco').toggleClass("active")

				Cookies.set('visitt1', '1', { path: '/', expires: 1  })
			})

			if (Cookies.get('visitt1')!='1'){
				$('.visit-img').addClass("active")
				$('.visit-opaco').addClass("active")
			}
		})
	

	</script>
<?php } ?>
	<header class="header">
		<div class="header-phone">
			<div class="header-top__left" style="flex-wrap:wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel" alt="#" />
				<a href="tel:<?php echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><?php echo CFS()->get('telefon1',606); ?>,</a>
                    <a href="tel:+7 778 097 91 87" class="header-top__tel-text">+7 778 097 91 87,</a>
					<a href="tel:+7 778 097 91 80" class="header-top__tel-text">+7 778 097 91 80 </a>

			</div>
			<div class="header-top__right">
				<p> <?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>  </p>
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
					<a href="tel:<?php echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text">
							<!--	<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel-img" alt="#" /> -->
							<?php echo CFS()->get('telefon1', 606); ?>
						</a>
						<!--<a href="tel:+7 778 097 91 87" class="header-top__tel-text">
							 +7 778 097 91 87
						</a>
						,
                    <a href="tel:+7 778 097 91 80" class="header-top__tel-text">
                    +7 778 097 91 80
                    </a>-->
				</div>
				<div class="header-top__right ">
					<div class="d-flex">
						<div class="hotline">
							<a href="">
								<img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg"> горячая линия
							</a>
						</div>
					
						
						<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?> </div>
					</div>
				</div>
			</div>
			<div class="header-menu">
				<div class="header-menu__wrapper">
					<div class="header-left">
						<div class="header-logo">
							<a href="<?php echo home_url() ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/Group444444.png"/>
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
					<style type="text/css">
					@media screen and (min-width:1600px) {
						.footer-rigth {
							display: flex;
							align-items: flex-start;
							padding-top: 3rem;
						}
					}
					.d-flex{
						display: flex;
						flex-wrap: nowrap;
						align-items: center;
					}
					.search-icon{
						margin-right: 20px;

					}
					.header-right{
						align-items: center;
					}

					@media screen and (min-width: 768px){
						.hotline{
							margin-left: 0px;
						}
					}

					.header-menu .hotline a{
						display: none;
						align-items: center;
						padding: 0px 15px;
						border: 1px solid #005bbf;
						text-transform: uppercase;
						color: #676767;
						height: 37px;
						line-height: 37px;
						font-family: Roboto,sans-serif;
						font-style: normal;
						font-weight: 500;
						font-size: 16px;
						justify-content: center;
						max-width: 300px;
						margin: 0 auto
					}
					.header-menu .hotline a img{
						margin-right: 10px;
					}

					.header-top .hotline a{
						display: flex;
						align-items: center;
						padding: 0px 15px;
						border: 1px solid #fff;
						background-color: #fff;
						text-transform: uppercase;
						color: #676767;
						height: 37px;
						line-height: 37px;
						font-family: Roboto,sans-serif;
						font-style: normal;
						font-weight: 500;
						font-size: 16px;
						justify-content: center;
						max-width: 300px;
						margin: 0 15px 0 0
					}
					.header-top .hotline a img{
						margin-right: 10px;
					}

					.header-right .search.active{
						display: block !important;
					}
					.hot-img{
						position: fixed;
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						z-index: 1000;display: none;
					}

					.hot-img.active{
						display: block;
					}
					.hot-opaco{
						position: fixed;
						left: 0%;
						top: 0%;
						width: 100%;
						height: 100%;
						background: rgba(0,0,0,0.2);
						z-index: 999;display: none;
					}
					.hot-opaco.active{
						display: block;
					}

					.menu li {
						font-weight: 500;
						font-size: 16px;
					}

					.rukovodstvo-navbar__block li ul{
					    padding-top: 1rem;
					    padding-left: 1rem;
					}

					.rukovodstvo-navbar__block li ul li:last-child{
					    padding: 0px;
					}
					.rukovodstvo-navbar__block li li a{
						color: #676767;
					}
					.rukovodstvo-navbar__block li li.active-menu-left a{
						color: #54b2ff!important;
					}


					@media screen and (max-width:1320px){
						.menu li {
							font-weight: 500;
							font-size: 15px;
						}
					}

					@media screen and (max-width: 768px){
						.search-icon{
							display: none;
						}
						.hotline{
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
						<form role="search" method="get" id="searchform" action="https://www.kdts.kz/ru/">
							<input type="text" value="" name="s" id="s" class="">
							<input type="submit" id="searchsubmit" value="">
						</form>

					</div>

					<div class="personal-area">
						<a href="https://my.kdts.kz/">
							Личный кабинет
						</a>




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
				</div>
			</div>
		</div>
	</header>
