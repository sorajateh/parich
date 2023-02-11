<?php 
/*
Template Name: Care More
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3">
	<div class="row">
		<div class="col-8">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					echo '<div class="ratio ratio-16x9 mb-3 overflow-hidden rounded-3">';
					the_post_thumbnail('large', array('class' => 'imgfill'));
					echo '</div>';
				}
			?>
					
			<h2><?php the_title(); ?></h2>
		  	<?php the_content(); ?>

		</div>

		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>

	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 134, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<span class="text-orange">Care More</span><br/>
						<?php _e(
							"<!--:en-->
								FOR OUR CLIENTS AND PARTNERS
							<!--:-->
							<!--:th-->
								สำหรับลูกค้า
							<!--:-->") 
						?>
					</h4>
					<p class="card-text">
					<?php _e(
						"<!--:en-->
							We aim to provide our clients, suppliers and business partners our
							services with utmost fairness, reliability and integrity. 
						<!--:-->
						<!--:th-->
							เรามุ่งเน้นที่จะให้ความเชื่อมั่น และทำธุรกิจกับลูกค้า, และคู่ค้า รวมไปถึงเกษตรกร ด้วยความ
							ยุติธรรมและความสุจริต โดยเรายึดมั่นตามมาตรฐานของอุตสาหกรรม และหลักธรรมาภิบาล
						<!--:-->") 
					?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 250, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<span class="text-orange">Care More</span><br/>
						<?php _e(
							"<!--:en-->
								FOR HUMANITY
							<!--:-->
							<!--:th-->
								สำหรับเพื่อนมนุษย์
							<!--:-->") 
						?>
					</h4>
					<p class="card-text">
					<?php _e(
						"<!--:en-->
							We aim to provide our clients, suppliers and business partners our
							services with utmost fairness, reliability and integrity. 
						<!--:-->
						<!--:th-->
							เราพยายามอย่างที่สุดที่จะยึดถือในอุดมการณ์ที่จะทำงานภายได้หลักบรรษัทภิบาล แต่นอกจากนั้นเรายังร่วมกับองค์กรณ์
							การกุศลหลายแห่งและเป็นอาสาสมัครในการช่วยเหลือสังคมด้านต่างๆ เพราะแม้ว่าวัตถุประสงค์หลักของบริษัทคือการพัฒนาทางด้านเกษตร
							แต่แก่นแท้ของบริษัทคือความต้องการที่จะช่วยเหลือเพื่อนมนุษย์ด้วยกัน
						<!--:-->") 
					?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 248, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<span class="text-orange">Care More</span><br/>
						<?php _e(
							"<!--:en-->
								FOR THE ENVIRONMENT
							<!--:-->
							<!--:th-->
								สำหรับสิ่งแวดล้อม
							<!--:-->") 
						?>
					</h4>
					<p class="card-text">
					<?php _e(
						"<!--:en-->
							PARICH is focused on “sustainable agriculture”.  We want to be “green” company, 
							which means  that we are committed  only to environmentally friendly products and services.
						<!--:-->
						<!--:th-->
							เรามุ่งที่จะเป็นบริษัทสีเขียว  เพราะเราเชื่อมั่นในหลักการพัฒนาอย่างยั่งยืน ดังนั้น
							ผลิตภัณฑ์ต่างๆของ พาริช นอกจากจะต้องมีคุณภาพ จะต้องเป็นผลิตภัณฑ์ที่ไม่มทำให้สิ่งแวดล้อมเสียหายด้วย
						<!--:-->") 
					?>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
