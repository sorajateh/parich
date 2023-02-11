<?php 
/*
 Template Name: Knowledge
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3 pt-sm-5">
	<h2 class="px-3 px-md-0"><?php the_title(); ?></h2>
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'knowledge',
			'post_status' => array( 'publish' ),
			'orderby'=> 'date',
			'order'=> 'DESC',
			'paged'=>$paged
		);
		$knowledge = new WP_Query($args);
		echo Post_Util::get_post_feed($knowledge);
		wp_reset_postdata();
	?>
	<div class="paginate paginate-khowledge">
		<?php 
			echo paginate_links( array(
				'total' => $knowledge->max_num_pages,
				'prev_text' => __("<!--:en-->&laquo; <span>Previous</span><!--:--><!--:th-->&laquo; <span>หน้าที่แล้ว</span><!--:-->"),
				'next_text' => __("<!--:en--><span>Next</span> &raquo; <!--:--><!--:th--><span>หน้าต่อไป</span> &raquo;<!--:-->"),
				'end_size'  => 1,
				'mid_size'  => 5,
			) ); 
			
		?>
	</div>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
