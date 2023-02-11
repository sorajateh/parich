<?php get_header(); ?>

<div class="container clearfix">
	<div id="page-container" class="clearfix">
		<div class="row">
			<div id="page-main" class="col-mg-23">
				
				<div class="page-content" style="background: none;">
					<h5 class="archive-title"><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h5>
					<?php 
						$args = array(
								'post_type' => 'knowledge',
								'tax_query' => array(
									array(
										'taxonomy' => 'post_tag',
										'field'    => 'slug',
										'terms'    => single_tag_title( '', false ),
									),
								),
							);
						$query_posts = new WP_Query($args);
						echo Post_Util::get_post_feed($query_posts);
					?>
				</div><!-- end .page-content -->
			</div><!-- end #page-main -->
			<div id="page-side" class="col-mg-13">
				<?php get_sidebar(); ?>
			</div><!-- end #page-side -->
		</div>
	</div>
</div>
<?php get_footer(); ?>