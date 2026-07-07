<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
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
    <header class="header">
		 <div class="header-phone">
				<div class="header-top__left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel" alt="#" />
					<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text"><? echo CFS()->get('telefon1',606); ?> </a>
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
					<a href="tel:<? echo CFS()->get('telefon1', 606); ?>" class="header-top__tel-text">
					<!--	<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" class="header-top__tel-img" alt="#" /> -->
						<? echo CFS()->get('telefon1', 606); ?>
					</a>
				</div>
				<div class="header-top__right">
					<p> <?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?> </p>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="header-menu__wrapper">
				<div class="header-left">
					<div class="header-logo">
						<a href="<? echo home_url() ?>">
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
				  <div class="header-right">
						<div class="search">
							<!-- <input type="search" class="search-input" name="search" /> -->
							<?php get_search_form(); ?>

						</div>

					  <div class="personal-area">
						  <a href="https://cabinet.kdts.kz:9150/">
						  	Личный кабинет
						  </a>
					  </div>
				  </div>
			</div>
		</div>
	</header>
