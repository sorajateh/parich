<?php 
/*
 Template Name: About Us
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3">

	<div class="d-flex flex-column flex-lg-row my-3 px-3 px-sm-0">
		<div class="col col-12 col-lg-7 overflow-hidden rounded-3" style="height: 420px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/All-Orange.jpg); background-size: cover; background-position: center center">
			
		</div>
		<div class="col-12 col-lg-5 py-3 px-0 px-lg-3 d-flex align-items-center">
			<h4>
				<?php _e(
					"<!--:en-->
						<span class='text-orange'>PARICH</span>’s mission is to deliver sustainable agriculture 
						solutions through innovations to achieve higher yield and 
						higher quality of agricultural produce
					<!--:-->
					<!--:th-->
						พาริช ก่อตั้งขึ้นด้วยอุดมการที่จะช่วยยกมาตรฐานคุณภาพชีวิตของเกษตรกร 
						โดยมุ่งมั่นที่จะเป็นองค์กรแห่งนวัตกรรมทางการเกษตร และทำธุรกิจภายใต้
						หลักบรรษัทภิบาลและการพัฒนาอย่างยั่งยืน โดยเรามุ่งเน้นการสร้างความแตกต่าง
						ด้วยการนำเสนอผลิตภัณฑ์ที่โดดเด่นด้วยเทคโนโลยีและคุณภาพ โดยการนำเทคโนโลยี
						ชั้นหนึ่งจากทั่วโลกมาใช้ กับทั้งผลิตภัณฑ์และกระบวนการผลิต ด้วยสโลแกนที่ว่า 
						<span class='text-orange'>“พาริช พารวยด้วยนวัตกรรม”</span>
					<!--:-->") 
				?>
			</h4>
		</div>
	</div>

	<div class="d-flex flex-column flex-lg-row my-3 px-3 px-sm-0">
		<div class="col-12 col-lg-7 pe-3 mb-5 mb-lg-0 d-flex flex-column justify-content-center align-items-start">
			<h3>
				<?php _e(
					"<!--:en-->
						AT A GLANCE
					<!--:-->
					<!--:th-->
						เกี่ยวกับ<em>พาริช</em>
					<!--:-->") 
				?>
			</h3>
			<p>
			<?php 
				if ( qtrans_getLanguage() == "en" ) {
					$content = "Based in Thailand, one of the world’s largest producers of agricultural products, 
					PARICH produces, trades and distributes, agricultural inputs, mainly fertilizers.  
					The company focuses on using new innovations to improve farming productivity, 
					and efficiency to achieve the best crop yield and quality";
				} else if ( qtrans_getLanguage() == "th" ) {
					$content = "พาริช ทำธุรกิจในการผลิต นำเข้า ส่งออก และจัดจำหน่าย ผลิตภัณฑ์ทางการเกษตร 
					โดยมุ่งเน้นที่จะพัฒนาการเกษตรด้วยการนำเทคโนโลยีสมัยใหม่มาใช้ในอุตสาหกรรมการเกษตร 
					และเน้นทางด้านคุณภาพของสินค้า";
				}
				echo shrink($content, ''); 
			?>
			</p>
			<a class="btn btn-dark" href="<?php echo get_permalink(49); ?>">
				<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
			</a>
		</div>
		<div class="col-12 col-lg-5 overflow-hidden rounded-3 d-none d-lg-block" style="height: 320px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/shutterstock_39391570.jpg); background-size: cover; background-position: center center">
			
		</div>
	</div>
	
	<div class="d-flex flex-column flex-lg-row my-3 px-3 px-sm-0">
		<div class="col-12 col-lg-5 overflow-hidden rounded-3 d-none d-lg-block" style="height: 320px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/DSC01776.jpg); background-size: cover; background-position: center center">
			
		</div>
		<div class="col-12 col-lg-7 ps-0 ps-lg-3 mb-5 mb-lg-0 d-flex flex-column justify-content-center align-items-start">
			<h3>
				<?php _e(
					"<!--:en-->
						<em>WHO ARE WE</em>
					<!--:-->
					<!--:th-->
						รู้จัก<em>พาริช</em>
					<!--:-->") 
				?>
			</h3>
			<p>
			<?php 
				if ( qtrans_getLanguage() == "en" ) {
					$content = "PARICH manufacturers, trades and supplies a variety of industrial chemicals and agricultural products
					focusing on specialty and innovative fertilizers. We try our best to keep up-to-date on cutting edge 
					agricultural technology and new innovations to apply with our products to improve farming productivity 
					and enhance crop quality.";
				} else if ( qtrans_getLanguage() == "th" ) {
					$content = "พาริช เป็นบริษัท ผลิต นำเข้า ส่งออก และจัดจำหน่ายสินค้าทางการเกษตรและเคมีภัณฑ์ เรามุ่งเน้นสร้างความแตกต่างด้วย
					การนำเสนอผลิตภัณฑ์ที่โดดเด่นด้วยเทคโนโลยีและคุณภาพ โดยการนำนำเทคโนโลยีชั้นหนึ่งจากทั่วโลกมาใช้กับทั้งผลิตภัณฑ์และ
					กระบวนการผลิต";
				}
				echo shrink($content, ''); 
			?>
			</p>
			<a class="btn btn-dark" href="<?php echo get_permalink(67); ?>">
				<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
			</a>
		</div>
	</div>

	<div class="d-flex flex-column flex-lg-row my-3 px-3 px-sm-0">
		<div class="col-12 col-lg-7 pe-3 mb-5 mb-lg-0 d-flex flex-column justify-content-center align-items-start">
			<h3>
				<?php _e(
					"<!--:en-->
						THE CORE VALUE OF PARICH <br />IS <em>CARE.MORE</em>
					<!--:-->
					<!--:th-->
						<em>'การเอาใจใส่ที่มากกว่า'</em><br /><span class='hide-sm'>เป็นส่วนหนึ่งของพาริช</span>
					<!--:-->") 
				?>
			</h3>
			<p>
			<?php 
				if ( qtrans_getLanguage() == "en" ) {
					$content = "For PARICH, business isn’t only about selling the best products possible, 
					but it is also about the best we can to give and share.  
					PARICH’s philosophy is to give CARE to everything we do.";
				} else if ( qtrans_getLanguage() == "th" ) {
					$content = "คำว่าธุรกิจของ พาริช ไม่ได้หมายวามแค่ว่าจะพยายามขายในสิ่งที่ดีที่สุดที่จะทำได้ แต่มันรวมไปถึง
					การให้และแบ่งปัน ดังนั้นปรัชญาของการทำธุรกิจเราคือ CARE.MORE หรือการเอาใจใส่ที่มากกว่าในทุกๆสิ่งที่เราทำ";
				}
				echo shrink($content, ''); 
			?>
			</p>
			<a class="btn btn-dark" href="<?php echo get_permalink(163); ?>">
				<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
			</a>
		</div>
		<div class="col-12 col-lg-5 overflow-hidden rounded-3 d-none d-lg-block" style="height: 320px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/IMG_0128.jpg); background-size: cover; background-position: center center">
			
		</div>
	</div>

</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
