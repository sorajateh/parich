<?php


add_filter( 'rwmb_meta_boxes', 'pr_register_meta_boxes' );
function pr_register_meta_boxes( $meta_boxes ) {
    $prefix = 'parich_';
    $meta_boxes[] = array(
        'id' => $prefix . 'meta_settings',
        'title' => 'Meta Info',
        'pages' => array( 'page' ),
        'fields' => array(
            array(
                'name' => 'Description',
                'id' => $prefix . 'meta_desc',
                'type' => 'textarea',
                'desc' => 'Enter a short description for this page or post.'
            ),
            array(
                'name' => 'Keywords',
                'id' => $prefix . 'meta_keywords',
                'type' => 'textarea',
                'desc' => 'Enter some keywords separated by comma for this page or post.'
            ),
        ),
    );  
    $meta_boxes[] = array(
        'id' => $prefix . 'dealer_info',
        'title' => 'Dealer Information',
        'pages' => array( 'dealer' ),
        'fields' => array(
            array(
                'name' => 'District',
                'id' => $prefix . 'dealer_district',
                'type' => 'text',
                'desc' => 'กรุณาใส่เฉพาะชื่ออำเภอ ไม่ต้องใส่ "อ."'
            ),
            array(
                'name' => 'Tel.',
                'id' => $prefix . 'dealer_tel',
                'type' => 'text',
            ),
            array(
                'name'    => 'Locate',
                'id'      => $prefix . 'dealer_locate',
                'type'    => 'taxonomy',
                'options' => array(
                    // Taxonomy name
                    'taxonomy' => 'locate',
                    // How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
                    'type' => 'select_tree',
                    // Additional arguments for get_terms() function. Optional
                    'args' => array()
                ),
            ),
        ),
    );  
    $meta_boxes[] = array(
        'id' => $prefix . 'download_info',
        'title' => 'Download Info',
        'pages' => array( 'download' ),
        'fields' => array(
            array(
                'name' => 'Type',
                'id'   => $prefix . 'download_type',
                'type' => 'taxonomy',
                'options' => array(
                    // Taxonomy name
                    'taxonomy' => 'file_type',
                    // How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
                    'type' => 'select',
                    // Additional arguments for get_terms() function. Optional
                    'args' => array()
                ),
            ),
            array(
                'name' => 'Source',
                'id'   => $prefix . 'download_src',
                'type' => 'file_advanced',
                'max_file_uploads' => 1,
                // 'mime_type' => 'pdf,mp3', // Leave blank for all file types
            ),
        ),
    ); 
    $meta_boxes[] = array(
        'id' => $prefix . 'instruc_info',
        'title' => 'Instruction Info',
        'pages' => array( 'instruction' ),
        'fields' => array(
            array(
                'name' => 'PDF File',
                'id'   => $prefix . 'instruc_src',
                'type' => 'file_advanced',
            ),
        ),
    );  
    return $meta_boxes;
}