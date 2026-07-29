<?php
/*
 * Template name: home
 */

// Autocomplete (station / cargo lookups) and phone mask used by the quote-request modal below.
wp_enqueue_script( 'jquery-ui-autocomplete' );
wp_enqueue_script( 'kdts-maskedinput', '/ru/js/jquery.maskedinput-1.2.2.js', array( 'jquery' ), null, true );
?>
<?php get_header(); ?>


<section class="hero">
	<div class="container">
		<div class="hero-grid">
			<div>
				<h1>Ведущий оператор <span class="highlight">таможенно-складской логистики</span> в Казахстане</h1>
				<p class="lead"><?php echo esc_html( trim( CFS()->get( 'tekst1' ) ) ); ?></p>
				<div class="hero-cta">
					<a href="#" class="btn btn-primary BtnModal" data-path="arPortfolioItem1">Рассчитать тариф</a>
					<a href="<?php echo home_url( '/o-kompanii', 'https' ); ?>" class="btn btn-secondary">О компании</a>
				</div>
			</div>

			<div>
								<div class="hero-badge"><span class="dot"></span> На рынке с 1997 года</div>
			<div class="calc-widget">
				<div class="calc-header">
					<h3>Расчет стоимости доставки</h3>
					<span class="badge-mini">Предварительная оценка</span>
				</div>

				<div class="calc-type-switch">
					<button type="button" class="calc-type active" data-type="container" onclick="setCalcType(this)">Контейнер</button>
					<button type="button" class="calc-type" data-type="wagon" onclick="setCalcType(this)">Вагон</button>
					<button type="button" class="calc-type" data-type="bulk" onclick="setCalcType(this)">Насыпной груз</button>
				</div>

				<div class="calc-row">
					<div class="calc-field">
						<label>Откуда</label>
						<input type="text" id="calc-from" placeholder="Станция">
					</div>
					<div class="calc-field">
						<label>Куда</label>
						<input type="text" id="calc-to" placeholder="Станция">
					</div>
					<div class="calc-swap" onclick="swapCalcFields()" title="Поменять местами">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3l4 4-4 4"/><path d="M3 7h18"/><path d="M7 21l-4-4 4-4"/><path d="M21 17H3"/></svg>
					</div>
				</div>

				<div class="calc-row calc-row-full">
					<div class="calc-field">
						<label>Вес груза, кг</label>
						<input type="number" id="calc-weight" placeholder="Например, 20000">
					</div>
				</div>

				<button type="button" class="calc-submit" onclick="showCalcResult()">Рассчитать</button>

				<div class="calc-result" id="calcResult">
					<div class="res-label">Предполагаемая стоимость</div>
					<div class="res-price">0 ₸</div>
					<div class="res-meta">* предварительный расчет, точная стоимость определяется по заявке</div>
				</div>

				<div class="calc-foot">
					<span class="check">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						Оперативная обработка
					</span>
					<a href="#" class="BtnModal" data-path="arPortfolioItem1" style="font-weight:600;">Узнать точную стоимость →</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="services">
	<div class="container">
		<div class="section-head">
			<div class="head-text">
				<div class="section-eyebrow"><?php echo esc_html( CFS()->get( 'zagolovka1' ) ); ?></div>
				<h2>Основные направления деятельности</h2>
			</div>
		</div>
		<div class="services-grid">
			<?php
			$services = CFS()->get( 'blok-usluga' );
			if ( $services ) :
				foreach ( $services as $service ) :
					?>
					<a href="<?php echo esc_url( $service['url'] ); ?>" class="service-card">
						<div class="service-illustration">
							<img src="<?php echo esc_url( $service['foto'] ); ?>" alt="<?php echo esc_attr( trim( $service['tekst6'] ) ); ?>" style="width:56%;height:56%;object-fit:contain;">
						</div>
						<h3><?php echo esc_html( trim( $service['tekst6'] ) ); ?></h3>
						<span class="service-link">
							Подробнее
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
						</span>
					</a>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>

<section class="partners-strip">
	<div class="container">
		<div class="section-head" style="margin-bottom:28px;">
			<div class="head-text">
				<div class="section-eyebrow"><?php echo esc_html( CFS()->get( 'zagolovka2' ) ); ?></div>
			</div>
		</div>
		<div class="partners-grid">
			<?php
			$partners = CFS()->get( 'partnery-blok' );
			if ( $partners ) :
				foreach ( $partners as $partner ) :
					if ( empty( $partner['foto1'] ) ) {
						continue;
					}
					?>
					<img src="<?php echo esc_url( $partner['foto1'] ); ?>" class="partner-logo" alt="Партнер">
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>

