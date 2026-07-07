
<?php
 /*
 * Template name: rukovodstvo
 */
?>
<?php get_header(); ?>
	<div class="pagination-block">
  		<div class="sdfsdfjsdf">
      		<div class="header-logo1"></div>
            <?php get_template_part('breadcrumbs') ?>
        </div>
		<div class="yazyk">
			<ul>
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/rukovodstvo/', 'https') ?>"> Рус</a></li>
                <li><a href="https://kdts.kz/kompaniya-turaly/basshyly/">Қаз</a></li>
                <li><a href="https://kdts.kz/en/o-kompanii/rukovodstvo/">Eng</a></li>
            </ul>
		</div>
    </div>
   <main>
        <div class="container-rukovodstvo">
            <section class="rukovodstvo-navbar">
                <a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
                        О КОМПАНИИ
                    </a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>    
            </section>
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">

							<?php $sotrudniki = CFS()->get('sotrudniki');
								foreach ($sotrudniki as $sotrudnik) {
									echo '
									 <div class="swiper-slide swiper-slide__width">
										<div class="rukovodstvo-block__top">
											<div class="rukovodstvo-photo">
												<img src="'.$sotrudnik["foto-sotrudnik"].'" class="rukovodstvo-img" alt="#" />
											</div>
											<div class="rukovodstvo-name">
												<p class="rukovodstvo-im">'.$sotrudnik["imya-sotrudnik"].'</p>
												<p class="rukovodstvo-fam">'.$sotrudnik["familiya-sotrudnik"].'</p>
											</div>
										</div>
									</div>
									';
								 }
							?>
					
                        </div>
                        <div class="rukovodstvo-pagination"></div>
                       
                    </div>
					 <div class="rukovodstvo-prev"></div>
                     <div class="rukovodstvo-next"></div>
                </div> <!-- rukovodstvo-wrapper / -->
                <div class="rukovodstvo-wrapper__bottom">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
							
							<?php $sotrudnikTexti = CFS()->get('sotrudniki',17);
								foreach ($sotrudnikTexti as $sotrudnikText) {
									echo '
									 <div class="swiper-slide"> 
										<div class="rukovodstvo-block__bottom">
											<div class="user-name">
											'.$sotrudnikText["imya-sotrudnik"].' '.$sotrudnikText["familiya-sotrudnik"].'
											</div>
											<div class="user-dolzhnost">
												'.$sotrudnikText["dolzhnost-sotrudnik"].'
											</div>
											<div class="user-info">
												<p class="user-path__rukovodstvo">
													'.$sotrudnikText["text955"].'
												</p>
												<p class="user-text__rukovodstvo">
													'.$sotrudnikText["text999"].'
												</p>
											</div>
											<div class="user-info">
												<p class="user-path">
													Профессиональный опыт:
												</p>
												<p class="user-text">
													'.$sotrudnikText["text"].'
												</p>
											</div>
										</div>
									</div>
									';
								 }
							?>
							

                        </div> <!-- swiper-wrapper / -->
                        
                    </div>
                </div> <!-- rukovodstvo-wrapper__bottom / -->
            </section>
	   <!-- rukovodstvo-content / -->
        </div>
	   
	   <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Технические работы</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #343a40;
        }
        .maintenance {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .icon {
            font-size: 80px;
            color: #ffc107;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="maintenance">
        <div class="icon">
            <i class="fas fa-tools"></i>
        </div>
        <h1 class="display-4">Технические работы</h1>
        <p class="lead">Мы улучшаем сайт, чтобы вы могли наслаждаться ещё более качественным сервисом.</p>
        <p>Пожалуйста, загляните позже!</p>
        <a href="/" class="btn btn-warning mt-3">Вернуться на главную</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

	   
        <section class="container-rukovodstvo__two">
            <article class="rukovodstvo-navbar">
                <div class="rukovodstvo-navbar__banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="rukovodstvo-navbar__banner-photo" alt="#"/>
                    <div class="rukovodstvo-navbar__banner-text">
                        <span> График </span> <br/>приема граждан
                    </div>
					
                    <a href="<?php echo CFS()->get('qwe'); ?>" download class="rukovodstvo-navbar__banner-btn">
                        Скачать        
					</a>
                </div>      
            </article>
            <article class="rukovodstvo-content">
                <div class="rukovodstvo-onlayn">
                    <div class="rukovodstvo-onlayn__block">
                        <p class="rukovodstvo-onlayn__title"> Онлайн-заявка на прием к: </p>
						<?php echo do_shortcode('[contact-form-7 id="930" title="rukovodstvo"]'); ?>
                    </div>
                </div>
            </article>
        </section>
    </main>
<?php get_footer(); ?>