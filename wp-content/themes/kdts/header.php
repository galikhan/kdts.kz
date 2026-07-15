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

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window,document,"script","https://mc.yandex.ru/metrika/tag.js","ym");
    ym(79124866,"init",{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/79124866" style="position:absolute;left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter -->

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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5h4l2 5-2.5 1.5a11 11 0 005 5L13 14l5 2v4a2 2 0 01-2 2A16 16 0 013 7a2 2 0 012-2"/></svg>
                <span class="phone-numbers">
                    <?php foreach ($phones as $p): if (!$p) continue; ?>
                    <a href="tel:<?php echo esc_attr( preg_replace('/\s+/', '', $p) ); ?>"><?php echo esc_html($p); ?></a>
                    <?php endforeach; ?>
                </span>
            </div>
            <?php endif; ?>

            <div class="lang-switch">
                <?php wp_nav_menu(array(
                    'theme_location' => 'yazyk-menu',
                    'container'      => false,
                    'menu_class'     => '',
                )); ?>
            </div>

            <a href="https://my.kdts.kz/" class="btn-cabinet">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                Кабинет
            </a>

            <button class="burger" id="burger" onclick="toggleNav()" aria-label="Меню">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>