<section class="cabinet-block">
	<div class="container">
		<div class="cabinet-grid">
			<div class="cabinet-text">
				<h2>Работать удобнее через личный кабинет</h2>
				<p class="lead">Отслеживайте заказы и работайте с документами и заявками онлайн.</p>
				<div class="cabinet-features">
					<div class="cab-feat">
						<div class="feat-ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg></div>
						<div><h4>Отслеживание заказов</h4><p>Следите за статусом груза в режиме реального времени</p></div>
					</div>
					<div class="cab-feat">
						<div class="feat-ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg></div>
						<div><h4>Электронные документы</h4><p>Онлайн-доступ к договорам и актам</p></div>
					</div>
					<div class="cab-feat">
						<div class="feat-ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/></svg></div>
						<div><h4>Подача заявки</h4><p>Оформите новый заказ за несколько минут</p></div>
					</div>
					<div class="cab-feat">
						<div class="feat-ic"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
						<div><h4>Доступ 24/7</h4><p>В любое время, с любого устройства</p></div>
					</div>
				</div>
				<a href="https://my.kdts.kz/" class="btn btn-primary">Войти в личный кабинет</a>
			</div>
			<div class="mockup">
				<div class="mockup-bar">
					<span class="dot r"></span><span class="dot y"></span><span class="dot g"></span>
					<div class="url">my.kdts.kz</div>
				</div>
				<div class="mockup-content">
					<div class="mock-head">
						<h4>Мои заказы</h4>
						<span class="mock-pill">Личный кабинет</span>
					</div>
					<div class="mock-stats">
						<div class="mock-stat"><div class="v">12</div><div class="l">активных</div></div>
						<div class="mock-stat"><div class="v">4</div><div class="l">в пути</div></div>
						<div class="mock-stat"><div class="v">37</div><div class="l">завершено</div></div>
					</div>
					<div class="mock-list">
						<div class="mock-item">
							<div><div class="mi-id">#KTZ-4471</div><div class="mi-route">Достык → Алтынколь</div></div>
							<span class="mi-status transit">в пути</span>
						</div>
						<div class="mock-item">
							<div><div class="mi-id">#KTZ-4459</div><div class="mi-route">Алматы → Астана</div></div>
							<span class="mi-status delivered">доставлено</span>
						</div>
						<div class="mock-item">
							<div><div class="mi-id">#KTZ-4482</div><div class="mi-route">Достык → Актау</div></div>
							<span class="mi-status pending">в обработке</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$novosti_query = new WP_Query( array( 'post_type' => 'novosti', 'posts_per_page' => 3 ) );
if ( $novosti_query->have_posts() ) :
	?>
	<section class="news">
		<div class="container">
			<div class="section-head">
				<div class="head-text">
					<div class="section-eyebrow">Новости</div>
					<h2>Последние новости</h2>
				</div>
				<a href="<?php echo home_url( '/novosti/', 'https' ); ?>" class="head-link">
					Все новости
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
				</a>
			</div>
			<div class="news-grid">
				<?php
				$variant = array( 'a', 'b', 'c' );
				$i       = 0;
				while ( $novosti_query->have_posts() ) :
					$novosti_query->the_post();
					$thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
					?>
					<a href="<?php the_permalink(); ?>" class="news-card">
						<?php if ( $thumb ) : ?>
							<div class="news-img" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
						<?php else : ?>
							<div class="news-img <?php echo esc_attr( $variant[ $i % 3 ] ); ?>">Кедентранссервис</div>
						<?php endif; ?>
						<div class="news-body">
							<div class="news-date"><?php echo esc_html( get_the_date() ); ?></div>
							<h3><?php the_title(); ?></h3>
							<span class="read">
								Читать
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
							</span>
						</div>
					</a>
					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php
endif;
?>

