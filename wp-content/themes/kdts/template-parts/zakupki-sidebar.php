<?php
/* Left navigation of the procurement section (same on every page of the section). $zs_active = page ID to highlight. */
$zs_active = isset( $zs_active ) ? (int) $zs_active : 0;
?>
<aside class="zakupki-sidebar">
	<div class="zakupki-nav-group">
		<a class="zakupki-nav-title<?php echo ( 270 === $zs_active ) ? ' is-active' : ''; ?>" href="<?php echo esc_url( get_permalink( 270 ) ); ?>">Сатып алудың жылдық жоспары</a>
		<ul>
			<li><a href="<?php echo esc_url( get_permalink( 276 ) ); ?>"<?php echo ( 276 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Ұзақ мерзімді сатып алу жоспары</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 274 ) ); ?>"<?php echo ( 274 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Тендерлерді өткізу кестесі</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 272 ) ); ?>"<?php echo ( 272 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Тендерлердің қосымша ақпараты</a></li>
		</ul>
	</div>
	<div class="zakupki-nav-group">
		<span class="zakupki-nav-title">Сатып алу</span>
		<ul>
			<li><a href="<?php echo esc_url( get_permalink( 291 ) ); ?>"<?php echo ( 291 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Баға ұсыныстарын сұрату тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 293 ) ); ?>"<?php echo ( 293 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Ашық тендер тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 295 ) ); ?>"<?php echo ( 295 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Бір көзден алу тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 297 ) ); ?>"<?php echo ( 297 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Ашық екі кезеңді тендер тәсілімен</a></li>
		</ul>
	</div>
	<div class="zakupki-nav-group">
		<span class="zakupki-nav-title">Мұрағат</span>
		<ul>
			<li><a href="<?php echo esc_url( get_permalink( 305 ) ); ?>"<?php echo ( 305 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Баға ұсыныстарын сұрату тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 307 ) ); ?>"<?php echo ( 307 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Ашық тендер тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 309 ) ); ?>"<?php echo ( 309 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Бір көзден алу тәсілімен</a></li>
			<li><a href="<?php echo esc_url( get_permalink( 311 ) ); ?>"<?php echo ( 311 === (int) $zs_active ) ? ' class="is-active"' : ''; ?>>Ашық екі кезеңді тендер тәсілімен</a></li>
		</ul>
	</div>
</aside>
