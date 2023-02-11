<div id="sidebar-main">

	<div class="widget-container">
		<?php echo get_line_qr_code(); ?>
	</div>

	<div class="widget-container">
		<div class="form-container register-form thm-orange rounded-3">
			<?php 	
				if ( qtrans_getLanguage() == "en" ) {
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); }
				} else if ( qtrans_getLanguage() == "th" ) {
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 4 ); }
				}
			?>
		</div><!-- end .form-container -->
	</div><!-- end .widget-container -->

	<!-- <div class="widget-container">
		<div class="fb-like-box" data-href="https://www.facebook.com/parich.fertilizer" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
	</div> -->

</div><!-- end #sidebar -->
