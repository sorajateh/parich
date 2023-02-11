<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container clearfix">
	<div id="page-container" class="clearfix">
		<div class="row">
			<div id="page-main" class="col-mg-23">
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					echo '<div class="page-thumb">';
				  	the_post_thumbnail('large', array('class' => 'imgfill'));
				  	echo '</div>';
				 }
				?>
				<div class="page-content post-content">
					<div class="wrapper clearfix">
						<h2 class="page-title"><?php the_title(); ?></h2>
						<?php echo Post_Util::get_post_date(); ?>
						<div class="post-content">
						<?php the_content(); ?>
						</div>
						<?php echo Post_Util::get_post_tags(); ?>
						<?php echo Post_Util::get_post_metas(); ?>
					</div><!-- end .pad -->
				</div><!-- end .page-content -->

				<div class="page-comments">
					<div class="wrapper clearfix" style="padding-bottom: 0px;">
					<?php echo do_shortcode('[fbcomments url="'.get_permalink($post->ID).'" width="375" count="off" num="3" title="'.__('<!--:en-->Comments<!--:--><!--:th-->แสดงความคิดเห็น<!--:-->').'" countmsg="wonderful comments!"]'); ?>
					</div>
				</div>
			</div><!-- end #page-main -->
			<div id="page-side" class="col-mg-13">
				<?php get_sidebar(); ?>
			</div><!-- end #page-side -->
		</div>
	</div>
</div>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>