<section class="cta">
	<div class="container">
		<div class="cta-card">
			<div class="cta-grid">
				<div>
					<h2>Готовы доставить ваш груз</h2>
					<p>Чтобы рассчитать тариф, оставьте заявку или свяжитесь напрямую: <?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></p>
				</div>
				<div class="cta-actions">
					<a href="#" class="btn btn-primary BtnModal" data-path="arPortfolioItem1">Рассчитать тариф</a>
					<a href="<?php echo home_url( '/kontakty', 'https' ); ?>" class="btn btn-ghost">Связаться с нами</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="float-actions">
	<a href="https://t.me/ao_kdts_bot" target="_blank" rel="noopener" class="float-btn tg" aria-label="Telegram">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21.94 4.36a1.5 1.5 0 0 0-1.53-.25L2.86 10.7a1.4 1.4 0 0 0 .1 2.64l4.55 1.42 1.76 5.4a1.2 1.2 0 0 0 2.02.45l2.6-2.6 4.45 3.28a1.4 1.4 0 0 0 2.22-.87l2.4-14.4a1.5 1.5 0 0 0-.02-1.66zM9.1 14.3l8.4-7.5-9.9 8.9-.3 3.3-1.6-4.9z"/></svg>
	</a>
	<a href="#" class="BtnModal float-btn" data-path="arPortfolioItemPhone" aria-label="Заказать звонок" style="background:var(--c-dark);">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.85a16 16 0 0 0 6 6l.85-1.85a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
	</a>
</div>

<div class="modal-overlay">
	<div class="arPortfolioModal" data-target="arPortfolioItem1">
		<p class="arPortfolioModal-title">Заявка на расчет ставки</p>

		<form method="post" id="order-form" class="order-form">
			<input type="hidden" name="do" value="order">
			<input type="hidden" name="weight">
			<input type="hidden" name="count">

			<div class="form-row-2">
				<div class="form-fld">
					<label>БИН*</label>
					<input type="text" name="bin" required>
				</div>
				<div class="form-fld">
					<label>Название компании*</label>
					<input type="text" name="name" required>
				</div>
			</div>

			<div class="form-row-2">
				<div class="form-fld">
					<label>Контактный телефон*</label>
					<input type="text" name="phone" required>
				</div>
				<div class="form-fld">
					<label>Электронная почта*</label>
					<input type="email" name="email" required>
				</div>
			</div>

			<div class="form-row-2">
				<div class="form-fld form-group">
					<label>Станция отправления*</label>
					<input type="text" name="from" id="state-from" required>
					<input type="hidden" name="state_from_id" id="state-from-id">
					<input type="hidden" name="state_from_id2" id="state-from-id2">
					<input type="hidden" name="state_from_code" id="state-from-code">
				</div>
				<div class="form-fld form-group">
					<label>Станция назначения*</label>
					<input type="text" name="to" id="state-to" required>
					<input type="hidden" name="state_to_id" id="state-to-id">
					<input type="hidden" name="state_to_id2" id="state-to-id2">
					<input type="hidden" name="state_to_code" id="state-to-code">
				</div>
			</div>

			<div class="form-row-2">
				<div class="form-fld form-group">
					<label>Груз ЕТСНГ*</label>
					<input type="text" name="gruz1" id="cargo1" required>
					<input type="hidden" name="cargo_id1" id="cargo-id1">
				</div>
				<div class="form-fld form-group">
					<label>Груз ГНГ*</label>
					<input type="text" name="gruz2" id="cargo2" required>
					<input type="hidden" name="cargo_id2" id="cargo-id2">
				</div>
			</div>

			<div class="form-row-2">
				<div class="form-fld">
					<label>Тип расчета*</label>
					<select name="typecalc" required>
						<option value="Оперирование">Оперирование</option>
						<option value="Экспедирование">Экспедирование</option>
						<option value="Комплексная ставка">Комплексная ставка</option>
					</select>
				</div>
				<div class="form-fld">
					<label>Тип отправки*</label>
					<select name="type" required>
						<option value="Одиночная">Одиночная</option>
						<option value="Групповая">Групповая</option>
						<option value="Контейнерный поезд">Контейнерный поезд</option>
					</select>
				</div>
			</div>

			<div class="form-fld form-group country" style="display:none;">
				<label>Экспедируемые территории</label>
				<div style="display:flex;flex-wrap:wrap;gap:10px 18px;font-size:13px;color:var(--c-grey);">
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Азербайджан"> Азербайджан</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Белоруссия"> Белоруссия</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Казахстан"> Казахстан</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Киргизстан"> Киргизстан</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Латвия"> Латвия</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Литва"> Литва</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Молдова"> Молдова</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Россия"> Россия</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Таджикистан"> Таджикистан</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Украина"> Украина</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Узбекистан"> Узбекистан</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Эстония"> Эстония</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Китай"> Китай</label>
					<label style="display:flex;align-items:center;gap:6px;text-transform:none;font-weight:400;"><input type="checkbox" name="country[]" value="Туркменистан"> Туркменистан</label>
				</div>
			</div>

			<div class="form-row-2 type-cont-row">
				<div class="form-fld type-cont" style="display:none;">
					<label>Тип контейнера</label>
					<select name="typec">
						<option value="20 фут (24)">20 фут (24)</option>
						<option value="20 фут (30)">20 фут (30)</option>
						<option value="40 фут">40 фут</option>
					</select>
				</div>
				<div class="form-fld">
					<label>Вагоны / контейнеры*</label>
					<select name="vagon" required>
						<option value="Собственный">Собственный</option>
						<option value="Инвентарный">Инвентарный</option>
					</select>
				</div>
			</div>

			<div class="form-row-1 form-fld">
				<label>Дополнительная информация к заявке</label>
				<textarea name="info"></textarea>
			</div>

			<div class="form-foot">
				<p>Расчет производится для всех типов контейнеров (20, 40/45).</p>
				<button type="submit" class="modalBtn">Отправить</button>
			</div>
		</form>
	</div>

	<div class="arPortfolioModal" data-target="arPortfolioItemPhone" style="max-width:420px;">
		<p class="arPortfolioModal-title">Заказать обратный звонок</p>
		<form method="post" id="phone-form" class="phone-form">
			<input type="hidden" name="do" value="phone">
			<div class="form-row-1 form-fld">
				<label>Имя</label>
				<input type="text" name="name" required>
			</div>
			<div class="form-row-1 form-fld">
				<label>Телефон</label>
				<input type="text" name="phone" placeholder="+7" required>
			</div>
			<div class="form-row-1 form-fld">
				<label>Электронная почта</label>
				<input type="email" name="email" required>
			</div>
			<div class="form-foot" style="justify-content:center;">
				<button type="submit" class="modalBtn">Отправить</button>
			</div>
		</form>
	</div>
