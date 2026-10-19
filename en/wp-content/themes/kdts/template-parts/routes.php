<?php
/**
 * Interactive transport-routes section (homepage). Route geography/distances/
 * transit times are fixed logistics facts (not CMS content), matching the
 * site's own design 1:1 — see redesign_kdts.html §ROUTES.
 * Powered by wp-content/themes/kdts/js/route-maps.js (amCharts 5), enqueued
 * for the front page only in functions.php.
 */
?>
<section class="routes" id="routes">
	<div class="route-map">
		<div id="chartdiv-route-1" class="route-map-chart is-active" data-route="1" aria-label="Europe — Central Asia (via Brest)"></div>
		<div id="chartdiv-route-3" class="route-map-chart" data-route="3" aria-label="Europe — Russia (via Brest)"></div>
		<div id="chartdiv-route-4" class="route-map-chart" data-route="4" aria-label="Europe — Russia (via Riga)"></div>
		<div id="chartdiv-route-5" class="route-map-chart" data-route="5" aria-label="Joensuu (Finland) — Korla (China)"></div>
		<div id="chartdiv-route-6" class="route-map-chart" data-route="6" aria-label="China — Europe"></div>
		<div id="chartdiv-route-7" class="route-map-chart" data-route="7" aria-label="Suzhou (China) — Warsaw (Poland)"></div>

		<div class="routes-top-scrim"></div>

		<div class="container routes-content">
			<h2 class="h-light">TRANSPORTATION ROUTES</h2>

			<div class="route-tabs">
				<p class="routes-list-title">Main transportation directions</p>
				<div class="route-tabs-row">
					<button type="button" class="route-tab is-active" data-route="1">Europe — C. Asia (via Brest)</button>
					<button type="button" class="route-tab" data-route="2">Europe — C. Asia (via Riga)</button>
					<button type="button" class="route-tab" data-route="3">Europe — Russia (via Brest)</button>
					<button type="button" class="route-tab" data-route="4">Europe — Russia (via Riga)</button>
					<button type="button" class="route-tab" data-route="5">Joensuu (Fin.) — Korla (China)</button>
					<button type="button" class="route-tab" data-route="6">China — Europe</button>
					<button type="button" class="route-tab" data-route="7">Suzhou (China) — Warsaw (Poland)</button>
					<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary route-switcher-btn">Calculate delivery cost</a>
				</div>
			</div>
		</div>

		<div class="route-info-bar is-active" data-route="1">
			<div class="rib-track">
				<span class="rib-city">Hamburg</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Brest</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Krasnoye</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 600 км</span></span>
				<span class="rib-city">Ozinki</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 850 км</span></span>
				<span class="rib-city">Almaty</span>
			</div>
			<div class="rib-total"><span>20 days</span></div>
		</div>

		<div class="route-info-bar" data-route="2">
			<div class="rib-track">
				<span class="rib-city">Duisburg</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Brest</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Krasnoye</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">780 км</span></span>
				<span class="rib-city">Moscow</span>
			</div>
			<div class="rib-total"><span>5 days</span></div>
		</div>

		<div class="route-info-bar" data-route="3">
			<div class="rib-track">
				<span class="rib-city">Riga</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">285 км</span></span>
				<span class="rib-city">Zilupe</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">800 км</span></span>
				<span class="rib-city">Moscow</span>
			</div>
			<div class="rib-total"><span>2 days</span></div>
		</div>

		<div class="route-info-bar" data-route="4">
			<div class="rib-track">
				<span class="rib-city">Duisburg</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Brest</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Krasnoye</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">780 км</span></span>
				<span class="rib-city">Moscow</span>
			</div>
			<div class="rib-total"><span>5 days</span></div>
		</div>

		<div class="route-info-bar" data-route="5">
			<div class="rib-track">
				<span class="rib-city">Joensuu</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">70 км</span></span>
				<span class="rib-city">Vartsila</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 740 км</span></span>
				<span class="rib-city">Iletsk</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">3 030 км</span></span>
				<span class="rib-city">Dostyk</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 020 км</span></span>
				<span class="rib-city">Korla</span>
			</div>
			<div class="rib-total">
				<span>7 days</span>
				<span>10 days</span>
			</div>
		</div>

		<div class="route-info-bar" data-route="6">
			<div class="rib-track">
				<span class="rib-city">Hamburg</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Brest</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Krasnoye</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 050 км</span></span>
				<span class="rib-city">Iletsk</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 750 км</span></span>
				<span class="rib-city">Dostyk</span>
			</div>
			<div class="rib-total"><span>9 days</span></div>
		</div>

		<div class="route-info-bar" data-route="7">
			<div class="rib-track">
				<span class="rib-city">Warsaw</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">200 км</span></span>
				<span class="rib-city">Brest</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Krasnoye</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">7 100 км</span></span>
				<span class="rib-city">Zabaykalsk</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 100 км</span></span>
				<span class="rib-city">Suzhou</span>
			</div>
			<div class="rib-total">
				<span>11 days</span>
				<span>14 days</span>
			</div>
		</div>
	</div>
</section>
