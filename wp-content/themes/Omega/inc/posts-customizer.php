<?php
add_action( 'init', 'omega_jobs' );
    function omega_jobs() {
	register_post_type( 'omega-jobs',
                array(
                'labels' => array(
                    'name' => __( 'Omega jobs' ),
                    'singular_name' => __( 'Omega job' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'omega-jobs'),
                'supports' => array('thumbnail','title','editor','excerpt'),
            )
        );
        $labels = array(
              'name'              => _( 'job Categories'),
              'singular_name'     => _( 'job Category'),
              'search_items'      => __( 'Search Category' ),
              'all_items'         => __( 'All Categories' ),
              'parent_item'       => __( 'Parent Category' ),
              'parent_item_colon' => __( 'Parent Category:' ),
              'edit_item'         => __( 'Edit Category' ),
              'update_item'       => __( 'Update Category' ),
              'add_new_item'      => __( 'Add New Category' ),
              'new_item_name'     => __( 'New Category Name' ),
              'menu_name'         => __( 'Job Category' ),
          );
  
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'jobs-cat' ),
        );
        register_taxonomy( 'jobs-category', 'omega-jobs', $args);
        flush_rewrite_rules();	
}

add_action( 'init', 'leaderships' );
    function leaderships() {
	register_post_type( 'leaderships',
            array(
                'labels' => array(
                    'name' => __( 'leaderships' ),
                    'singular_name' => __( 'leadership' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'leaderships'),
                'supports' => array('thumbnail','title','editor',),

            )
        );
    }
    function postypes(){
        $labels = array(
            'name'              => _( 'Years'),
            'singular_name'     => _( 'Year'),
            'search_items'      => __( 'Search Year' ),
            'all_items'         => __( 'All Year' ),
            'parent_item'       => __( 'Parent Year' ),
            'parent_item_colon' => __( 'Parent Year:' ),
            'edit_item'         => __( 'Edit Year' ),
            'update_item'       => __( 'Update Year' ),
            'add_new_item'      => __( 'Add New Year' ),
            'new_item_name'     => __( 'New Year Name' ),
            'menu_name'         => __( 'Year' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'years' ),
        );
        register_taxonomy( 'years', 'news', $args);
        flush_rewrite_rules();

            $labels = array(
            'name'              => _( 'Hubs'),
            'singular_name'     => _( 'Hub'),
            'search_items'      => __( 'Search Hub' ),
            'all_items'         => __( 'All Hub' ),
            'parent_item'       => __( 'Parent Hub' ),
            'parent_item_colon' => __( 'Parent Hub:' ),
            'edit_item'         => __( 'Edit Hub' ),
            'update_item'       => __( 'Update Hub' ),
            'add_new_item'      => __( 'Add New Hub' ),
            'new_item_name'     => __( 'New Hub Name' ),
            'menu_name'         => __( 'Hub' ),
        );

        $args = array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'rewrite'           => array( 'slug' => 'news' ),
        );
        register_taxonomy( 'hubs', 'news', $args);
        flush_rewrite_rules();
    }
    add_action('init', 'postypes');
?>