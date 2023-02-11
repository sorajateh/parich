<?php 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container pt-3">
	<div class="row">
		<div class="col-md-8">
			<div class="ratio ratio-16x9 mb-3 overflow-hidden rounded-3"
			style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>); background-size: cover; background-position: center center">
			</div>	
			<?php 
			// if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			// 	echo '<div class="ratio ratio-4x3 my-3 overflow-hidden rounded-3">';
			// 	the_post_thumbnail('large', array('class' => 'imgfill'));
			// 	echo '</div>';
			// 	}
			?>
			<?php the_content(); ?>
		</div>
		<div class="col-md-4 d-none d-md-block">
			<?php get_sidebar(); ?>
		</div><!-- end #page-side -->
	</div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
