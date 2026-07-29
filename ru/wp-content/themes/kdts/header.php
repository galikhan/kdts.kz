<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php include get_template_directory() . '/icons/sprite.svg'; ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window,document,"script","https://mc.yandex.ru/metrika/tag.js","ym");
    ym(79124866,"init",{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/79124866" style="position:absolute;left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php if (strstr($_SERVER["REQUEST_URI"], '/klientam123/')): ?>
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
            Cookies.set('visitt1', '1', { path: '/', expires: 1 })
        })
        $('.visit-img i').on('click', function(e) {
            e.preventDefault();
            $('.visit-img').toggleClass("active")
            $('.visit-opaco').toggleClass("active")
            Cookies.set('visitt1', '1', { path: '/', expires: 1 })
        })
        $('.visit-img a').on('click', function(e) {
            $('.visit-img').toggleClass("active")
            $('.visit-opaco').toggleClass("active")
            Cookies.set('visitt1', '1', { path: '/', expires: 1 })
        })
        if (Cookies.get('visitt1')!='1'){
            $('.visit-img').addClass("active")
            $('.visit-opaco').addClass("active")
        }
    })
</script>
<?php endif; ?>

<header class="header" id="header">
    <div class="container">

        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>

        <nav class="nav" id="nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container'      => false,
                'menu_class'     => '',
                'walker'         => new Law_Header_Menu,
            )); ?>
        </nav>

        <div class="header-actions">
            <?php $phone = CFS()->get('telefon1', 606); if ($phone): $phones = array_map('trim', explode(',', $phone)); ?>
            <div class="phone-link">
                <svg class="icon"><use href="#icon-phone"></use></svg>
                <span class="phone-numbers">
                    <?php foreach ($phones as $p): if (!$p) continue; ?>
                    <a href="tel:<?php echo esc_attr( preg_replace('/\s+/', '', $p) ); ?>"><?php echo esc_html($p); ?></a>
                    <?php endforeach; ?>
                </span>
            </div>
            <?php endif; ?>

            <?php if ( is_front_page() ) : ?>
            <div class="lang-switch">
                <?php wp_nav_menu(array(
                    'theme_location' => 'yazyk-menu',
                    'container'      => false,
                    'menu_class'     => '',
                )); ?>
            </div>
            <?php endif; ?>

            <div class="utility-links">
                <?php echo do_shortcode( '[bvi text="<span class=\'sr-only\'>Версия для слабовидящих</span>"]' ); ?>
            </div>

            <a href="https://my.kdts.kz/" class="btn-cabinet">
                <svg class="icon"><use href="#icon-user"></use></svg>
                Личный кабинет
            </a>

            <button class="burger" id="burger" onclick="toggleNav()" aria-label="Меню">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>
