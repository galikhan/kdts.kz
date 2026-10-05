<?php
 /*
 * Template name: kontakty
 */
?>
<?php get_header(); ?>
<?php
$cfs = function ( $key ) { return trim( (string) CFS()->get( $key ) ); };
$phones = array();
foreach ( (array) CFS()->get( 'tel' ) as $row ) {
	if ( ! empty( $row['tekst7'] ) ) { $phones[] = trim( $row['tekst7'] ); }
}
$phones[] = '+7 778 097 91 87';
$email   = $cfs( 'tekst11' );
$address = $cfs( 'adres1' ) ?: $cfs( 'tekst4' );
$hours   = array_filter( array( $cfs( 'tekst12' ), $cfs( 'tekst13' ) ) );
$media   = array_filter( array( $cfs( 'tekst9' ), $cfs( 'tekst10' ) ) );
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">

		<div class="contact-cards">
			<div class="contact-card">
				<span class="contact-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h4l2 5-2.5 1.5a11 11 0 005 5L16 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 013-2z"/></svg></span>
				<h3>Call center</h3>
				<?php foreach ( $phones as $p ) : ?>
					<a href="tel:<?php echo esc_attr( preg_replace( '/[^+\d]/', '', $p ) ); ?>"><?php echo esc_html( $p ); ?></a>
				<?php endforeach; ?>
			</div>
			<div class="contact-card">
				<span class="contact-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></span>
				<h3>E-mail</h3>
				<?php if ( $email ) : ?><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a><?php endif; ?>
			</div>
			<div class="contact-card">
				<span class="contact-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.2 7-11.5A7 7 0 005 9.5C5 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></span>
				<h3>Address</h3>
				<p><?php echo esc_html( $address ); ?></p>
			</div>
			<div class="contact-card">
				<span class="contact-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
				<h3>Working hours</h3>
				<?php foreach ( $hours as $h ) : ?><p><?php echo esc_html( $h ); ?></p><?php endforeach; ?>
			</div>
		</div>

		<div class="page-section">
			<h2>Details</h2>
			<dl class="req-table">
				<?php
				$rows = array(
					array( 'Full name', $cfs( 'tekst1' ) ),
					array( 'Short name', $cfs( 'tekst2' ) ),
					array( 'Name in English', $cfs( 'tekst3' ) ),
					array( 'Legal address', $cfs( 'tekst4' ) ),
					array( 'Postal address', $cfs( 'tekst5' ) ),
				);
				foreach ( $rows as $row ) :
					if ( '' === $row[1] ) { continue; }
					?>
					<div class="req-row"><dt><?php echo esc_html( $row[0] ); ?></dt><dd><?php echo esc_html( $row[1] ); ?></dd></div>
				<?php endforeach; ?>
				<div class="req-row"><dt>Contacts of the branches of Kedentransservice JSC</dt><dd><a class="tariff-form-link" href="<?php echo esc_url( home_url( '/o-kompanii/filialy-i-predstavitelstv/' ) ); ?>">Branches and representative offices &rsaquo;</a></dd></div>
				<?php if ( $media ) : ?>
					<div class="req-row"><dt>Media enquiries</dt><dd><?php foreach ( $media as $m ) : ?><span><?php echo esc_html( $m ); ?></span><?php endforeach; ?></dd></div>
				<?php endif; ?>
				<?php if ( $email ) : ?>
					<div class="req-row"><dt>Mail and correspondence enquiries</dt><dd><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></dd></div>
				<?php endif; ?>
			</dl>
		</div>

		<div class="hotline-card">
			<h2>Hotline</h2>
			<ul>
				<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h4l2 5-2.5 1.5a11 11 0 005 5L16 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 013-2z"/></svg><span>Hotline: 8-800-080-47-47</span></li>
				<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20l1.3-4.2A8 8 0 1112 20a8 8 0 01-3.9-1z"/><path d="M9 9c0 3 3 6 6 6l1-2-2-1-1 .8c-1-.4-1.8-1.2-2.2-2.2L11 9.800 10 8z"/></svg><span>WhatsApp: 8-771-191-88-16</span></li>
				<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>Internet portal: www.sk-hotline.kz</span></li>
				<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg><span>E-mail: mail@sk-hotline.kz</span></li>
				<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="3" width="10" height="18" rx="2"/><path d="M11 18h2"/></svg><span>Mobile app: KTZ HSE</span></li>
			</ul>
		</div>

	</div>
</section>

<?php get_footer(); ?>
