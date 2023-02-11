<?php

Class Post_Util {

	function __construct() {

	}

	static function get_post_type_date_link( $post_type, $year, $month = 0, $day = 0 ) {
		global $wp_rewrite;
		$post_type_obj = get_post_type_object( $post_type );
		$post_type_slug = $post_type_obj->rewrite[‘slug’] ? $post_type_obj->rewrite[‘slug’] : $post_type_obj->name;
		if ( $day ) { // day archive link
			// set to today’s values if not provided
			if ( !$year ) {
				$year = gmdate(‘Y’, current_time(‘timestamp’));
			}
			if ( !$month ) {
				$month = gmdate(‘m’, current_time(‘timestamp’));
				$link = $wp_rewrite->get_day_permastruct();
			}
		} else if ( $month ) { // month archive link
			if ( !$year ) {
				$year = gmdate(‘Y’, current_time(‘timestamp’));
				$link = $wp_rewrite->get_month_permastruct();
			}
		} else { // year archive link
			$link = $wp_rewrite->get_year_permastruct();
		}
		if ( !empty($link) ) {
			$link = str_replace(‘%year%’, $year, $link);
			$link = str_replace(‘%monthnum%’, zeroise(intval($month), 2), $link );
			$link = str_replace(‘%day%’, zeroise(intval($day), 2), $link );
			return home_url( $post_type_slug.$link );
		}
		return home_url( $post_type_slug );
	}

	function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	    $content = get_the_content($more_link_text, $stripteaser, $more_file);
	    $content = apply_filters('the_content', $content);
	    $content = str_replace(']]>', ']]&gt;', $content);
	    return $content;
	}

	static function get_post_tags($post = null) {
	    $tags = get_the_term_list($post, 'post_tag', '<ul class="tag-list"><li>', ',</li><li>', '</li></ul>');
	    if ( $tags && ! is_wp_error( $tags ) ) {
	        $html = '<div class="post-tags clearfix">';
	        $html .= '<h6>'.__('<!--:en-->Tags:<!--:--><!--:th-->ป้ายกำกับ:<!--:-->').'</h6>'.$tags;
	        $html .= '</div>';
	        return $html;
	    }
	}

	static function get_post_date($post = null) {
	    $day = get_post_time( 'j', true, $post );
	    $month = get_post_time( 'M', true, $post );
	    $year = get_post_time( 'Y', true, $post );
	    $m = get_post_time( 'm', true, $post );
	    $d = get_post_time( 'd', true, $post );
	    $y = get_post_time( 'y', true, $post );
	    $html = '<div class="post-date clearfix">';
	    $html .= '<span class="day">'.$day.'</span>';
	    $html .= '<a class="month" href="'.cptda_get_month_link( $year, $m, $post_type = 'knowledge' ).'">'.$month.','.$y.'</a>';
	    $html .= '</div>';
	    return $html;
	}

	static function get_post_metas($post = null) {
	    $cats = get_the_category_list( ', ', '',$post );
	    $html = '<div class="post-meta clearfix">';
	    $html .= '<div class="col comments">
	                <span class="head">'.__('<!--:en-->Comments:<!--:--><!--:th-->ความเห็น:<!--:-->').'</span>
	                <span class="body"><a href="'.get_permalink($post).'" >ให้ความเห็น</a></span>
	             </div>';
	    
	    $html .= '<div class="col categories">
	                <span class="head">'.__('<!--:en-->Categories:<!--:--><!--:th-->หมวดหมู่:<!--:-->').'</span>
	                <span class="body">'.$cats.'</span>
	              </div>';
	    $html .= '<div class="col author">
	                <span class="head">'.__('<!--:en-->Author:<!--:--><!--:th-->ผู้เขียน:<!--:-->').'</span>
	                <span class="body">'.get_the_author().'</span>
	              </div>';
	    $html .= '</div>';
	    return $html;
	}

	static function get_post_thumb($post = null) {
	    // $attr = array(
	    //     'class' => "imgfill",
	    // );
	    $thumb = get_the_post_thumbnail($post, 'featured-post-thumb' );
	    if ($thumb && !is_wp_error($thumb)) {
	        $html = '<div class="post-thumb">'.$thumb.'</div>';
	        return $html;
	    }
	}

	static function get_email_this_page_button() {
		
	}

	static function get_post_feed($query) {
		if ( $query->have_posts() ) {
			$html = '<div class="row row-cols-1 row-cols-md-4">';
			while ( $query->have_posts() ) {
				$query->the_post();
				$post_id = get_the_ID();
				$post_excerpt = get_the_excerpt();
				$classes = get_post_class('',$post_id);
				$class_array = array();
				foreach ($classes as $class) {
					$class_array[] = $class;
				}
				$post_classes = implode( " ", $class_array );
				$permalink = get_permalink();
				$html .= '<div class="col">';
				$html .= '<div id="post-'.$post_id.'" class="card overflow-hidden rounded-3 mb-3">';
				// $html .= Post_Util::get_post_date($post_id);
				$html .= '<div class="ratio ratio-16x9" style="background-image: url(' . get_the_post_thumbnail_url($post_id, 'featured-post-thumb' ) . '); background-size: cover; background-position: center center"></div>';
				$html .= '<div class="card-body">';
				$html .= '<h5 class="card-title">'.get_the_title().'</h5>';
				
				if ($post_excerpt != '') {
					$html .= '<p class="card-text">'.$post_excerpt.'</p>';
				}
				$html .= '<a class="btn btn-dark" href="'.$permalink.'">'.__('<!--:en-->Read More<!--:--><!--:th-->อ่านต่อ<!--:-->').'</a>';
				// $html .= do_shortcode('[TheChamp-Sharing]'); 
				// $html .= Share_Util::get_social_share($post_id);
				// $html .= Post_Util::get_post_tags($post_id);
				// $html .= Post_Util::get_post_metas($post_id);
				$html .= '</div></div></div>';
			}
			$html .= '</div>';
		} else {
			$html = '<div class="no-results">';
			$html .= '<p><strong>'.__('There has been an error.').'</strong></p>';
			$html .= '<p>'.__('We apologize for any inconvenience, please hit back on your browser or use the search form below.').'</p>';
			$html .= get_search_form();
			$html .= '</div>';
		}
		return $html;
	}

}

?>