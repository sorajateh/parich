<?php get_header(); ?>



<div class="container clearfix">
	<div id="page-container" class="clearfix">
		<div class="row">
			<div id="page-main" class="col-mg-23">
				<div class="page-content" style="background: none;">
					<h2 class="page-title">
						<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>
							<?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>
							<?php 
								printf( __( '<!--:en-->Monthly Archives:<!--:--><!--:th-->บทความในเดือน:<!--:--> <span>%s</span>' ), get_the_date('F Y') ); 
							?>
						<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>
							<?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
						<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
							Blog Archives
						<?php endif; ?>
					</h2>
					<div class="post-roll">
					<?php if ( have_posts() ) : 
						while ( have_posts() ) : the_post(); 
						$post_id = get_the_ID();
						$post_excerpt = get_the_excerpt();
						$classes = get_post_class('',$post_id);
						$class_array = array();
						foreach ($classes as $class) {
							$class_array[] = $class;
						}
						$post_classes = implode( " ", $class_array );
						$permalink = get_permalink();
						$html .= '<div id="post-'.$post_id.'" class="post-feed clearfix '.$post_classes.'">';
						$html .= '<div class="wrapper clearfix">';
						$html .= Post_Util::get_post_date($post_id);
						$html .= '<a href="'.$permalink.'"><h4 class="post-title">'.get_the_title().'</h4></a>';
						$html .= Post_Util::get_post_thumb($post_id);
						if ($post_excerpt != '') {
							$html .= '<div class="post-excerpt">'.$post_excerpt.'</div>';
						}
						$html .= '<a class="btn-next readmore" href="'.$permalink.'">'.__('<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->').'</a>';
						// $html .= do_shortcode('[TheChamp-Sharing]'); 
						// $html .= Share_Util::get_social_share($post_id);
						$html .= Post_Util::get_post_tags($post_id);
						$html .= Post_Util::get_post_metas($post_id);
						$html .= '</div></div>';
						endwhile;
						endif;
						echo $html;
					?>
					</div>
				</div>
			</div>
			<div id="page-side" class="col-mg-13">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
