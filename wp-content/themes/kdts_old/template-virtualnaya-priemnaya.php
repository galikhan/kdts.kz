<?php
 /*
 * Template name: virtualnaya-priemnaya
 */
?>
<?php get_header(); ?>
    	<div class="pagination-block">
  		<div class="sdfsdfjsdf">
      		<div class="header-logo1"></div>
            <?php get_template_part('breadcrumbs') ?>
        </div>
		<div class="yazyk">
			<ul>
                <li class="yazyk-active"><a href="<?php echo home_url('/bailanystar/undeu/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('ru/kontakty/virtualnaya-priemnaya/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('en/kontakty/virtualnaya-priemnaya/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    	</div>

	<main>
        <div class="dell-container">
            <div class="uslugi-peregruza__h1">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
				<?php echo do_shortcode('[contact-form-7 id="925" title="virtualnaya"]'); ?>

        </div>
    </main>
<script type="text/javascript">
	$(function(){
    var wrapper = $( ".file_upload" ),
        inp = wrapper.find( "input" ),
        btn = wrapper.find( "button" ),
        lbl = wrapper.find( "div" );

    btn.focus(function(){
        inp.focus()
    });
    // Crutches for the :focus style:
    inp.focus(function(){
        wrapper.addClass( "focus" );
    }).blur(function(){
        wrapper.removeClass( "focus" );
    });

    var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

    inp.change(function(){
        var file_name;
        if( file_api && inp[ 0 ].files[ 0 ] ) 
            file_name = inp[ 0 ].files[ 0 ].name;
        else
            file_name = inp.val().replace( "C:\\fakepath\\", '' );

        if( ! file_name.length )
            return;

        if( lbl.is( ":visible" ) ){
            lbl.text( file_name );
            btn.text( "Выбрать" );
        }else
            btn.text( file_name );
    }).change();

});
$( window ).resize(function(){
    $( ".file_upload input" ).triggerHandler( "change" );
});

</script>
<?php get_footer(); ?>







