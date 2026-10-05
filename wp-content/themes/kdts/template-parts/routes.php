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
		<div id="chartdiv-route-1" class="route-map-chart is-active" data-route="1" aria-label="Еуропа — Орталық Азия (Брест арқылы)"></div>
		<div id="chartdiv-route-3" class="route-map-chart" data-route="3" aria-label="Еуропа — Ресей (Брест арқылы)"></div>
		<div id="chartdiv-route-4" class="route-map-chart" data-route="4" aria-label="Еуропа — Ресей (Рига арқылы)"></div>
		<div id="chartdiv-route-5" class="route-map-chart" data-route="5" aria-label="Йоэнсуу (Финляндия) — Корла (Қытай)"></div>
		<div id="chartdiv-route-6" class="route-map-chart" data-route="6" aria-label="Қытай — Еуропа"></div>
		<div id="chartdiv-route-7" class="route-map-chart" data-route="7" aria-label="Сучжоу (Қытай) — Варшава (Польша)"></div>

		<div class="routes-top-scrim"></div>

		<div class="container routes-content">
			<h2 class="h-light">ТАСЫМАЛДАУ МАРШРУТТАРЫ</h2>

			<div class="route-tabs">
				<p class="routes-list-title">Негізгі тасымалдау бағыттары</p>
				<div class="route-tabs-row">
					<button type="button" class="route-tab is-active" data-route="1">Еуропа — Орт. Азия (Брест арқылы)</button>
					<button type="button" class="route-tab" data-route="2">Еуропа — Орт. Азия (Рига арқылы)</button>
					<button type="button" class="route-tab" data-route="3">Еуропа — Ресей (Брест арқылы)</button>
					<button type="button" class="route-tab" data-route="4">Еуропа — Ресей (Рига арқылы)</button>
					<button type="button" class="route-tab" data-route="5">Йоэнсуу (Фин.) — Корла (Қытай)</button>
					<button type="button" class="route-tab" data-route="6">Қытай — Еуропа</button>
					<button type="button" class="route-tab" data-route="7">Сучжоу (Қытай) — Варшава (Польша)</button>
					<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary route-switcher-btn">Жеткізу құнын есептеу</a>
				</div>
			</div>
		</div>

		<div class="route-info-bar is-active" data-route="1">
			<div class="rib-track">
				<span class="rib-city">Гамбург</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Брест</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Красное</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 600 км</span></span>
				<span class="rib-city">Озинки</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 850 км</span></span>
				<span class="rib-city">Алматы</span>
			</div>
			<div class="rib-total"><span>20 күн</span></div>
		</div>

		<div class="route-info-bar" data-route="2">
			<div class="rib-track">
				<span class="rib-city">Дуйсбург</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Брест</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Красное</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">780 км</span></span>
				<span class="rib-city">Мәскеу</span>
			</div>
			<div class="rib-total"><span>5 күн</span></div>
		</div>

		<div class="route-info-bar" data-route="3">
			<div class="rib-track">
				<span class="rib-city">Рига</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">285 км</span></span>
				<span class="rib-city">Зилупе</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">800 км</span></span>
				<span class="rib-city">Мәскеу</span>
			</div>
			<div class="rib-total"><span>2 күн</span></div>
		</div>

		<div class="route-info-bar" data-route="4">
			<div class="rib-track">
				<span class="rib-city">Дуйсбург</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Брест</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Красное</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">780 км</span></span>
				<span class="rib-city">Мәскеу</span>
			</div>
			<div class="rib-total"><span>5 күн</span></div>
		</div>

		<div class="route-info-bar" data-route="5">
			<div class="rib-track">
				<span class="rib-city">Йоэнсуу</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">70 км</span></span>
				<span class="rib-city">Вяртсиля</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 740 км</span></span>
				<span class="rib-city">Ілецк</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">3 030 км</span></span>
				<span class="rib-city">Достық</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 020 км</span></span>
				<span class="rib-city">Корла</span>
			</div>
			<div class="rib-total">
				<span>7 күн</span>
				<span>10 күн</span>
			</div>
		</div>

		<div class="route-info-bar" data-route="6">
			<div class="rib-track">
				<span class="rib-city">Гамбург</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">1 160 км</span></span>
				<span class="rib-city">Брест</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Красное</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 050 км</span></span>
				<span class="rib-city">Ілецк</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 750 км</span></span>
				<span class="rib-city">Достық</span>
			</div>
			<div class="rib-total"><span>9 күн</span></div>
		</div>

		<div class="route-info-bar" data-route="7">
			<div class="rib-track">
				<span class="rib-city">Варшава</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">200 км</span></span>
				<span class="rib-city">Брест</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">610 км</span></span>
				<span class="rib-city">Красное</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">7 100 км</span></span>
				<span class="rib-city">Забайкальск</span>
				<span class="rib-seg"><span class="rib-arrow"></span><span class="rib-dist">2 100 км</span></span>
				<span class="rib-city">Сучжоу</span>
			</div>
			<div class="rib-total">
				<span>11 күн</span>
				<span>14 күн</span>
			</div>
		</div>
	</div>
</section>
