<?php
/**
 * kdts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kdts
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kdts_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kdts_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kdts, use a find and replace
		 * to change 'kdts' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kdts', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kdts' ),
				'aktsioneram-menu' => esc_html__( 'aktsioneram menu', 'kdts' ),
				'okompanii-menu' => esc_html__( 'okompanii menu', 'kdts' ),
				'klientam-menu' => esc_html__( 'klientam menu', 'kdts' ),
				'plan-menu' => esc_html__( 'plan menu', 'kdts' ),
				'zakupki-menu' => esc_html__( 'zakupki menu', 'kdts' ),
				'arkhivy-menu' => esc_html__( 'arkhivy menu', 'kdts' ),
				'header-menu' => esc_html__( 'Header Menu', 'kdts' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'kdts' ),
				'yazyk-menu' => esc_html__( 'yazyk Menu', 'kdts' ),

			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kdts_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kdts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kdts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kdts_content_width', 640 );
}
add_action( 'after_setup_theme', 'kdts_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kdts_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kdts' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kdts' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kdts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kdts_scripts() {
	wp_enqueue_style( 'kdts-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kdts-style', 'rtl', 'replace' );

	wp_enqueue_style( 'mtk-normalize', get_template_directory_uri(). '/css/main.min.css');

	wp_enqueue_script( 'kdts-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mtk-main', get_template_directory_uri() . '/js/main.js', array(), '', true );
		wp_enqueue_script( 'swiper-bundle-my', get_template_directory_uri() . '/js/swiper-bundle.js', array(), '', true );

	wp_enqueue_script( 'jquery3-3-1', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" );
	/*wp_enqueue_script( 'swiper-bundle-my', "https://unpkg.com/swiper/swiper-bundle.min.js" ); */
	wp_enqueue_script( 'slick-carousel-my', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js" );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kdts_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/***************************/

/****************************/
function Novosti_create_post_type() {
	register_post_type( 'novosti',
		array(
			'labels' => array(
				'name' => __('Жаңалықтар'),
				'singluar_name' => __('novosti'),
				'add_new' => 'жаңалықты қосу',
			),
			'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		
		'rewrite' => array('slug' => 'zhanalyktar','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-media-text',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Novosti_create_post_type');
/****************/
/*
function Tenders_create_post_type() {
	register_post_type( 'tenders',
		array(
			'labels' => array(
				'name' => __('тендер'),
				'singluar_name' => __('tenders'),
				'add_new' => 'Добавить тендер',
			),
			'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'zakupki/tenders','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor','author','thumbnail')
		)				
	);
/*	register_taxonomy(
        'tender',
        'tenders',
        array(
            'label' => __( 'Способом запроса ценовых предложений' ),
            'hierarchical' => true,
			'rewrite'      => array( 'slug' => 'zakupki' )
        )
		
    );
	*/
/*
}

add_action('init', 'Tenders_create_post_type');
*/

/**********************************/
function Tsenovykh_predlozheniy_create_post_type() {
	register_post_type( 'tsenovykh',
		array(
			'labels' => array(
				'name' => __('Баға ұсыныстарын сұрату'),
				'singluar_name' => __('tsenovykh'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/tender/baga-usynystary','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Tsenovykh_predlozheniy_create_post_type');
/****************************/
function Tsenovykhar_predlozheniy_create_post_type() {
	register_post_type( 'tsenovykhar',
		array(
			'labels' => array(
				'name' => __('Мұрағат баға ұсыныстарын сұрату'),
				'singluar_name' => __('tsenovykhar'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/muragat/baga-usynystary','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-open-folder',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Tsenovykhar_predlozheniy_create_post_type');
/**************************************************/

function Otkrytogo_predlozheniy_create_post_type() {
	register_post_type( 'otkrytogo',
		array(
			'labels' => array(
				'name' => __('Ашық тендер'),
				'singluar_name' => __('otkrytogo'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/tender/ashyk-tender-tasilimen','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Otkrytogo_predlozheniy_create_post_type');

function Otkrytogoar_predlozheniy_create_post_type() {
	register_post_type( 'otkrytogoar',
		array(
			'labels' => array(
				'name' => __('Мұрағат ашық тендер'),
				'singluar_name' => __('otkrytogoar'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/muragat/ashyk-tender-tasilimen','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-open-folder',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Otkrytogoar_predlozheniy_create_post_type');

/*************************/
function Odnogo_istochnika_create_post_type() {
	register_post_type( 'odnogo',
		array(
			'labels' => array(
				'name' => __('Бір көзден алу'),
				'singluar_name' => __('odnogo'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/tender/bir-kozden-alu','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Odnogo_istochnika_create_post_type');

/****************************/

function Odnogoar_istochnika_create_post_type() {
	register_post_type( 'odnogoar',
		array(
			'labels' => array(
				'name' => __('Мұрағат бір көзден алу'),
				'singluar_name' => __('odnogoar'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/muragat/bir-kozden-alu','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-open-folder',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Odnogoar_istochnika_create_post_type');

/************************/
function Dvukhetapnogo_tendera_create_post_type() {
	register_post_type( 'dvukhetapnogo',
		array(
			'labels' => array(
				'name' => __('Ашық екі кезеңді тендер'),
				'singluar_name' => __('dvukhetapnogo'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/tender/ashyk-eki-kezendi','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Dvukhetapnogo_tendera_create_post_type');
/****************/
function Dvukhetapnogoar_tendera_create_post_type() {
	register_post_type( 'dvukhetapnogoar',
		array(
			'labels' => array(
				'name' => __('Мұрағат ашық екі кезеңді тендер'),
				'singluar_name' => __('dvukhetapnogoar'),
				'add_new' => 'Добавить',
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite' => array('slug' => 'satyp-alul/muragat/ashyk-eki-kezendi','with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-open-folder',
		'supports'           => array('title','editor','thumbnail')
		)				
	);
}

add_action('init', 'Dvukhetapnogoar_tendera_create_post_type');
/*************************/


	
/*
 * "Хлебные крошки" для WordPress
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Басты бет'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Сұрау бойынша іздеу нәтижелері "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Бет %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = ''; // открывающий тег обертки
	$wrap_after     = ''; // закрывающий тег обертки
	//$sep            = '<span class="breadcrumbs__separator"> › </span>'; // разделитель между "крошками"
	$before         = '<li class="pagination-last">'; // тег перед текущей "крошкой"
	$after          = '</li>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<li>';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item">%2$s</a>';
	$link          .= '';
	$link          .= '</li>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end breadcrumbs()


/**************************/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active-menu-left ';
     }
     return $classes;
}

function replace_table($text) {
    $text = str_replace('<table', '<div class="table"><table', $text);
    $text = str_replace('</table>', '</table></div>', $text);
    return $text;
}
add_filter('the_content', 'replace_table');

/*************************/
function rmn_custom_mime_types( $mimes ) {
    // Новый mime тип
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'rmn_custom_mime_types' );
/************************/
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});
require_once get_template_directory() . '/Law_Header_Menu.php';

add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');
function my_func_remove_menu(){
 remove_submenu_page( 'index.php', 'update-core.php' );
}
add_action( 'admin_menu', 'my_func_remove_menu' );