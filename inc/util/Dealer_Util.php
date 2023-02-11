<?php

class Dealer_Util {

	private $post_type = 'dealer';
	private $taxonomy = 'locate';

	public function __construct() {
		add_action('restrict_manage_posts', array( $this , 'table_filter') );
		add_filter('parse_query', array( $this , 'table_filtering') );
		add_filter('manage_'.$this->post_type.'_posts_columns', array( $this , 'table_head') );
		add_action('manage_'.$this->post_type.'_posts_custom_column', array( $this , 'table_columns'), 10, 2 );
		add_action('admin_print_styles', array( $this , 'column_admin_styles') ) ;
	}

	public function table_filter() {	    
		global $typenow;
	    if ($typenow == $this->post_type) {
	        $selected = isset($_GET[$this->taxonomy]) ? $_GET[$this->taxonomy] : '';
	        $info_taxonomy = get_taxonomy($this->taxonomy);
	        wp_dropdown_categories(array(
	            'show_option_all' => __("Show All"),
	            'taxonomy' => $this->taxonomy,
	            'name' => $this->taxonomy,
	            'orderby' => 'id',
	            'selected' => $selected,
	            'show_count' => false,
	            'hide_empty' => true,
	            'depth' => 2,
	            'hierarchical' => true	            
	        ));
	    };
	}	

	public function table_filtering($query) {
		global $pagenow;
	    $q_vars = &$query->query_vars;
	    if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $this->post_type && isset($q_vars[$this->taxonomy]) && is_numeric($q_vars[$this->taxonomy]) && $q_vars[$this->taxonomy] != 0) {
	        $term = get_term_by('id', $q_vars[$this->taxonomy], $this->taxonomy);
	        $q_vars[$this->taxonomy] = $term->slug;
	    }
	}
	
	public function table_head( $defaults ) {
		$new = array();
		$new['cb'] = 'No';
		$new['title'] = 'Title';
		$new['district'] = 'District';
		// $new['categories'] = 'Categories';
		$new['region'] = 'Region';
		$new['province'] = 'Province';
		$new['date'] = 'Date';
	    return $new;  
	}

	public function table_columns( $column_name, $post_id ) {
	    if ($column_name == 'region') {
            $floor = self::get_post_top_parent_terms($post_id, $this->taxonomy);
            echo $floor;
	    }
	    if ($column_name == 'province') {  
	    	$block = self::get_post_second_parent_terms($post_id, $this->taxonomy);		
	      	echo $block;
	    }
	    if ($column_name == 'district') {  
	    	$district = rwmb_meta( 'parich_dealer_district' );	
	      	echo $district;
	    }
	}

	public function column_admin_styles(){
	    global $pagenow;
	    if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == $this->post_type){
	        echo '
	        <style type="text/css">
	        	.column-title { width: 30% }
	            .column-floor, .column-block{ width: 8%;}
	        </style>
	        '.PHP_EOL;
	    }
	}

	static function get_term_top_parent($term_id, $taxonomy){
	    $parent = get_term_by( 'id', $term_id, $taxonomy);
	    if ($parent->parent != '0'){
	        $term_id = $parent->parent;
	        $parent  = get_term_by( 'id', $term_id, $taxonomy);
	    }
	    return $parent;
	}

	static function get_post_top_parent_terms($post_id, $taxonomy, $results = 1) {
	    $terms = wp_get_object_terms( $post_id, $taxonomy );
	    $top_parent_terms = array();
	    foreach ( $terms as $term ) {
	        $top_parent = self::get_term_top_parent( $term->term_id, $taxonomy );
	        if ( !in_array( $top_parent, $top_parent_terms ) ) {
	            $top_parent_terms[] = $top_parent;
	        }
	    }
	    foreach ( $top_parent_terms as $term ) {
	        echo " " . $term->name;
	    }
	}

	static function get_post_second_parent_terms($post_id, $taxonomy, $results = 1) {
	    $terms = wp_get_object_terms( $post_id, $taxonomy );
	    $child_terms = array();
	    foreach ( $terms as $term ) {
	    	if ($term->parent != '0') {
	    		$child_terms[] = $term;	    	
	    	}
	    }
	    foreach ( $child_terms as $term ) {
	        echo " " . $term->name;
	    }
	}

}

?>