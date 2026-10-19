<?php
/*
 * Template name: zakupki_new
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="page-hero page-hero-zakupki">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span><?php echo esc_html( get_the_title( 263 ) ); ?></span>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php $zs_active = 263; ?>
		<div class="zakupki-layout">
			<?php include locate_template( 'template-parts/zakupki-sidebar.php' ); ?>
			<div class="zakupki-main">
		<?php if ( trim( wp_strip_all_tags( get_the_content() ) ) ) : ?>
			<div class="page-section"><?php the_content(); ?></div>
		<?php endif; ?>
		<div class="page-section">
			<h2>2021</h2>
			<div class="doc-card-grid">
				<?php
				$file = 'https://www.kdts.kz/ru/wp-content/uploads/2022/04/Zakupki-po-realizatsii-investitsionnyh-proektov-za-2021g.xlsx';
				$u    = wp_upload_dir();
				$rel  = '2022/04/Zakupki-po-realizatsii-investitsionnyh-proektov-za-2021g.xlsx';
				$url  = file_exists( $u['basedir'] . '/' . $rel ) ? $u['baseurl'] . '/' . $rel : $file;
				?>
				<a class="doc-card" href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener"><div class="doc-card-top"><span class="doc-card-icon">XLSX</span></div><p>Закупки по реализации инвестиционных проектов за 2021г.</p></a>
			</div>
		</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
