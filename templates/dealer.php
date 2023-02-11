<?php 
/*
 Template Name: Find Dealer
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container clearfix">
	<div id="page-container" class="clearfix">
		<div class="row">
			<div id="page-main" class="col-mg-23">
				<div class="page-content">
					<div class="wrapper">
						<h2 class="page-title"><?php _e("<!--:en-->Our Distributors<!--:--><!--:th-->ค้นหาผู้แทนจำหน่าย<!--:-->"); ?></h2>

						<?php 
							if ( qtrans_getLanguage() == "en" ) {
								echo "<p>For international inquiries, please contact us at <a href='mailto:info@parichfertilizer.com'>info@parichfertilizer.com</a></p>";
							}
						?>

						กรุณาเลือกภาคที่ต้องการ

						<?php
						$taxonomy = 'locate';
						$regions = get_terms($taxonomy, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));
						
						if ($regions) {

							echo '<ul id="filter" class="filter clearfix">';
							foreach ($regions as $region) {
								echo '<li class="'. $region->slug.'"><a href="#'. $region->slug.'">'.$region->name.'</a></li>';	
							}
							echo '</ul>';

							foreach ($regions as $region) {
								echo '<div id="'.$region->slug.'" class="result">';
								$provinces = get_terms($taxonomy, array('parent' => $region->term_id, 'orderby' => 'slug', 'hide_empty' => true));
								foreach ($provinces as $province) {
							        echo '<div class="group '.$province->slug.'">';
							        echo '<h5>'.$province->name.'</h5>';
							        $args = array(
										'post_type' => 'dealer',
										'orderby' => 'menu_order',
										'posts_per_page' => -1,
										'tax_query' => array(
											array(
												'taxonomy' => $taxonomy,
												'field'    => 'slug',
												'terms'    => $province->slug,
											),
										),
									);
									$dealers = new WP_query($args);
									if ($dealers->have_posts()) {
										echo '<ul class="dealer-list">';
										while ($dealers->have_posts()) {
											$dealers->the_post();
											$name = get_the_title();
											$distname = rwmb_meta( 'parich_dealer_district' );
											if ($distname) { 
												$district =  'อ.'.$distname;
											} else { 
												$district = '&nbsp;';
											}
											$tel = rwmb_meta( 'parich_dealer_tel' );
											echo '<li class="clearfix">';
											echo '<span class="dis">'.$district.'</span>';
											echo '<span class="name">'.$name.'</span>';
											echo '<span class="tel">'.$tel.'</span>';
											echo '</li>';
										}
										echo '</ul>';
									}
									wp_reset_postdata(); 
									echo '</div>';  
							    }
							    echo '</div>';
							}

						}

						?>
					</div>
				</div><!-- end .page-content -->
			</div>
			<div id="page-side" class="col-mg-13">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>