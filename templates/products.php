<?php 
/*
 Template Name: Our Products
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3">

	<div class="row mb-4">
		
		<div class="col-12 col-sm-4 mb-3 mb-sm-0">
			<div class="h-100 p-3 bg-light overflow-hidden rounded-3">
			<h2 class="entry-title">
				<a href="<?php echo get_brand_page_href(); ?>"><em><?php _e("<!--:en-->PARICH<!--:--><!--:th-->พาริช<!--:-->"); ?></em></a><br />
				<a href="<?php echo get_brand_page_href('nitro'); ?>"><?php _e("<!--:en-->PARICH Nitro<!--:--><!--:th-->พาริช ไนโตร<!--:-->"); ?></a><br />
				<a href="<?php echo get_brand_page_href('bone'); ?>"><?php _e("<!--:en-->PARICH Bone<!--:--><!--:th-->พาริช โบน<!--:-->"); ?></a><br />
				<a href="<?php echo get_brand_page_href('pagro'); ?>"><?php _e("<!--:en-->PARICH Pagro<!--:--><!--:th-->พาริช พาโกร<!--:-->"); ?></a><br />
				<a href="<?php echo get_brand_page_href('bio'); ?>"><?php _e("<!--:en-->PARICH Bio<!--:--><!--:th-->พาริช ไบโอ<!--:-->"); ?></a><br />
				<a href="<?php echo get_brand_page_href('tonmai'); ?>"><?php _e("<!--:en-->PARICH Tonmai<!--:--><!--:th-->พาริช ต้นไม้<!--:-->"); ?></a><br />
			</h2>
			<a class="btn btn-dark" href="<?php echo get_permalink(252); ?>">
				<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
			</a>
			</div>
		</div>
		<div class="col-12 col-sm-8" style="height: 420px;">
			<div class="h-100 overflow-hidden rounded-3">
				<span class="txt-parich-brands hide-sm" style="position: absolute; margin: 12px">PARICH<sup>&reg;</sup> Brands</span>
				<img class="imgfill" src="<?php echo content_url(); ?>/uploads/parich-bags.jpg" />
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 179, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<?php _e(
							"<!--:en-->
								ANIMAL <span class='text-orange'>NUTRITION</span>
							<!--:-->
							<!--:th-->
								วัตถุดิบ<span class='text-orange'>อาหารสัตว์</span>
							<!--:-->") 
						?>
					</h4>
					<a class="btn btn-dark" href="<?php echo get_permalink(183); ?>">
						<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 181, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<?php _e(
							"<!--:en-->
								<span class='text-orange'>INDUSTRIAL</span><br />SOLUTIONS
							<!--:-->
							<!--:th-->
								วัตถุดิบ<span class='text-orange'>อุตสาหกรรม</span>
							<!--:-->") 
						?>
					</h4>
					<a class="btn btn-dark" href="<?php echo get_permalink(193); ?>">
						<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mb-3 overflow-hidden">
				<div class="ratio ratio-16x9 overflow-hidden" style="height: 14rem; background-image: url(
					<?php 
						$img = wp_get_attachment_image_src( 182, 'medium' ); 
						echo $img[0];
					?>
					); background-size: cover; background-position: center center">
				</div>
				<div class="card-body">
					<h4 class="card-title">
						<?php _e(
							"<!--:en-->
								<span class='text-orange'>FERTILIZER</span> RAW MATERIALS
							<!--:-->
							<!--:th-->
								วัตถุดิบ<span class='text-orange'>ปุ๋ย</span>
							<!--:-->") 
						?>
					</h4>
					<a class="btn btn-dark" href="<?php echo get_permalink(225); ?>">
						<?php _e("<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->") ?>
					</a>
				</div>
			</div>
		</div>
	</div>

</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