</div>

<script>
jQuery(function($) {
	$('select[name=typecalc]').on('change', function() {
		if ($(this).val() === 'Экспедирование' || $(this).val() === 'Комплексная ставка') {
			$('.form-group.country').css('display', 'flex');
			$('.type-cont').show();
		} else {
			$('.form-group.country').css('display', 'none');
			$('.type-cont').hide();
		}
	});

	$('input[name=phone]').mask('+7 (999) 999-99-99');

	function ajaxSubmit(formSel, modalSel) {
		$(formSel).on('submit', function(e) {
			e.preventDefault();
			var $form = $(this);
			var $btn = $form.find('button[type=submit]');
			$btn.attr('disabled', 'disabled');
			$.ajax({
				url: '/send.php',
				data: new FormData(this),
				processData: false,
				type: 'POST',
				dataType: 'JSON',
				contentType: false,
				success: function(data) {
					if (data.success == 1) {
						$(modalSel).html(data.msg);
						$form[0].reset();
					} else {
						alert(data.msg);
					}
					$btn.removeAttr('disabled');
				}
			});
		});
	}
	ajaxSubmit('#order-form', '.arPortfolioModal[data-target="arPortfolioItem1"]');
	ajaxSubmit('#phone-form', '.arPortfolioModal[data-target="arPortfolioItemPhone"]');

	function stationField(id, idField, id2Field, codeField) {
		$('#' + id).autocomplete({
			source: function(request, response) {
				$.ajax({
					url: '/send.php',
					dataType: 'jsonp',
					data: { do: 'station', q: request.term, name_startsWith: request.term },
					success: function(data) {
						response($.map(data.result, function(item) {
							return { label: item.text, code: item.value, id2: item.value, value: item.text, id: item.value };
						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				$('#' + id).val(ui.item.value);
				$('#' + idField).val(ui.item.id).change();
				$('#' + id2Field).val(ui.item.id2).change();
				$('#' + codeField).val(ui.item.code).change();
			}
		});
	}
	stationField('state-from', 'state-from-id', 'state-from-id2', 'state-from-code');
	stationField('state-to', 'state-to-id', 'state-to-id2', 'state-to-code');

	function cargoField(id, idField, doVal) {
		$('#' + id).autocomplete({
			source: function(request, response) {
				$.ajax({
					url: '/send.php',
					dataType: 'jsonp',
					data: { do: doVal, q: request.term, name_startsWith: request.term },
					success: function(data) {
						response($.map(data.result, function(item) {
							return { label: item.text, code: item.value, id2: item.value, value: item.text, id: item.value };
						}));
					}
				});
			},
			minLength: 2,
			select: function(event, ui) {
				$('#' + id).val(ui.item.value);
				$('#' + idField).val(ui.item.id).change();
			}
		});
	}
	cargoField('cargo1', 'cargo-id1', 'cargo1');
	cargoField('cargo2', 'cargo-id2', 'cargo2');
});
</script>

<?php get_footer(); ?>
