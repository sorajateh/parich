<?php 
/*
Template Name: Page without Sidebar
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container clearfix">
	<h2 class="page-title"><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
