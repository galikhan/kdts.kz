<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kdts
 */

get_header();
?>
	<main>
        <div class="error-404">
            <h1 class="partnery-title">Страница не найдена, ошибка 404</h1>
            <div class="error-404__body">
				<p>Здравствуйте, уважаемый посетитель.</p>
				<p>К сожалению, запрашиваемой Вами страницы не существует на сайте нашей компании.</p>
				<p>Возможно, это случилось по одной из этих причин:</p>

				<ul>
					<li>Вы ошиблись при наборе адреса страницы (URL)</li>
					<li>Перешли по неправильной ссылке</li>
					<li>Запрашиваемой страницы никогда не было на сайте или она была удалена</li>
				</ul>
            </div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Вернуться на главную</a>
        </div>
    </main>
<?php
get_footer();
