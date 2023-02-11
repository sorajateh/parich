<?php 
/*
 Template Name: Downloads
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3 pt-sm-5">
	<h2 class="px-3 px-md-0"><?php the_title(); ?></h2>
	<?php
		$post_type = 'download';
		$taxonomy = 'file_type';
		$types = get_terms($taxonomy, array('orderby' => 'slug', 'hide_empty' => true));
		if ($types) {
			$html = '<div class="row row-cols-1 row-cols-md-3">';
			foreach ($types as $type) {
				$html .= '<div class="col g-0 g-sm-3 download-group-'.$type->slug.'">';
				$html .= '<h3 class="px-3 px-md-0 text-secondary">'.$type->name.'</h3>';
				$args = array(
					'post_type' => $post_type,
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => $taxonomy,
							'field'    => 'slug',
							'terms'    => $type->slug,
						),
					),
				);
				$downloads = get_posts($args);
				if ($downloads) {
					$html .= '<div class="row row-cols-2">';
					foreach ($downloads as $download) {
						// $download->the_posts();
						$thumb = get_the_post_thumbnail($download->ID, 'download-post-thumb' );
						$file = get_post_meta( $download->ID, 'parich_download_src', 'true' );
						if ($file) {
							$link = wp_get_attachment_url( $file );
						} else {
							$link = '#';
						}
						$html .= '<div class="col pb-3">';
						$html .= '<div class="w-100 overflow-hidden rounded-3 mb-3 bg-light" style="height: 140px;">';
						if ($file) {
							$link = wp_get_attachment_url( $file );
							if ($type->slug == 'song') {
								$html .= '<audio src="'.$link.'" preload="auto"></audio>';
							} else {
								if ($thumb && !is_wp_error($thumb)) {
									$html .= $thumb; 
								}
							}
						}									
						$html .= '</div>';
						$html .= '<h6>'.$download->post_title.'</h6>';
						if ($file) {
							$html .= '<a download class="btn btn-outline-secondary btn-sm" href="'.$link.'">'.__('<!--:en-->Download<!--:--><!--:th-->ดาวน์โหลด<!--:-->').'</a>';
						}
						$html .= '</div>';
					}
					$html .= '</div>';
				}
				wp_reset_postdata(); 
				$html .= '</div>';
			}
			$html .= '</div>';
			echo $html;
		}
	?>	
</div>
		

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
