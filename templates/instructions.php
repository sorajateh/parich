<?php 
/*
 Template Name: Instructions
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3 pt-sm-5">
	<h2 class="px-3 px-md-0"><?php the_title(); ?></h2>
	<?php
		$args = array(
			'orderby' => 'menu_order',
			'post_type' => 'instruction',
			'posts_per_page' => -1,
		);
		$intructions = get_posts($args);
		if ($intructions) {
			$html .= '<div class="row row-cols-2 row-cols-md-4">';
			foreach ($intructions as $instruction) {
				// $download->the_posts();
				$thumb = get_the_post_thumbnail($instruction->ID, 'facade-post-thumb', array( 'class' => 'imgfill' ) );
				$file = get_post_meta( $instruction->ID, 'parich_instruc_src', 'true' );
				if ($file) {
					$permalink = wp_get_attachment_url( $file );
				} else {
					$permalink = '#';
				}
				$html .= '<div class="col mb-3">';
				$html .= '<div class="d-flex align-items-center justify-content-center overflow-hidden rounded-3" >';
				$html .= '<h3 class="position-absolute text-light" style="z-index: 2">'.$instruction->post_title.'</h3>';
				$html .= '<a class="ratio ratio-16x9" target="_blank" href="'.$permalink.'">';
				$html .= '<span class="overlay" style="background-color: rgba(0,0,0,0.25); z-index: 1"></span>';
				if ($thumb && !is_wp_error($thumb)) {
					$html .= $thumb;
				}
				$html .= '</a>';
				$html .= '</div>';							    
				$html .= '</div>';
			}
			$html .= '</div>';
		}
		wp_reset_postdata(); 
		echo $html;
	?>	
</div>
		

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
