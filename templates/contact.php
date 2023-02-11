<?php 
/*
 Template Name: Contact Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="gmap">
	<?php echo do_shortcode( '[wpgmza id="1"]' ) ?>
</section>

<section id="contact-body">
	<div class="container pt-3">
		<div class="row">
		<div class="col-6 col-contact-info">
			<address>
				<h5 class="org"><?php _e("<!--:en-->Parich Fertilizer Co.,Ltd<!--:--><!--:th-->บริษัท พาริช เฟอทิไลเซอร์ จำกัด<!--:-->") ?><br />
					<?php _e("<!--:en-->PNR Parich Co.,Ltd<!--:--><!--:th-->บริษัท พีเอ็นอาร์ พาริช จำกัด<!--:-->") ?><br />
				</h5>
				<p class="adr">
					<?php _e("	
						<!--:en-->
							1477/1 Pattanakarn Soi 31/1 <br />  
							Suanluang Suanluang 
							Bangkok 10250, Thailand
						<!--:-->
						<!--:th-->
							1477/1 พัฒนาการ ซอย 31/1<br />
							สวนหลวง สวนหลวง กทม. 10250
						<!--:-->") 
					?></p>
			<dl class="contact-list">
				<dt><?php _e("<!--:en-->Tel:<!--:--><!--:th-->โทร:<!--:-->") ?></dt>
				<dd>+66 2 319 3371-3</dd>
				<dt><?php _e("<!--:en-->Fax:<!--:--><!--:th-->แฟกซ์:<!--:-->") ?></dt>
				<dd>+66 2 319 3374</dd>
				<dt><?php _e("<!--:en-->Email:<!--:--><!--:th-->อีเมลล์:<!--:-->") ?></dt>
				<dd><a href="mailto:info@parichfertilizer.com">info@parichfertilizer.com</a></dd>
			</dl>
			</address>
			<ul class="social">
				<li class="print-map"><a href=
					<?php 	
						$map_en = wp_get_attachment_url(415);
						$map_th = wp_get_attachment_url(416);
						if ( qtrans_getLanguage() == "en" ) {
							echo $map_en ? $map_en : '#';
						} else if ( qtrans_getLanguage() == "th" ) {
							echo $map_th ? $map_th : '#';
						}
					?>
				target="_blank" ><span><?php _e("<!--:en-->Print Map<!--:--><!--:th-->พิมพ์แผนที่<!--:-->") ?></span></a></li>
				<li class="email"><a href="mailto:info@parichfertilizer.com"><span><?php _e("<!--:en-->Send Email<!--:--><!--:th-->ส่งอีเมลล์<!--:-->") ?></span></a></li>
				<li class="fb"><a href="https://th-th.facebook.com/parichfertilizer" target="_blank"><span>PARICH<sup>®</sup></span></a></li>
			</ul>
			<div class="line-qr-code">
				<img width="60" height="auto" src="<?php echo get_template_directory_uri(); ?>/images/Line_logo.png" style="display: inline-block; vertical-align: middle"/>
				<h5 style="display: inline-block; margin-left: 8px; margin-bottom: 36px;">Official Line ID <em>@parich</em></h5>
				<img width="200" height="auto" src="<?php echo get_template_directory_uri(); ?>/images/line-qr-code-s.png" style="display: block;"/>
				<br/><br/><br/>
			</div>
		</div>
		<div class="col-6">
			<div class="form-container reply-form">
				<?php 	
					if ( qtrans_getLanguage() == "en" ) {
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
					} else if ( qtrans_getLanguage() == "th" ) {
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); }
					}
				?>
			</div>
		</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
