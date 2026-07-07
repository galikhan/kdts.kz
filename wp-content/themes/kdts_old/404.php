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
                   Бет табылмады, Қате 404 
                </h1>
            </div>
			<section class="uslugi-peregruza__text" style="width:100%; max-width:100%;">
				<p> Сәлеметсіз бе, құрметті қонақ. </p>
				<p> Өкінішке орай, сіз сұраған бет біздің компанияның сайтында жоқ. </p>
				<p> Бұл келесі себептердің бірі болуы мүмкін: </p>

				<ul>
					<li> Сіз парақтың мекен-жайын (URL) теру кезінде қате жібердіңіз; </li>
					<li> Біз қате сілтеме бойынша жүрдік; </li>
					<li> Сұралған бет ешқашан сайтта болмаған немесе жойылмаған. </li>
				</ul>	
			</section>
        </div>
    </main>
<?php
get_footer();
