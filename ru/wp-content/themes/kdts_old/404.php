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
        <div class="dell-container">
            <div class="uslugi-peregruza__h1">
                <h1>
                    Страница не найдена ошибка 404
                </h1>
            </div>
			<section class="uslugi-peregruza__text" style="width:100%; max-width:100%;">
				<p> Здравствуйте, уважаемый посетитель. </p>
				<p> К сожалению, запрашиваемой Вами страницы не существует на сайте нашей компании. </p>
				<p> Возможно, это случилось по одной из этих причин: </p>
					
				<ul>
					<li>Вы ошиблись при наборе адреса страницы (URL);</li>
					<li>Перешли по неправильной ссылке;</li>
					<li>Запрашиваемой страницы никогда не было на сайте или она была удалена. </li>
				</ul>	
			</section>
        </div>
    </main>
<?php
get_footer();
