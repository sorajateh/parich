<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3">

	<div class="row g-0 mx-3 mx-sm-0 rounded-3 overflow-hidden" >
		<div class="col col-12 col-lg-7" style="height: 420px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/parich-bg.jpg); background-size: cover; background-position: center center">

		</div>
		<div class="col col-12 col-lg-5 p-3 d-flex align-items-center bg-light">
			<h3>
			<?php _e(
				"<!--:en-->
					<span class='text-orange'>PARICH</span> manufacturers, trades and supplies a variety of industrial chemicals and 
					agricultural products focusing on specialty and innovative fertilizers.
				<!--:-->
				<!--:th-->
				<span class='text-orange'>พาริช</span> เป็นบริษัท ผลิต นำเข้า ส่งออก และจัดจำหน่ายสินค้าทางการเกษตรและเคมีภัณฑ์ 
					เรามุ่งเน้นสร้างความแตกต่างด้วยการนำเสนอผลิตภัณฑ์ที่โดดเด่นด้วยเทคโนโลยีและคุณภาพ 
					โดยการนำเทคโนโลยีชั้นหนึ่งจากทั่วโลกมาใช้กับทั้งผลิตภัณฑ์และกระบวนการผลิต  
				<!--:-->") 
			?>
			</h3>
		</div>
	</div>

	<div>
		<h4 class="px-3 px-md-0 mt-3">
			<?php _e(
				"<!--:en-->
					Products under PARICH brand catering to different client’s needs	
				<!--:-->
				<!--:th-->
					ปุ๋ยสำเร็จรูปตรา พาริช มีผลิตภัณฑ์ 6 ชนิดเพื่อสนองความต้องการของลูกค้าที่แตกต่าง
				<!--:-->") 
			?>
		</h4>
		<div class="row">
			<div class="col col-12 col-md-8">
				<h6 class="text-orange"><?php _e("<!--:en-->Mineral Fertilizer<!--:--><!--:th-->ปุ๋ยเคมี<!--:-->"); ?></h6>
				<hr class="hr-orange" />
				<div class="row row-cols-2 row-cols-md-4">
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'parich' ) ); ?>"><h6><?php _e("<!--:en-->PARICH<!--:--><!--:th-->พาริช<!--:-->"); ?></h6></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'parich' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/parich-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Straight and compound mineral fertilizers<!--:--><!--:th-->ปุ๋ยเคมีคุณภาพสูง<!--:-->"); ?></p>
					</div>
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'nitro' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Nitro<!--:--><!--:th-->พาริช ไนโตร<!--:-->"); ?></h5></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'nitro' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/nitro-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Urea treated with urease inhibitor<!--:--><!--:th-->ปุ๋ยไนโตรเจนลดการระเหยหาย<!--:-->"); ?></6>
					</div>
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Bio<!--:--><!--:th-->พาริช ไบโอ<!--:-->"); ?></h6></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'bio' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/bio-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Compound NPK fertilizer coated with biostimulants<!--:--><!--:th-->ปุ๋ยเคมีเชิงผสม แบบคอมพาวน์ เคลือบด้วยสารไบโอสติมูแลนท์ พิเศษจากฝรั่งเศส<!--:-->"); ?></p>
					</div>
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'tonmai' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Tonmai<!--:--><!--:th-->พาริช ต้นไม้<!--:-->"); ?></h6></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'tonmai' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/tonmai-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Bulk blend NPK fertilizer coated with urease inhibitor and biostimulants<!--:--><!--:th-->ปุ๋ยเคมีบัลต์เบลนด์แบบโนฟิลเลอร์ เสริมด้วยธาตุรองธาตุเสริม ผลิตทีละกระสอบ ใช้เทคโนโลยีพิเศษเพื่อให้พืชดูดซับง่าย<!--:-->"); ?></p>
					</div>
				</div>
			</div>
			<div class="col col-6 col-md-2">
				<h6 class="color-parich"><?php _e("<!--:en-->Organo-Mineral Fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์เคมี<!--:-->"); ?></h6>
				<hr class="hr-orange" />
				<div class="row">
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Bone<!--:--><!--:th-->พาริช โบน<!--:-->"); ?></h6></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'bone' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/bone-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Organic-mineral pellet fertilizer made from steam bone meal and leather meal <!--:--><!--:th-->ปุ๋ยอินทรีย์เคมีที่ ผลิตจากหนังและกระดูกสัตว์เป็นหลัก มีอินทรียวัตถุ 20%<!--:-->"); ?></p>
					</div>
				</div>
			</div>
			<div class="col col-6 col-md-2">
				<h6 class="color-parich"><?php _e("<!--:en-->Organic Fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์<!--:-->"); ?></h6>
				<hr class="hr-orange" />
				<div class="row">
					<div class="col">
						<a href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><h6><?php _e("<!--:en-->PARICH Pagro<!--:--><!--:th-->พาริข พาโกร<!--:-->"); ?></h6></a>
						<a href="<?php echo get_permalink( get_page_by_path( 'pagro' ) ); ?>"><img class="my-2 rounded-1" src="<?php echo get_template_directory_uri(); ?>/images/pagro-logo.png" width="80" height="80" /></a>
						<p><?php _e("<!--:en-->Animal-based 100% organic fertilizer<!--:--><!--:th-->ปุ๋ยอินทรีย์แท้ 100%<!--:-->"); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col col-12 col-md-4">
			<div class="card mb-3">
				<?php 
					echo wp_get_attachment_image( 132, array(354,236), false, array('class' => "card-img-top") );
				?>
				<div class="card-body">
					<h4 class="card-title">
						<?php _e(
							"<!--:en-->
								ABOUT <em>PARICH</em>
							<!--:-->
							<!--:th-->
								รู้จัก<em>พาริช</em>
							<!--:-->") 
						?>
					</h4>
					<p class="card-text">
						<?php 
							if ( qtrans_getLanguage() == "en" ) {
								$content = "Parich’s mission is to deliver sustainable 
								Agriculture solutions through innovations 
								To achieve higher yield and higher quality 
								Of agricultural produce";
							} else if ( qtrans_getLanguage() == "th" ) {
								$content = "พาริช ทำธุรกิจในการผลิต นำเข้า ส่งออก และจัดจำหน่าย ผลิตภัณฑ์ทางการเกษตร โดยมุ่งเน้นที่จะพัฒนาการ
								เกษตรด้วยการนำเทคโนโลยีสมัยใหม่มาใช้ในอุตสาหกรรมการเกษตร และเน้นทางด้านคุณภาพของสินค้า เพื่อทำให้
								เกษตรกรที่ใช้ผลิตภัณฑ์ของบริษัทสามารถที่จะเพิ่มปริมาณ";
							}
							echo shrink($content, ''); 
						?>
					</p>
					<a class="btn btn-dark" href="<?php echo get_permalink(14); ?>">
					<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
					</a>
				</div>
			</div>
		</div>

		<div class="col col-12 col-md-4">
			<div class="card mb-3">
				<?php 
					echo wp_get_attachment_image( 392, array(354,236), false, array('class' => "card-img-top") );
				?>
				<div class="card-body">
					<h4 class="card-title">
						<?php _e(
							"<!--:en--><em>PARICH<sup>&copy;</sup></em><!--:-->
							<!--:th--><em>ปุ๋ยตราพาริช</em><!--:-->") 
						?>
					</h4>
					<p class="card-text">
						<?php 
							if ( qtrans_getLanguage() == "en" ) {
								$content = "Our portfolio ranges from single nutrient mineral fertilizers to complex compounds with the focus 
									on specialty (innovative) fertilizers.  We offer many different sub-brands with differing characteristics 
									catering to different farmers needs as follow:";
							} else if ( qtrans_getLanguage() == "th" ) {
								$content = "&#34;ปุ๋ยตราพาริช&#34; มีผลิตภัณฑ์ครอบคลุมตั้งแต่ ปุ๋ยเคมี อินทรีย์เคมี และ อินทรีย์ รวมถึงปุ๋ยปั้นเม็ด (Compound) 
									แม่ปุ๋ย N P K ปุ๋ยน้ำอะมิโน และอีกหลากหลายสูตรที่โดดเด่นทางด้านเทคโนโลยี และมีการวิจัยรองรับ";
							}
							echo shrink($content, ''); 
						?>
					</p>
					<a class="btn btn-dark" href="<?php echo get_permalink(252); ?>">
					<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
					</a>
				</div>
			</div>
		</div>

		<div class="col-4">
			<?php echo get_line_qr_code(); ?>
		</div><!-- end .col12 -->

		
	</div><!-- end .row -->

	<div class="row">
		<div class="col-8 mt-3">
			<div class="rounded-3 register-form form-container thm-orange gd-parich">
				<?php 	
					if ( qtrans_getLanguage() == "en" ) {
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); }
					} else if ( qtrans_getLanguage() == "th" ) {
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 4 ); }
					}
				?>
			</div><!-- end .form-container -->
		</div><!-- end .col-23 -->
		<div class="col-4">
			<div class="fb-like-box" data-href="https://www.facebook.com/parich.fertilizer" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
		</div><!-- end .col-13 -->
	</div><!-- end .row -->

</div><!-- end .container -->

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
